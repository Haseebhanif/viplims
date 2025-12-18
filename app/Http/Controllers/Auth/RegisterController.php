<?php

namespace App\Http\Controllers\Auth;

use Carbon\Carbon;
use App\Models\User;
use GuzzleHttp\Client;
use App\Models\Package;
use App\Models\UserPackage;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\PaypalController;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param array $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'first_name' => ['required', 'string', 'max:255'],
            'company' => ['required', 'string', 'max:255', 'unique:users'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    protected function redirectTo()
    {
        if (session('url.intended')) {
            return session('url.intended');
        }
        return '/';
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param array $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        DB::beginTransaction();
        try {

            $params = [
                'company_name' => $data['company'],
                'first_name' => $data['first_name'],
                'last_name' => $data['last_name'],
                'role' => 1,
                'email' => $data['email'],
                'password' => md5($data['password']),
            ];
            $response = $this->register_in_saas($params);

            if (isset($response->status) && $response->status == true) {
                $user = User::create([
                    'company' => $data['company'],
                    'first_name' => $data['first_name'],
                    'last_name' => $data['last_name'],
                    'user_type' => 'customer',
                    'email' => $data['email'],
                    'password' => Hash::make($data['password']),
                ]);
                DB::commit();
                return $user;
            }else
            {
                flash('Something goes wrong. User is not registered');
                redirect()->back();
            }
        }catch (\Exception $e)
        {
            DB::rollback();
            flash('Something goes wrong');
            return redirect()->back();
        }
    }
    public function register(Request $request)
    {

        $this->validator($request->all())->validate();

        //event(new Registered($user = $this->create($request->all())));

        $user = $this->create($request->all());

        //$this->guard()->login($user);

        if ($response = $this->registered($request, $user)) {
            // return $response;
        }

        if($request->amount == "0"){
            //return redirect()->route('home/newapprove/1/'.$user->id);

            DB::beginTransaction();
            try {
                $package = Package::GetByID('1');
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
                    'user_id' => $user->id,
                    'package_id' => '1',
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

        }else{

            DB::beginTransaction();
            try {
                $plan = Package::GetByID('1');
                $data = [
                    "plan_id" => $plan->paypal_plan_id,
                    "quantity" => $request->amount,
                    "start_time" => Carbon::now()->addSeconds(10),
                    "subscriber" => array('name' => array('given_name' => $request->first_name, 'surname' => $request->last_name), 'email_address' => $request->email),
                    'application_context' => array('brand_name' => '' . env('APP_NAME') . ' Monthly Subscription', 'locale' => 'en-US', 'shipping_preference' => 'SET_PROVIDED_ADDRESS',
                        'user_action' => 'SUBSCRIBE_NOW', 'payment_method' =>
                            array('payer_selected' => 'PAYPAL', 'payee_preferred' => 'IMMEDIATE_PAYMENT_REQUIRED'),
                        'return_url' => '' . url('home/approve/'. '1'.'/'.$user->id) . '',
                        'cancel_url' => '' . route('tryforfree') . '')
                ];

                $paypal = new PaypalController();
                $subscribe = $paypal->subscribe($data);
                try {
                    if (!isset($subscribe->debug_id)) {
                        $package = Package::GetByID('1');
                        $package->response = json_encode($subscribe);
                        $package->save();
                        DB::commit();
                        foreach ($subscribe->links as $link) {
                            if ($link->rel == 'approve') {
                                return redirect($link->href);
                            }
                        }
                        flash('Your Subscription is now active.')->success();
                    }
                } catch (\Exception $e) {
                    flash('Something goes wrong')->error();
                    return redirect()->route('pricing');
                }
                return redirect()->route('dashboard');
            } catch (\Exception $e) {
                DB::rollback();
                flash('Something goes wrong' . $e)->error();
                return redirect()->back();
            }
        }

        return $request->wantsJson()
            ? new JsonResponse([], 201)
            : redirect($this->redirectPath());
    }

    protected function registered(Request $request, $user)
    {
        return redirect()->intended($this->redirectTo());
    }

    public function register_in_saas($data)
    {

        $url = "".env('PRODUCT_URL')."/app/api";
        $url = preg_replace("/^http:/i", "https:", $url);
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => json_encode($data),
            CURLOPT_HTTPHEADER => array(
                "Content-Type: application/json",
            ),
        ));
        $response = curl_exec($curl);

        curl_close($curl);
        return json_decode($response);
    }
}
