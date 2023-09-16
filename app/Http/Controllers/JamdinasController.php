<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\JamdinasService;

class JamdinasController extends Controller
{
      public function __construct()
    {
        $this->middleware('auth');
    }

    // public function index()
    // {
    //     return view('admin.bangsal.index');
    // }

    public function list(Request $request)
    {
        $data = JamdinasService::JamdinaslList($request);
        return view('admin.jam_dinas.index',compact('data'));
    }

    public function add(Request $request)
    {
        $params = $request->all();
        $bangsal = BangsalService::BangsalList(['pagination'=>0]);
        return view('admin.bangsal.form',compact('bangsal'));

    }

    public function store(Request $request)
    {
        $params = $request->all();

        
        $data = JamdinasService::add($params);
        if(!isset($request['id'])){
            return redirect('/jamDinas')->with('success', 'Berhasil menambahkan data');
        }else{
            return redirect('/jamDinas')->with('successEdit', 'Berhasil mengedit data');
        }
        // return redirect('/bangsal');
    }

    public function delete($id)
    {
        $data = JamdinasService::deleteJamdinas($id);
        // return redirect()->back()->with('message',$data);
        return redirect()->back()->with('success_hapus', 'Berhasil dihapus');

    }
}
