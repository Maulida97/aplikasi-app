<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\AlatService;

class AlatController extends Controller
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
        $data = AlatService::AlatlList($request);
        return view('admin.alat.index',compact('data'));
    }

    // public function add(Request $request)
    // {
    //     $params = $request->all();
    //     $bangsal = BangsalService::BangsalList(['pagination'=>0]);
    //     return view('admin.bangsal.form',compact('bangsal'));

    // }

    public function store(Request $request)
    {
        // $params = $request->all();
        if(!isset($request['id'])){
            $validated = $request->validate([
                'kode' => 'required|min:3|max:255',
                'name' => 'required|min:3|max:255',
            ]);
            $params = $validated;
            // dd($params);
        }else{
            // $params = $request->all();
              $validated = $request->validate([
                'id'=>'required',
                'kode' => 'required|min:3|max:255',
                'name' => 'required|min:3|max:255',
            ]);
            $params = $validated;
        }        
        
        $data = AlatService::add($params);
        if(!isset($request['id'])){
            return redirect('/alat')->with('success', 'Berhasil menambahkan data');
        }else{
            return redirect('/alat')->with('successEdit', 'Berhasil mengedit data');
        }
        // return redirect('/bangsal');
    }

    public function delete($id)
    {
        $data = AlatService::deleteAlat($id);
        // return redirect()->back()->with('message',$data);
        return redirect()->back()->with('success_hapus', 'Berhasil dihapus');

    }
}
