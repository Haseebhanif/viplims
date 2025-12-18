<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class SliderController extends Controller
{
    public function index(Request $request)
    {
        $data['slider'] = Slider::first();
        return view('home_settings.slider.index', $data);
    }
    public function store(Request $request)
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
