<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penyakit;
use App\Services\PenyakitService;

class PenyakitController extends Controller
{
   public function __construct()
    {
        $this->middleware('auth');
    }
    
    // public function index(Request $request)
    // {
    //     $data = PenyakitService::PenyakitList($request);
    //     return view('admin.penyakit.index', compact('data'));
    //     // return view('admin.penyakit.index');
    // }

     public function list(Request $request)
    {
        // $eduStages = EducationStage::all();
        $data = PenyakitService::PenyakitList($request);
        return view('admin.penyakit.index',compact('data'));
    }

    public function add(Request $request)
    {
        $params = $request->all();
        $penyakit = PenyakitService::PenyakitList(['pagination'=>0]);
        return view('admin.penyakit.form',compact('penyakit'));

    }

    public function store(Request $request)
    {
        $params = $request->all();
        $data = PenyakitService::add($params);
         if(!isset($request['id'])){
            return redirect('/penyakit')->with('success', 'Berhasil menambahkan data');
        }else{
            return redirect('/penyakit')->with('successEdit', 'Berhasil mengedit data');
        }
        // return redirect('/penyakit');
    }

    public function delete($id)
    {
        $data = PenyakitService::deletePenyakit($id);
        // return redirect()->back()->with('message',$data);
        return redirect()->back()->with('success_hapus', 'Berhasil dihapus');

    }
}

    