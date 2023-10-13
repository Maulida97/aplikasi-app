<?php

namespace App\Http\Controllers;
use App\Models\Kamar;
use Illuminate\Http\Request;
use App\Services\KamarService;

class KamarController extends Controller
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
        
        $kamar = Kamar::all();
        // dd($kamar);
        $data = KamarService::KamarList($request);
        return view('admin.kamar.index',compact('data','kamar'));
    }

    // public function add(Request $request)
    // {
    //     $params = $request->all();
    //     $kamar = KamarService::KamarList(['pagination'=>0]);
    //     return view('admin.kamar.form',compact('kamar'));

    // }

    public function store(Request $request)
    {
        $params = $request->all();

        
        $data = KamarService::add($params);
        if(!isset($request['id'])){
            return redirect('/kamar')->with('success', 'Berhasil menambahkan data');
        }else{
            return redirect('/kamar')->with('successEdit', 'Berhasil mengedit data');
        }
        // return redirect('/bangsal');
    }

    public function delete($id)
    {
        $data = KamarService::deleteKamar($id);
        // return redirect()->back()->with('message',$data);
        return redirect()->back()->with('success_hapus', 'Berhasil dihapus');

    }
}
