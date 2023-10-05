<?php

namespace App\Services;

use DB;
use App\Models\Sensor;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\Request;



class SensorService
{
    public static function getDataSensor($id)
    {
        $data = Sensor::find($id);
        return $data;

    }
}