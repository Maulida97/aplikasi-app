<?php

namespace App\Services;

use DB;
// use App\Models\Penyakit;
use App\Models\bangsal;
use App\Models\admin;
use App\Models\alat;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\Request;



class AlatService
{
    public static function AlatlList(Request $request)
    {
        if($request->has('keywords')){
           // mengambil data dari table pegawai
    	// $pegawai = DB::table('pegawai')->get();

    	// // mengirim data pegawai ke view index
    	// return view('index',['pegawai' => $pegawai]);

        }else{
            $data = alat::paginate(10);
        }


        Paginator::useBootstrap();
        return $data;
    }

    public static function add($params){

        DB::beginTransaction();
        try {

            $inputAlat['kode'] = $params['kode'];
            $inputAlat['name'] = $params['name'];


            if (isset($params['id'])) {

                $alat = alat::find($params['id']);
                $alat->update($inputAlat);

            }else{
                $alat = alat::create($inputAlat);
            }
            DB::commit();
            return $alat;
        } catch (\Throwable $th) {

            DB::rollback();
            return $th;

        }
    }

    public static function deleteAlat($id)
    {
        $data = alat::destroy($id);
        if($data){
            return "Deleted";
        }else{
            return "Failed";
        }
    }

}
