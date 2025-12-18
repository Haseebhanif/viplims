<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\BusinessSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApiController extends Controller
{

    public function updateBusinessSetting(Request $request)
    {

        DB::beginTransaction();
        try {
            $setting = BusinessSetting::where('type', $request->type)->first();
            $setting->value = $request->value;
            $setting->save();
            DB::commit();
            return response()->json(['title' => 'success', 'message' => '' . $request->type . ' setting updated successfully']);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['title' => 'error', 'message' => 'Something goes wrong'.$e, 'status' => 500]);
        }
    }
}
