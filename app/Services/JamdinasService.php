<?php

namespace App\Services;

use DB;
// use App\Models\Penyakit;
use App\Models\Bangsal;
use App\Models\Admin;
use App\Models\Jam_Dinas;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\Request;



class JamdinasService
{
    public static function JamdinaslList(Request $request)
    {
        if($request->has('keywords')){
           // mengambil data dari table pegawai
    	// $pegawai = DB::table('pegawai')->get();
 
    	// // mengirim data pegawai ke view index
    	// return view('index',['pegawai' => $pegawai]);
 
        }else{
            $data = Jam_Dinas::paginate(10);
        }

        
        Paginator::useBootstrap();
        return $data;
    }

    public static function add($params){

        DB::beginTransaction();
        try {

            $inputjam['jam_dinas'] = $params['jam_dinas'];

            if (isset($params['id'])) {

                $jamdinas = Jam_Dinas::find($params['id']);
                $jamdinas->update($inputjam);

            }else{
                $jamdinas = Jam_Dinas::create($inputjam);
            }
            DB::commit();
            return $jamdinas;
        } catch (\Throwable $th) {

            DB::rollback();
            return $th;

        }
    }

    public static function deleteJamdinas($id)
    {
        $data = Jam_Dinas::destroy($id);
        if($data){
            return "Deleted";
        }else{
            return "Failed";
        }
    }
   
}