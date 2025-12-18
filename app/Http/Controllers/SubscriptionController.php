<?php

namespace App\Http\Controllers;

use App\Models\UserPackage;
use App\Notifications\CancelSubscriptionNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Notification;

class SubscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['subscriptions'] = UserPackage::with(['user', 'package'])->get();

        return view('subscriptions.index', $data);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $package = UserPackage::with(['user', 'package'])->find($id);
        $response = json_decode($package->response);
        $paypal = new PaypalController();
        $data['subscription_id'] = $id;
        $data['package'] = $package;
        $data['subscription'] = $subscription = $paypal->get_subscription($response->id);
        $data['plan'] = $plan = $paypal->get_plan($subscription->plan_id);
        $data['product'] = $product = $paypal->get_product($plan->product_id);
        return view('subscriptions.show', $data);
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

    public function suspend(Request $request, $id)
    {
        DB::beginTransaction();
        try {
            $package = UserPackage::find($id);
            $response = json_decode($package->response);
            $paypal = new PaypalController();
            $data = array('reason' => $request->reason);
            $paypal->suspend_subscription($response->id, $data);
            DB::commit();
            flash('Subscription is suspended')->success();
            return redirect()->back();
        } catch (\Exception $e) {
            DB::rollback();
            flash('Something goes wrong')->error();
            return redirect()->back();
        }
    }

    public function activate(Request $request, $id)
    {
        DB::beginTransaction();
        try {
            $package = UserPackage::find($id);
            $response = json_decode($package->response);
            $paypal = new PaypalController();
            $data = array('reason' => $request->reason);
            $paypal->activate_subscription($response->id, $data);
            DB::commit();
            flash('Subscription is activated')->success();
            return redirect()->back();
        } catch (\Exception $e) {
            DB::rollback();
            flash('Something goes wrong')->error();
            return redirect()->back();
        }
    }

    public function cancel(Request $request, $id)
    {
        DB::beginTransaction();
        try {
            $package = UserPackage::find($id);
            $response = json_decode($package->response);
            $paypal = new PaypalController();
            $data = array('reason' => $request->reason);
            $paypal->cancel_subscription($response->id, $data);
            DB::commit();
            Notification::route('mail',$package->user->email)->notify(new CancelSubscriptionNotification());
            flash('Subscription is cancelled')->success();
            return redirect()->back();
        } catch (\Exception $e) {
            DB::rollback();
            flash('Something goes wrong'.$e)->error();
            return redirect()->back();
        }
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
            $user_package->delete();
            DB::commit();
            Notification::route('mail', Auth::user()->email)->notify(new CancelSubscriptionNotification());
            flash('Your Subscription is cancelled successfully')->success();
            return redirect()->back();
        } catch (\Exception $e) {
            DB::rollBack();
            flash('Something goes wrong.')->error();
            return redirect()->back();

        }
    }
}
