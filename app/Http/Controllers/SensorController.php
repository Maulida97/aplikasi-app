<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Sensor;
use App\Models\Sensorinfus;
use App\Services\SensorService;
use App\Events\SensorEvent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SensorController extends Controller
{
    public function list(Request $request)
    {
        $data = SensorService::sensortList($request);
        return view('admin.dashboard.index',compact('data'));
    }


    public function simpan($nilaiTetesan, $nilaiBerat)
    {
        // $data = DB::table('sensors');
        $tgl = Carbon::now();
        // $data->insert([
        //     "berat_badan" => $nilaiBerat,
        //     "tinggi_badan" => $nilaiTinggi,
        //     "created_at" => $tgl,
        //     "updated_at" => $tgl,
        // ]);

    $data = Sensor::where('id', '1')->update([
        "berat_infus" => $nilaiBerat,
        "tetesan_infus" => $nilaiTetesan,
        "created_at" => $tgl,
        "updated_at" => $tgl,
    ]);

    // return event(new SensorEvent($nilaiBerat, $nilaiTetesan));


    }

    public function bacavolume(){
        $sensor = Sensor::select('*')->get();
        return view('admin.dashboard.bacavolume', ['nilaisensor'=> $sensor]);
    }
    // public function bacatetesan(){
    //     $sensor = Sensor::select('*')->get();
    //     return view('admin.dashboard.bacatetesan', ['nilaisensor'=> $sensor]);
    // }

    public function bacainfus(){
        $sensor = Sensor::select('*')->get();
        return view('admin.dashboard.bacatetesan', ['nilaisensor'=> $sensor]);
    }

    // public function simpan($nilaivolume, $nilaitetesan){
    //     Sensor::where('id', '1')->update([
    //         'berat_infus' => request()->nilaivolum,
    //         'laju_tetesan' => request()->nilaitetesan
    // ]);
    // }


    public function listsensor(Request $request)
    {
        $datasensor = SensorService::sensortList($request);
        return view('admin.sensor.index',compact('datasensor'));
    }


    public function store(Request $request)
    {
        $params = $request->all();
        // if(!isset($request['id'])){
        //     $validated = $request->validate([
        //         'kode' => 'required|min:3|max:255',
        //         'name' => 'required|min:3|max:255',
        //     ]);
        //     $params = $validated;
        //     // dd($params);
        // }else{
        //     // $params = $request->all();
        //       $validated = $request->validate([
        //         'id'=>'required',
        //         'kode' => 'required|min:3|max:255',
        //         'name' => 'required|min:3|max:255',
        //     ]);
        //     $params = $validated;
        // }        
        
        $data = SensorService::add($params);
        if(!isset($request['id'])){
            return redirect('/sensor')->with('success', 'Berhasil menambahkan data');
        }else{
            return redirect('/sensor')->with('successEdit', 'Berhasil mengedit data');
        }
        // return redirect('/bangsal');
    }

    public function delete($id)
    {
        $data = SensorService::deleteSensor($id);
        // return redirect()->back()->with('message',$data);
        return redirect()->back()->with('success_hapus', 'Berhasil dihapus');

    }
}
