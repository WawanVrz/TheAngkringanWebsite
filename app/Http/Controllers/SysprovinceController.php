<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\SysProvince;

class SysprovinceController extends Controller
{
    public function getAllProvince(){
        $provincelist = SysProvince::all();
        
        if(count($provincelist) > 0 )
          {
            $status       = true;
            $status_code  = 200;
            $message      = "data found";
            $data         = $provincelist;
          }else {
            $status       = false;
            $status_code  = 201;
            $message      = "data not found";
            $data         = null;
          }

          $resp         =['status' => $status,
                          'status_code' => $status_code,
                          'message' => $message,
                          'data'  => $data];

        return response()->json($resp);
    }
}
