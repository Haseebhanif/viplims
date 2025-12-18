<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Rest\ApiContext;

class ProductController extends Controller
{

    public function index()
    {
        $data['products'] = Products::all();
        return view('products.index', $data);
    }

    public function create()
    {

        return view('products.create');
    }

    public function store(Request $request)
    {
        DB::beginTransaction();
        try {

            $validator = Validator::make($request->all(), [
                'description' => 'required',
                'type' => 'required',
                'category' => 'required',
                'product_url' => 'required',
            ]);
            if ($validator->fails()) {
                return redirect()->back()
                    ->withErrors($validator)
                    ->withInput();
            }

            if (isset($product)) {
                Products::create([
                    'name' => $request->name,
                    'description' => $request->description,
                    'type' => $request->type,
                    'category' => $request->category,
                    'image_url' => $request->image_url,
                    'home_url' => $request->home_url,
                    'product_url' => $request->product_url,
                    'response' => $product,
                ]);
            }
            DB::commit();
            flash('Product added successfully')->success();
            return redirect()->route('products.index');
        } catch (\Exception $e) {
            DB::rollBack();
            flash('Something goes wrong')->error();
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
        //
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
    public function destroy($id)
    {
        //
    }

}
