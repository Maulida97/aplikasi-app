<?php

namespace App\Services;

use DB;
// use App\Models\Penyakit;
use App\Models\Bangsal;
use App\Models\Admin;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\Request;



class BangsalService
{
    public static function BangsalList(Request $request)
    {
        if($request->has('keywords')){
           // mengambil data dari table pegawai
    	// $pegawai = DB::table('pegawai')->get();
 
    	// // mengirim data pegawai ke view index
    	// return view('index',['pegawai' => $pegawai]);
 
        }else{
            $data = Bangsal::paginate(10);
        }

        
        Paginator::useBootstrap();
        return $data;
    }

    public static function add($params){

        DB::beginTransaction();
        try {

            $inputBngsal['nama_bangsal'] = $params['nama_bangsal'];

            if (isset($params['id'])) {

                $bangsal = Bangsal::find($params['id']);
                $bangsal->update($inputBngsal);

            }else{
                $bangsal = Bangsal::create($inputBngsal);
            }
            DB::commit();
            return $bangsal;
        } catch (\Throwable $th) {

            DB::rollback();
            return $th;

        }
    }

    public static function deleteBangsal($id)
    {
        $data = Bangsal::destroy($id);
        if($data){
            return "Deleted";
        }else{
            return "Failed";
        }
    }
   
}