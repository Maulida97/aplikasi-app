<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Services\SensorService;
use App\Http\Controllers\Controller;

class SensorController extends Controller
{
    /**
     * Display a listing of the resource.
     */


    public function list(Request $request)
    {
        $input = $request->all();
        return $data = SensorService::sensortList($input);
        return response()->json([
            "status" => "success",
            "message" => "Data List sensor",
            "data"      => $data,
        ], 200);
    }


    public function index()
    {
        {
            // $input = $request->all();
            return $data = SensorService::getDataSensor();
            return response()->json([
                "status" => "success",
                "message" => "Data List sensor",
                "data"      => $data,
            ], 200);
        }
    
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
