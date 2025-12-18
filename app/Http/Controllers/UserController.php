<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['users'] = User::all()->where('id','!=',Auth::id());
        return view('users.index',$data);
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
        $data['user'] = User::find($id);

        if(Auth::user()->user_type == 'customer')
        {
            if(Auth::user()->id != $id){
                DB::rollBack();
                flash('Something goes wrong')->warning();
                return redirect()->back();
            }
        }


        if(Auth::user()->user_type == 'admin')
        {
            return view('users.edit', $data);
        }else{
            return view('frontend.customer.edit', $data);
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
        DB::beginTransaction();
        try {
            $validator = Validator::make($request->all(), [
                'first_name' => 'required',
                'last_name' => 'required',
            ]);
            if ($validator->fails()) {
                return redirect()->back()
                    ->withErrors($validator)
                    ->withInput();
            }
            $user = User::find($id);
            $user->first_name = $request->first_name;
            $user->last_name = $request->last_name;
            if(isset($request->status))
            {
                $user->status = $request->status;
            }else{
                $user->status = "0";
            }
            if ($request->password != null) {
                $user->password = Hash::make($request->password);
            }
            if($user->save())
            {
                DB::commit();
                if(Auth::user()->user_type=='admin')
                {
                    flash('User Updated Successfully')->success();
                    return redirect()->route('users.index');
                }else
                {
                    flash('Profile Updated Successfully')->success();
                    return redirect()->route('dashboard');
                }

            }else
            {
                flash('Something goes wrong')->warning();
                return redirect()->route('user.edit', $id);
            }


        } catch (\Exception $e) {
            DB::rollback();
            flash('Something goes wrong'.$e)->warning();
            return redirect()->route('user.edit', $id);

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

            $user = User::find($id);
            $user->delete();
            flash('Account has been deleted successfully')->success();
            DB::commit();
            return redirect()->back();

        }catch (\Exception $e)
        {
            DB::rollBack();
            flash('Something goes wrong')->warning();
            return redirect()->back();
        }
    }
}
