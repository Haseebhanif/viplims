<?php

namespace App\Http\Controllers;

use App\Models\Package;
use App\Models\Products;
use App\Models\UserPackage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class PackagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['packages'] = Package::all();
        return view('package.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['products'] = Products::all();
        return view('package.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::beginTransaction();
        try {
            $token = new HomeController();
            $response = $token->get_token(env('PAYPAL_CLIENT_ID'),env('PAYPAL_SECRET'));
            if(isset($response->error)) {
                flash('' . $response->error_description . '')->error();
                return redirect()->back();
            }
            $validator = Validator::make($request->all(), [
                'title' => 'required',
                'price' => 'required',
                'period' => 'required',
                'features' => 'required'
            ]);
            if ($validator->fails()) {
                return redirect()->back()
                    ->withErrors($validator)
                    ->withInput();
            }
            $product = Products::first();
            $product = json_decode($product->response);
            $data = [
                'product_id' => $product->id,
                'name' => $request->title,
                'quantity_supported' => true,
                'description' => strip_tags($request->features)
            ];
//            if (isset($request->is_trial)) {
//                $data['billing_cycles'][] = [
//                    'frequency' => array('interval_unit' => strip_tags($request->trial_period), 'interval_count' => $request->trial_duration),
//                    'tenure_type' => 'TRIAL',
//                    'sequence' => 1,
//                    'total_cycles' => 1
//                ];
//            }

            $data['billing_cycles'][] = [
                'frequency' => array('interval_unit' => $request->period, 'interval_count' => 1),
                'tenure_type' => 'REGULAR',
                'sequence' => isset($request->is_trial) ? 2 : 1,
                'total_cycles' => 12,
                "pricing_scheme" => array(
                    "fixed_price" => array(
                        "value" => $request->price,
                        "currency_code" => "USD"
                    )),
            ];
            $data['payment_preferences'] = [
                'auto_bill_outstanding' => true,
                'setup_fee' => array('value' => '0', 'currency_code' => 'USD'),
                'setup_fee_failure_action' => 'CONTINUE',
                'payment_failure_threshold' => 3
            ];
            $data['taxes'] = [
                'percentage' => '0',
                'inclusive' => true
            ];
            $paypal = new PaypalController();
            $package = $paypal->make_package($data);
            if (!isset($package->debug_id) && isset($package) && $package != null) {
                $period = Package::create([
                    'title' => $request->title,
                    'price' => $request->price,
                    'period' => $request->period,
                    'features' => $request->features,
                    'paypal_plan_id' => $package->id,
                    'response' => json_encode($package),
                ]);
                DB::commit();
                flash(__('Package has been inserted successfully'))->success();
            }else
            {
                flash(__('Package has not been added, check your paypal credentials'))->error();
            }
            return redirect()->route('package.index');

        } catch (\Exception $e) {
            DB::rollback();
            flash(__('Something goes wrong'))->error();
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
        $package = Package::find($id);
        $response = json_decode($package->response);
        $paypal = new PaypalController();
        $data['package_id'] = $id;
//        $data['package'] = $package_ = $paypal->get_subscription($response->id);
        $data['plan'] = $plan = $paypal->get_plan($package->paypal_plan_id);
        $data['product'] = $product = $paypal->get_product($plan->product_id);
        $data['user_package_count'] = UserPackage::all()->where('package_id', $id)->count();
        return view('package.show', $data);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['package'] = Package::GetByID($id);
        return view('package.edit', $data);
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
        DB::beginTransaction();
        try {
            $package = Package::GetByID($id);
            $paypal = new PaypalController();
            $data = array("pricing_schemes" => [array("billing_cycle_sequence" => "2", "pricing_scheme" => array("fixed_price" => array("value" => $request->price,"currency_code"=>"USD")))]);
            $response = $paypal->update_plan_pricing($package->paypal_plan_id, $data);
            $package->price = $request->price;
            $package->save();
            DB::commit();
            flash('Price Updated Successfully')->success();
            return redirect()->route('package.index');

        } catch (\Exception $e) {
            DB::rollBack();
            flash('Something goes wrong')->error();
            return redirect()->back();
        }
    }

    public function deactivate($id)
    {
        try {
            $paypal = new PaypalController();
            $paypal->deactivate_plan($id);
            flash('Package is deactivated')->success();
            return redirect()->back();
        } catch (\Exception $e) {
            flash('Something goes wrong')->error();
            return redirect()->back();
        }
    }

    public function activate($id)
    {
        try {
            $paypal = new PaypalController();
            $paypal->activate_plan($id);
            flash('Package is activated')->success();
            return redirect()->back();
        } catch (\Exception $e) {
            flash('Something goes wrong')->error();
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::beginTransaction();
        try {
            $package = Package::GetByID($id);
            $package->delete();
            DB::commit();
            flash(__('Package has been deleted successfully'))->success();
            return redirect()->route('package.index');

        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->with(['error' => 'Something goes wrong' . $e]);
        }
    }

}
