<?php

namespace App\Http\Controllers;

use App\Models\Policy;
use Illuminate\Http\Request;

class PolicyController extends Controller
{
    public function index($type)
    {
        $policy = Policy::where('name', $type)->first();
        return view('policies.index', compact('policy'));
    }

    //updates the policy pages
    public function store(Request $request){
        $policy = Policy::where('name', $request->name)->first();
        $policy->content = $request->page_content;
        $policy->save();

        flash($request->name.' updated successfully')->success();
        return back();
    }
}
