<?php

namespace App\Services;

use DB;
use App\Models\Kamar;
use App\Models\Admin;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\Request;



class KamarService
{
    public static function KamarList(Request $request)
    {
        if($request->has('keywords')){
           // mengambil data dari table pegawai
    	// $pegawai = DB::table('pegawai')->get();
 
    	// // mengirim data pegawai ke view index
    	// return view('index',['pegawai' => $pegawai]);
 
        }else{
            $data = Kamar::paginate(10);
        }

        
        Paginator::useBootstrap();
        return $data;
    }

    public static function add($params){

        // DB::beginTransaction();
        // try {

            $inputkamar['nama_kamar'] = $params['nama_kamar'];

            if (isset($params['id'])) {

                $kamar = Kamar::find($params['id']);
                $kamar->update($inputkamar);

            }else{
                $kamar = Kamar::create($inputkamar);
            }
            DB::commit();
            return $kamar;
        // } catch (\Throwable $th) {

        //     DB::rollback();
        //     return $th;

        // }
    }
        

    public static function deleteKamar($id)
    {
        $data = Kamar::destroy($id);
        if($data){
            return "Deleted";
        }else{
            return "Failed";
        }
    }
   
}