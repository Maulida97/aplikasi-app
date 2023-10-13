<?php

namespace App\Services;

use DB;
use App\Models\User;
use App\Models\Admin;
use App\Models\Kamar;
// use App\Models\Pasien;
// use App\Models\kamar;
use App\Models\pasien;
use App\Models\Perawat;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\Request;



class PasienService
{
    public static function PasienList(Request $request)
    {
        if($request->has('keywords')){
            //  $data = Perawat::leftJoin('users', 'users.id', 'petugas.user_id')->select('users.*', 'petugas.*')
            // ->where(function ($row) use ($request){
            //         $row->where(function ($query) use ($request) {
            //             $query->where('users.name', 'like', '%' . $request->keywords . '%')
            //                 ->orWhere('users.nip', 'like', '%' . $request->keywords . '%');
            //         });
            // })->paginate(5);
// SELECT `users`.*, `admins*` FROM `admins` LEFT JOIN `users` ON `users`.`id` = `admins`.`user_id`
// WHERE ((`users`.`name` LIKE % $request % OR `users`.`nip` LIKE % $request %) )
        }else{
            // $data = pasien::with('kamar')->get();
            $data = kamar::with('pasien')->paginate(10);
        }

      
        Paginator::useBootstrap();
        return $data;

    }


      public static function add($params)
    {
        // dd($params);
        // $username = $params['name'].rand(pow(10, 8 - 1), pow(10, 8) -1);
        DB::beginTransaction();
        // try {

            $inputpasien['name'] = $params['name'];
            $inputpasien['tanggal'] = $params['tanggal'];
            $inputpasien['gender'] = $params['gender'];
            $inputpasien['jenis_infus'] = $params['jenis_infus'];
            $inputpasien['kamar_id'] = $params['kamar_id'];
            $inputpasien['sensor_id'] = $params['sensor_id'];



            if (isset($params['id'])) {

                $pasien =  kamar::with('pasien')->find($params['id']);

                // $pasien = kamar::find($params['id']);
                // dd($inputpasien);

                $pasien->update($inputpasien);


            }else{
// dd('c');
                $pasien = kamar::create($inputpasien);
                //  dd($inputpasien);

            }
            DB::commit();
        //     return $inputpasien;
        // } catch (\Throwable $th) {

        //     DB::rollback();
        //     return $th;

        // }
    }

    public static function deletePasien($id)
    {
        $data = Pasien::destroy($id);
        if($data){
            return "Deleted";
        }else{
            return "Failed";
        }
    }
   
}