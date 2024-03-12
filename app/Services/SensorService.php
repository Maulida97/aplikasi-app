<?php

namespace App\Services;

use DB;
use App\Models\sensor;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\Request;



class SensorService
{
    public static function sensortList(Request $request)
    {
            $data = sensor::paginate(10);
            Paginator::useBootstrap();
            return $data;

    }

    public static function getDataSensor($id)
    {
        $data = sensor::find($id);
        return $data;

    }


    public static function add($params){

        DB::beginTransaction();
        try {

            $inputsensor['nama_sensor'] = $params['nama_sensor'];
            $inputsensor['tetesan_infus'] = $params['tetesan_infus'];
            $inputsensor['volume_infus'] = $params['volume_infus'];



            if (isset($params['id'])) {

                $sensor = sensor::find($params['id']);
                $sensor->update($inputsensor);

            }else{
                $sensor = sensor::create($inputsensor);
            }
            DB::commit();
            return $sensor;
        } catch (\Throwable $th) {

            DB::rollback();
            return $th;

        }
    }






    public static function deleteSensor($id)
    {
        $data = Sensor::destroy($id);
        if($data){
            return "Deleted";
        }else{
            return "Failed";
        }
    }


}
