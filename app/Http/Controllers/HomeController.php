<?php

namespace App\Http\Controllers;

use App\Jobs\CreateProduct;
use App\Models\BusinessSetting;
use App\Models\FooterLink;
use App\Models\GeneralSetting;
use App\Models\Package;
use App\Models\Subscriber;
use App\Models\User;
use App\Models\UserPackage;
use App\Notifications\ContactUsNotification;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller
{

    public function __construct()
    {
        $data['generalsetting'] = GeneralSetting::first();
    }

//    public function login()
//    {
//        if (Auth::check() && Auth::user()->user_type == 'customer') {
//            return redirect()->route('home');
//        }
//        return view('frontend.auth.login');
//    }

    public function get_token($client_id, $secret_key)
    {
        if(env('PAYPAL_MODE') == 'sandbox') {

            $curl = curl_init();
            curl_setopt_array($curl, array(
                CURLOPT_URL => env('PAYPAL_SANDBOX_BASE_URL') . "/oauth2/token",
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_POSTFIELDS => 'grant_type=client_credentials',
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "POST",
                CURLOPT_USERPWD => $client_id . ':' . $secret_key,
                CURLOPT_HTTPHEADER => array(
                    'Content-Type: application/x-www-form-urlencoded',
                ),
            ));
        }else
        {
            $curl = curl_init();
            curl_setopt_array($curl, array(
                CURLOPT_URL => env('PAYPAL_LIVE_BASE_URL') . "/oauth2/token",
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_POSTFIELDS => 'grant_type=client_credentials',
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "POST",
                CURLOPT_USERPWD => $client_id . ':' . $secret_key,
                CURLOPT_HTTPHEADER => array(
                    'Content-Type: application/x-www-form-urlencoded',
                ),
            ));
        }
            $response = curl_exec($curl);
            curl_close($curl);
            return json_decode($response);
    }


    public function admin_dashboard()
    {

        if (Auth::check() && Auth::user()->user_type == 'admin') {
            $response = $this->get_token(env('PAYPAL_CLIENT_ID'),env('PAYPAL_SECRET'));
            if(isset($response->error))
            {
                flash(''.$response->error_description.'')->error();
            }else
            {
                CreateProduct::dispatch();
            }
            $data['total_users'] = User::all()->where('user_type', '!=', 'admin')->count();
            $data['users'] = User::all()->where('user_type', '!=', 'admin')->take(6)->sortByDesc('created_at');
            $data['total_user_package'] = UserPackage::all()->count();
            $data['total_packages'] = Package::all()->count();
            $data['total_subscribers'] = Subscriber::all()->count();
            $data['packages'] = Package::all()->take(6)->sortByDesc('created_at');

            return view('dashboard', $data);
        } elseif (Auth::check() && Auth::user()->user_type == 'customer') {
            return redirect()->route('home');
        }
        return view('auth.login');

    }

    public
    function privacypolicy()
    {
        return view("frontend.policies.privacypolicy");
    }

    public function submit_contact_form(Request $request)
    {

        $this->validate($request, [
            'g-recaptcha-response' => 'required|captcha',
        ]);
        
        try {
            $admins = User::all()->where('user_type','==','admin');
            $data = [
                'name'=>$request->name,
                'email'=>$request->email,
                'message' =>$request->message
            ];
            foreach ($admins as $admin)
            {
                Notification::route('mail',$admin->email)->notify(new ContactUsNotification($data));
            }
            flash('Your message is sent successfully')->success();
            return redirect()->back();

        }catch (\Exception $e)
        {
            flash('Something goes wrong')->error();
            return redirect()->back();
        }
    }

    public
    function terms_conditions()
    {
        return view("frontend.policies.terms_conditions");
    }

    public
    function pricing()
    {
        $data['packages'] = Package::GetByPrice('!=', 0);
        return view('pricing', $data);
    }

    public
    function tryforfree()
    {
        return view('tryforfree');
    }

    public
    function donation()
    {

        return view('donation');
    }



    public function contact_us()
    {
        return view('contact_us');
    }

    /**
     * Show the customer/seller dashboard.
     *
     * @return Response
     */
    public function dashboard()
    {
//        if (Auth::user()->user_type == 'customer') {
       $data['user_packages'] =  UserPackage::GetByUserId(auth()->id());
       $data['trial_package'] = Package::GetByPrice('=', 0);
       $data['active_package'] = UserPackage::GetByUserIdAndStatus(auth()->id(), 'APPROVED');

       $packages = UserPackage::GetByUserIdAndStatus(auth()->id(), 'APPROVED');

       if(isset($packages)){
           $response = json_decode($packages->response);
          if($response == null){
              $response = new \stdClass();
              $response->quantity = 0;
          }
           $data['package'] = $response;
       }

            return view('frontend.customer.dashboard', $data);
//        } else if (Auth::user()->user_type == 'admin') {

//            return redirect()->route('admin.dashboard');
//        } else {
//            abort(404);
//        }
    }


    public function approve($id,$user_id)
    {
        DB::beginTransaction();
        try {
            $package = Package::GetByID($id);
            $response = json_decode($package->response);
            $paypal = new PaypalController();
            $subscription = $paypal->get_subscription($response->id);
            switch ($package->period) {
                case "DAY":
                    $expiring_date = Carbon::now()->addDay();
                    break;
                case "WEEK":
                    $expiring_date = Carbon::now()->addWeek();
                    break;
                case "MONTH":
                    $expiring_date = Carbon::now()->addMonth();
                    break;
                case "YEAR":
                    $expiring_date = Carbon::now()->addYear();
                    break;
                default:
                    $expiring_date = null;
            }
            UserPackage::create([
                'user_id' => $user_id,
                'package_id' => $id,
                'expiring_date' => $expiring_date,
                'subscription_status' => 'APPROVED',
                'status_change_note' => null,
                'response' => json_encode($subscription),
            ]);
            DB::commit();
            return redirect()->route('login');
        } catch (\Exception $e) {
            DB::rollBack();
            flash('Something goes wrong')->error();
            return redirect()->route('login');
        }
    }

    public function Newapprove($id,$user_id)
    {

        DB::beginTransaction();
        try {
            $package = Package::GetByID($id);
            $response = json_decode($package->response);
            $subscription = "";
            switch ($package->period) {
                case "DAY":
                    $expiring_date = Carbon::now()->addDay();
                    break;
                case "WEEK":
                    $expiring_date = Carbon::now()->addWeek();
                    break;
                case "MONTH":
                    $expiring_date = Carbon::now()->addMonth();
                    break;
                case "YEAR":
                    $expiring_date = Carbon::now()->addYear();
                    break;
                default:
                    $expiring_date = null;
            }

            UserPackage::create([
                'user_id' => $user_id,
                'package_id' => $id,
                'expiring_date' => $expiring_date,
                'subscription_status' => 'APPROVED',
                'status_change_note' => null,
                'response' => $subscription,
            ]);
            DB::commit();
            return redirect()->route('login');
        } catch (\Exception $e) {
            DB::rollBack();
            flash('Something goes wrong'.$e)->error();
            return redirect()->route('login');
        }
    }


    public function registration(Request $request)
    {

        if($request->amount == null){
            $data['Amount'] = "0";
        }else{
            $data['Amount'] = $request->amount;
        }

        return view('frontend.auth.register',$data);
    }

    public function profile(Request $request)
    {
        $this->mail_callback($request);

        if (Auth::user()->user_type == 'customer') {
            return view('frontend.customer.profile');
        } elseif (Auth::user()->user_type == 'seller') {
            return view('frontend.seller.profile');
        }
    }

    public function mail_callback($request)
    {
        if (!Auth::user()) {
            return null;
        }

        if ($request->has('new_email_verificiation_code') && $request->has('email')) {
            $verification_code_of_url_param = $request->input('new_email_verificiation_code');
            $verification_code_of_db = Auth::user()->new_email_verificiation_code;

            if (strcmp($verification_code_of_url_param, $verification_code_of_db) == 0) {
                $user = Auth::user();
                $user->email = $request->input('email');
                $user->save();
                flash('Email Changed successfully')->success();
            }
        }

        return null;

    }

    public function customer_update_profile(Request $request)
    {
        $user = Auth::user();
        $user->name = $request->name;
        $user->address = $request->address;
        $user->country = $request->country;
        $user->city = $request->city;
        $user->postal_code = $request->postal_code;
        $user->phone = $request->phone;

        if ($request->new_password != null && ($request->new_password == $request->confirm_password)) {
            $user->password = Hash::make($request->new_password);
        }

        if ($request->hasFile('photo')) {
            $user->avatar_original = $request->photo->store('uploads/users');
        }

        if ($user->save()) {
            flash(__('Your Profile has been updated successfully!'))->success();
            return back();
        }

        flash(__('Sorry! Something went wrong.'))->error();
        return back();
    }

    public function index()
    {
//        $data['cards'] = Cards::all()->where('status','=','1');
//        $data['slider'] = Slider::first();
//        $data['tabs'] = Tab::all()->where('status','=','1');
//        $data['clients'] = Client::all()->where('status','=','1');
//        $data['video'] = Video::first();

//        if (Auth::check() && Auth::user()->user_type == 'customer') {
//            return redirect()->route('dashboard');
//        }else if(Auth::check() && Auth::user()->user_type == 'admin')
//        {
//            return redirect()->route('admin.dashboard');
//        }
        $business_settings = BusinessSetting::all();
        foreach ($business_settings as $business_setting) {
            $data['business_settings'][$business_setting->type] = $business_setting;
        }

        $data['generalsetting'] = GeneralSetting::first();

        return view('frontend.welcome',$data);

    }


    public function apppassword()
    {
        return view('users.apppassword');
    }

    public function changepassword(Request  $request)
    {
       //$oldpassword = md5($request['oldpassword']);
        $newpassword = md5($request['password']);
        $user_email = Auth::user()->email;
        $results = DB::select('select * from user where email = :email', ['email' => $user_email]);

        if(!empty($results)){
            DB::update('update user set original_password = "'.$request['password'].'",password = "'.$newpassword.'" where id = '.$results[0]->id);
            flash(__('Your App password is changed successfully!'))->success();
            return back();
        }else{
            flash(__('Sorry! Something went wrong.'))->error();
            return back();
        }

    }

}
