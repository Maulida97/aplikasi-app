<?php

namespace App\Services;

use DB;
use App\Models\Penyakit;
use App\Models\Admin;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\Request;



class PenyakitService
{
    public static function PenyakitList(Request $request)
    {
        if($request->has('keywords')){
           // mengambil data dari table pegawai
    	// $pegawai = DB::table('pegawai')->get();
 
    	// // mengirim data pegawai ke view index
    	// return view('index',['pegawai' => $pegawai]);
 
        }else{
            $data = Penyakit::paginate(10);
        }

      
        Paginator::useBootstrap();
        return $data;
    }

    public static function add($params){

        DB::beginTransaction();
        try {

            $inputPenyakit['nama_penyakit'] = $params['nama_penyakit'];
            $inputPenyakit['tetesan'] = $params['tetesan'];

            if (isset($params['id'])) {

                $penyakit = Penyakit::find($params['id']);
                $penyakit->update($inputPenyakit);

            }else{
                $penyakit = Penyakit::create($inputPenyakit);
            }
            DB::commit();
            return $penyakit;
        } catch (\Throwable $th) {

            DB::rollback();
            return $th;

        }
    }

    public static function deletePenyakit($id)
    {
        $data = Penyakit::destroy($id);
        if($data){
            return "Deleted";
        }else{
            return "Failed";
        }
    }
   
}