<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\SysSlider;

class SysSliderController extends Controller
{
    public function getAllSlider(){
        $sliderlist = SysSlider::where('deleted_at','=',NULL)->get();
        
        if(count($sliderlist) > 0 )
        {
            $status       = true;
            $status_code  = 200;
            $message      = "data found";
            $data         = $sliderlist;
        }else {
            $status       = false;
            $status_code  = 404;
            $message      = "data not found";
            $data         = null;
        }

        $resp = ['status' => $status,
                'status_code' => $status_code,
                'message' => $message,
                'data'  => $data];

        return response()->json($resp);
    }
}
