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

//         if($request->has('keywords')){
//             //  $data = Perawat::leftJoin('users', 'users.id', 'petugas.user_id')->select('users.*', 'petugas.*')
//             // ->where(function ($row) use ($request){
//             //         $row->where(function ($query) use ($request) {
//             //             $query->where('users.name', 'like', '%' . $request->keywords . '%')
//             //                 ->orWhere('users.nip', 'like', '%' . $request->keywords . '%');
//             //         });
//             // })->paginate(5);
// // SELECT `users`.*, `admins*` FROM `admins` LEFT JOIN `users` ON `users`.`id` = `admins`.`user_id`
// // WHERE ((`users`.`name` LIKE % $request % OR `users`.`nip` LIKE % $request %) )
//         }else{

//         }
//         Paginator::useBootstrap();
//         return $data;

    }

    public static function getDataSensor($id)
    {
        $data = sensor::find($id);
        return $data;

    }






    public static function add(params $params){

        DB::beginTransaction();
        try {

            $inputsensor['nama_sensor'] = $params['nama_sensor'];
            $inputsensor['tetesan_infus'] = $params['tetesan_infus'];
            $inputsensor['volume_infus'] = $params['volume_infus'];
            // $inputsensor['device_id'] = $params['device_id'];



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
