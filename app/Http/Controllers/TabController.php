<?php

namespace App\Http\Controllers;

use App\Models\Cards;
use App\Models\Tab;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TabController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $data['tabs'] = Tab::all();
      return view('home_settings.tabs.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('home_settings.tabs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::beginTransaction();
        try {
            $tab = Tab::create([
                'title'=>$request->title,
                'text'=>$request->text,
                'status'=>$request->status,
                'link'=>$request->link,
            ]);
        $tab = Tab::find($tab->id);
            if($request->hasFile('file')) {
                $tab->file = $request->file('file')->store('uploads/tabs');
            }
            $tab->save();

            flash('Tab added successfully')->success();
            DB::commit();
            return redirect()->route('tabs.index');
        }catch (\Exception $e)
        {
            DB::rollBack();
            flash('Something goes wrong'.$e)->error();
            return redirect()->back();
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['tab'] = Tab::find($id);
        return view('home_settings.tabs.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        DB::beginTransaction();
        try {
            $tab = Tab::find($id);
            $tab->title = $request->title;
            $tab->text = $request->text;
            $tab->status = $request->status;
            $tab->link = $request->link;
            if($request->hasFile('file')) {
                $tab->file = $request->file('file')->store('uploads/tabs');
            }
            $tab->save();
            DB::commit();
            flash('Tab updated successfully')->success();
            return redirect()->route('tabs.index');

        } catch (\Exception $e) {
            DB::rollBack();
            flash('Something goes wrong')->error();
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::beginTransaction();
        try {
            $tab = Tab::find($id);
            $tab->delete();
            DB::commit();
            flash('Tab deleted successfully')->success();
            return redirect()->route('tabs.index');

        } catch (\Exception $e) {
            DB::rollBack();
            flash('Something goes wrong')->error();
            return redirect()->back();
        }
    }
}
