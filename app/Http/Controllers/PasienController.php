<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\PasienService;

class PasienController extends Controller
{

   public function __construct()
    {
        $this->middleware('auth');
    }

   
    public function list(Request $request)
    {
        $data = PasienService::PasienList($request);
        return view('admin.pasien.index',compact('data'));
    }

    public function add(Request $request)
    {
        $params = $request->all();
        $pasien = PasienService::PasienList(['pagination'=>0]);
        return view('admin.pasien.form',compact('pasien'));

    }

    public function store(Request $request)
    {
        $params = $request->all();

        
        $data = PasienService::add($params);
                //  dd($params);

        if(!isset($request['id'])){
            return redirect('/pasien')->with('success', 'Berhasil menambahkan data');
        }else{
            return redirect('/pasien')->with('successEdit', 'Berhasil mengedit data');
        }
        // return redirect('/bangsal');
    }

    public function delete($id)
    {
        $data = PasienService::deletePasien($id);
        // return redirect()->back()->with('message',$data);
        return redirect()->back()->with('success_hapus', 'Berhasil dihapus');

    }
}
