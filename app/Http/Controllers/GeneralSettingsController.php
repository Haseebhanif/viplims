<?php

namespace App\Http\Controllers;

use App\Models\GeneralSetting;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class GeneralSettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['generalsetting'] = GeneralSetting::first();
        return view("general_settings.index", $data);

    }
    public function logo()
    {
        $data['generalsetting'] = GeneralSetting::first();
        return view("general_settings.logo", $data);
    }

    public function home()
    {
        $data['generalsetting'] = GeneralSetting::first();
        return view("general_settings.home", $data);
    }

    public function storeHome(Request $request)
    {
        $generalsetting = GeneralSetting::first();

        $generalsetting->h_img = $request->h_img;
        $generalsetting->heading_colour = $request->heading_colour;
        $generalsetting->text_colour = $request->text_colour;
        $generalsetting->button_colour = $request->button_colour;

        if($generalsetting->save()){
            flash('Home settings has been updated successfully')->success();
            return redirect()->route('general_setting.home');
        }
        else{
            flash('Something went wrong')->error();
            return back();
        }
    }

    //updates the logo and favicons of the system
    public function storeLogo(Request $request)
    {
        $generalsetting = GeneralSetting::first();
        $user = User::find(Auth::id());
        if($request->hasFile('logo')){
            $generalsetting->logo = $request->file('logo')->store('uploads/logo');
            //ImageOptimizer::optimize(base_path('public/').$generalsetting->logo);
        }

        if($request->hasFile('admin_profile')){
            $user->avatar = $request->file('admin_profile')->store('uploads/admin_logo');
            //ImageOptimizer::optimize(base_path('public/').$generalsetting->admin_logo);
        }

        if($request->hasFile('favicon')){
            $generalsetting->favicon = $request->file('favicon')->store('uploads/favicon');
            //ImageOptimizer::optimize(base_path('public/').$generalsetting->favicon);
        }

        if($request->hasFile('admin_login_background')){
            $generalsetting->admin_login_background = $request->file('admin_login_background')->store('uploads/admin_login_background');
            //ImageOptimizer::optimize(base_path('public/').$generalsetting->admin_login_background);
        }

        if($request->hasFile('admin_login_sidebar')){
            $generalsetting->admin_login_sidebar = $request->file('admin_login_sidebar')->store('uploads/admin_login_sidebar');
            //ImageOptimizer::optimize(base_path('public/').$generalsetting->admin_login_sidebar);
        }

        if($generalsetting->save()){
            $user->save();
            flash('Logo settings has been updated successfully')->success();
            return redirect()->route('general_setting.logo');
        }
        else{
            flash('Something went wrong')->error();
            return back();
        }
    }

    public function color()
    {
        $generalsetting = GeneralSetting::first();
        return view("general_settings.color", compact("generalsetting"));
    }

    //updates system ui color
    public function storeColor(Request $request)
    {
        $generalsetting = GeneralSetting::first();
        $generalsetting->frontend_color = $request->frontend_color;

        if($generalsetting->save()){
            flash('Color settings has been updated successfully')->success();
            return redirect()->route('generalsettings.color');
        }
        else{
            flash('Something went wrong')->error();
            return back();
        }
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        $user = User::find(Auth::id());
        if($request->password!=null)
        {
            $user->password = Hash::make($request->password);
        }
        if($request->email!=null) {
            $user->email = $request->email;
        }
        $user->save();
        $generalsetting = GeneralSetting::first();
        $generalsetting->site_name = $request->site_name;
        $generalsetting->address = $request->address;
        $generalsetting->phone = $request->phone;
        $generalsetting->email = $request->email;
        $generalsetting->description = $request->description;
        $generalsetting->facebook = $request->facebook;
        $generalsetting->instagram = $request->instagram;
        $generalsetting->twitter = $request->twitter;
        $generalsetting->youtube = $request->youtube;
        $generalsetting->google_plus = $request->google_plus;

        if($generalsetting->save()){
//            $businessSettingsController = new BusinessSettingController();
//            $businessSettingsController->overWriteEnvFile('APP_NAME',$request->site_name);
//            $businessSettingsController->overWriteEnvFile('APP_TIMEZONE',$request->timezone);
            flash('GeneralSetting has been updated successfully')->success();
            return redirect()->route('general_setting.index');
        }
        else{
            flash('Something went wrong')->error();
            return back();
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
        //
    }

    public function setEnvironmentValue(array $values)
    {

        $envFile = app()->environmentFilePath();
        $str = file_get_contents($envFile);

        if (count($values) > 0) {
            foreach ($values as $envKey => $envValue) {

                $str .= "\n"; // In case the searched variable is in the last line without \n
                $keyPosition = strpos($str, "{$envKey}=");
                $endOfLinePosition = strpos($str, "\n", $keyPosition);
                $oldLine = substr($str, $keyPosition, $endOfLinePosition - $keyPosition);

                // If key does not exist, add it
                if (!$keyPosition || !$endOfLinePosition || !$oldLine) {
                    $str .= "{$envKey}={$envValue}\n";
                } else {
                    $str = str_replace($oldLine, "{$envKey}={$envValue}", $str);
                }

            }
        }

        $str = substr($str, 0, -1);
        if (!file_put_contents($envFile, $str)) return false;
        return true;

    }

}
