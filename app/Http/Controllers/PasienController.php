<?php

namespace App\Http\Controllers;
use App\Models\Kamar;
use App\Models\Pasien;
use App\Models\Sensor;
use App\Services\KamarService;
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
        $kamar = Kamar::all();
        // dd($kamar);

        $sensor = Sensor::all();
        // dd($sensor);

        // $pasien = Pasien::all();
        $data = PasienService::PasienList($request);
    // dd($data);
        return view('admin.pasien.index',compact('data','kamar','sensor'));
    }

    // public function add(Request $request)
    // {
    //     $params = $request->all();
    //     $pasien = PasienService::PasienList(['pagination'=>0]);
    //     return view('admin.pasien.form',compact('pasien'));

    // }

    public function index(Request $request)
    {
        // $kamar = Kamar::all();
        // dd($kamar1);
        // return view('admin.pasien.form', compact('kamar1'));
        $kamar = Kamar::all();
        return view('admin.pasien.index', compact('kamar'));

    }

    public function store(Request $request)
    {
        $params = $request->all();
        // dd($params);
        //  if(!isset($request['id'])){
        //     $validated = $request->validate([
        //         'name' => 'required|min:3|max:255',
        //         'tanggal' => 'required',
        //         'penyakit' => 'required',
        //         'jenis_infus' => 'required',
        //     ]);
        //     $params = $validated;
        //     // dd($params);
        // }else{
        //     // $params = $request->all();
        //       $validated = $request->validate([
        //         'id'=>'required',
        //         'name' => 'required|min:3|max:255',
        //         'tanggal' => 'required',
        //         'jenis_infus' => 'required',
        //     ]);
        //     $params = $validated;
        // }        
        // dd($params);
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
