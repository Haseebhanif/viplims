<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Package;
use App\Models\UserPackage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\PaypalController;
use Illuminate\Support\Facades\Notification;
use App\Notifications\CancelSubscriptionNotification;

class UserPackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->amount == 0){
            return redirect()->route('user_package.approve', $request->id);
        }

        DB::beginTransaction();
        try {
            $this->check_old_plan(Auth::id());
            $plan = Package::GetByID($request->id);
            $data = [
                "plan_id" => $plan->paypal_plan_id,
                "quantity" => $request->amount,
                "start_time" => Carbon::now()->addSeconds(10),
                "subscriber" => array('name' => array('given_name' => Auth::user()->first_name, 'surname' => Auth::user()->last_name), 'email_address' => Auth::user()->email),
                'application_context' => array('brand_name' => '' . env('APP_NAME') . ' Monthly Subscription', 'locale' => 'en-US', 'shipping_preference' => 'SET_PROVIDED_ADDRESS',
                    'user_action' => 'SUBSCRIBE_NOW', 'payment_method' =>
                        array('payer_selected' => 'PAYPAL', 'payee_preferred' => 'IMMEDIATE_PAYMENT_REQUIRED'),
                    'return_url' => '' . route('user_package.approve', $request->id) . '',
                    'cancel_url' => '' . route('pricing') . '')
            ];

            $paypal = new PaypalController();
            $subscribe = $paypal->subscribe($data);
            try {
                if (!isset($subscribe->debug_id)) {
                    $package = Package::GetByID($request->id);
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

    public function donation_store(Request $request)
    {

        if($request->amount == 0){
            return redirect()->route('user_package.approve', "1");
        }

        DB::beginTransaction();
        try {
            $plan = Package::GetByID("1");

            $data = [
                "plan_id" => $plan->paypal_plan_id,
                "quantity" => $request->amount,
                "start_time" => Carbon::now()->addSeconds(10),
                "subscriber" => array('name' => array('given_name' => Auth::user()->first_name, 'surname' => Auth::user()->last_name), 'email_address' => Auth::user()->email),
                'application_context' => array('brand_name' => '' . env('APP_NAME') . ' Monthly Subscription', 'locale' => 'en-US', 'shipping_preference' => 'SET_PROVIDED_ADDRESS',
                    'user_action' => 'SUBSCRIBE_NOW', 'payment_method' =>
                        array('payer_selected' => 'PAYPAL', 'payee_preferred' => 'IMMEDIATE_PAYMENT_REQUIRED'),
                    'return_url' => '' . route('user_package.approve', "1") . '',
                    'cancel_url' => '' . route('pricing') . '')
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
                    return redirect()->route('dashboard');
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

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $package = UserPackage::find($id);
        $response = json_decode($package->response);
        $paypal = new PaypalController();
        $data['package'] = $package = $paypal->get_subscription($response->id);
        $data['plan'] = $plan = $paypal->get_plan($package->plan_id);
        $data['product'] = $product = $paypal->get_product($plan->product_id);

        return view('frontend.customer.show', $data);
    }

    public function approve($id)
    {
        $this->check_old_plan(Auth::id());
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
                'user_id' => Auth::id(),
                'package_id' => $id,
                'expiring_date' => $expiring_date,
                'subscription_status' => 'APPROVED',
                'status_change_note' => null,
                'response' => json_encode($subscription),
            ]);
            DB::commit();
            return redirect()->route('dashboard');
        } catch (\Exception $e) {
            DB::rollBack();
            flash('Something goes wrong')->error();
            return redirect()->route('pricing');
        }
    }

    public function Newapprove($id)
    {
        $this->check_old_plan(Auth::id());
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
                'user_id' => Auth::id(),
                'package_id' => $id,
                'expiring_date' => $expiring_date,
                'subscription_status' => 'APPROVED',
                'status_change_note' => null,
                'response' => $subscription,
            ]);
            DB::commit();
            return redirect()->route('dashboard');
        } catch (\Exception $e) {
            DB::rollBack();
            flash('Something goes wrong'.$e)->error();
            return redirect()->route('pricing');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        DB::beginTransaction();
        try {
            $paypal = new PaypalController();
            $user_package = UserPackage::find($id);
            $response = json_decode($user_package->response);
            $data = array('reason' => $request->reason);
            $paypal->cancel_subscription($response->id,$data);
            $deleted =  $user_package->delete();
            DB::commit();
            Notification::route('mail', Auth::user()->email)->notify(new CancelSubscriptionNotification());
            if($deleted)
            {
                return true;
            }else
            {
                return false;
            }
        } catch (\Exception $e) {
            DB::rollBack();
            flash('Something goes wrong.')->error();
            return false;
        }
    }

    private function check_old_plan(?int $id)
    {
        DB::beginTransaction();
        try {
            $paypal = new PaypalController();
            $user_package = UserPackage::where('user_id',$id)->first();
            $response = json_decode($user_package->response);
            $data = array('reason' => 'upgrade/downgrade');
            $paypal->cancel_subscription($response->id,$data);
            $user_package->delete();
            DB::commit();
            Notification::route('mail', Auth::user()->email)->notify(new CancelSubscriptionNotification());
            flash('Your Subscription is cancelled successfully')->success();
            return redirect()->route('dashboard');
        } catch (\Exception $e) {
            DB::rollBack();
            flash('Something goes wrong.')->error();
            return redirect()->route('dashboard');
        }
    }
}
