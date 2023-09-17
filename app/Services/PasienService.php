<?php

namespace App\Services;

use DB;
use App\Models\User;
use App\Models\Admin;
use App\Models\Perawat;
use App\Models\Pasien;
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
            $data = Pasien::paginate(10);
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
            $inputpasien['bangsal'] = $params['bangsal'];
            $inputpasien['kamar'] = $params['kamar'];
            $inputpasien['no_tempat_tidur'] = $params['no_tempat_tidur'];
            $inputpasien['tanggal'] = $params['tanggal'];
            $inputpasien['penyakit'] = $params['penyakit'];
            $inputpasien['jenis_infus'] = $params['jenis_infus'];

            if (isset($params['id'])) {
                //  dd($inputpasien);

                $pasien = Pasien::find($params['id']);
                $pasien->update($inputpasien);

            }else{

                $pasien = Pasien::create($inputpasien);
                //  dd($inputpasien);

            }
        //     DB::commit();
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