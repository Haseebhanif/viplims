<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class HomeSettingController extends Controller
{
    public function slider(Request $request)
    {
        $data['slider'] = Slider::first();
        return view('home_settings.slider', $data);
    }

    public function store_slider(Request $request)
    {
        DB::beginTransaction();
        try {
            $slider = Slider::first();
            $slider->title= $request->title;
            $slider->text= $request->text;
            $slider->status= $request->status;
            if($request->hasFile('image')) {
                $slider->image = $request->file('image')->store('uploads/slider');
            }
            $slider->save();
            DB::commit();
            flash('Slider updated successfully')->success();
            return redirect()->back();
        } catch (\Exception $e) {
            DB::rollBack();
            flash('Something goes wrong')->error();
            return redirect()->back();
        }

    }
}
