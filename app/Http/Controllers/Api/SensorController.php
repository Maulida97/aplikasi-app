<?php

namespace App\Http\Controllers\Api;

use App\Services\SensorService;
use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\Request;

class SensorController extends Controller
{
    public function sensorlist(Request $request)
    {
            $data = SensorService::add($params);
            // dd($data);
            if(!isset($request['id'])){
                return  response()->json([
                    "status" => "success",
                    "message" => "Success created pm lansia",
                    "data"      => $data,
                ]);
                }else{
                return   response()->json([
                    "status" => "success",
                    "message" => "Success edit pm lansia",
                    "data"      => $data,
                ]);
                }
    }
}
