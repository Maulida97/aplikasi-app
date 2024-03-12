<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\kamar;
use App\Models\Pasien;
use App\Models\sensor;
use App\Events\notifEvent;
use App\Events\SensorEvent;
use App\Models\Sensorinfus;
use Illuminate\Http\Request;
use App\Services\SensorService;
use Illuminate\Support\Facades\DB;

class SensorController extends Controller
{
    public function list(Request $request)
    {
        // $kamar = Kamar::all();
        // $pasien = Pasien::all();
        // notify()->success('Welcome to Laravel Notify ⚡️') or notify()->success('Welcome to Laravel Notify ⚡️', 'My custom title');
        $data = SensorService::sensortList($request);
        // notify()->success('Laravel Notify is awesome!');
        return view('admin.dashboard.index',compact('data'))->with('success', 'Berhasil menambahkan data');
    }


    public function simpan($nilaiTetesan, $nilaiBerat)
    {
        $tgl = Carbon::now();
            $data = sensor::where('id', '1')->update([
                "volume_infus" => $nilaiBerat,
                "tetesan_infus" => $nilaiTetesan,
                "created_at" => $tgl,
                "updated_at" => $tgl,
            ]);

    }
    public function simpan2($nilaiTetesan2, $nilaiBerat2)
    {
        // $data = DB::table('sensors');
        $tgl = Carbon::now();

            $data = sensor::where('id', '2')->update([
                "volume_infus" => $nilaiBerat2,
                "tetesan_infus" => $nilaiTetesan2,
                "created_at" => $tgl,
                "updated_at" => $tgl,
            ]);

    }

    public function simpan3($nilaiTetesan3, $nilaiBerat3)
    {
        // $data = DB::table('sensors');
        $tgl = Carbon::now();

            $data = sensor::where('id', '3')->update([
                "volume_infus" => $nilaiBerat3,
                "tetesan_infus" => $nilaiTetesan3,
                "created_at" => $tgl,
                "updated_at" => $tgl,
            ]);

    }



    public function tampilkanDataSensor($deviceID) {
        $dataSensor = sensor::where('device_id', $deviceID)->get();
        return view('admin.dashboard.bacavolume')->with('dataSensor', $dataSensor);
    }
    // Infus 1
    public function bacavolume(){
        $sensor = sensor::where('id', '1')->get();
        return view('admin.dashboard.bacavolume', ['nilaisensor'=> $sensor]);
    }
    public function bacainfus(){
        $sensor = sensor::where('id', '1')->get();
        return view('admin.dashboard.bacatetesan', ['nilaisensor'=> $sensor]);
    }
    // public function bacatetesan(){
    //     $sensor = Sensor::select('*')->get();
    //     return view('admin.dashboard.bacatetesan', ['nilaisensor'=> $sensor]);
    // }

        // Infus 2
    public function bacavolume2(){
        $sensor = sensor::where('id', '2')->get();
        return view('admin.dashboard.bacavolume2', ['nilaisensor2'=> $sensor]);
    }
    public function bacainfus2(){
        $sensor = sensor::where('id', '2')->get();
        return view('admin.dashboard.bacatetesan2', ['nilaisensor2'=> $sensor]);
    }

    // Infus 3
    public function bacavolume3(){
        $sensor = sensor::where('id', '3')->get();
        return view('admin.dashboard.bacavolume3', ['nilaisensor3'=> $sensor]);
    }
    public function bacainfus3(){
        $sensor = sensor::where('id', '3')->get();
        return view('admin.dashboard.bacatetesan3', ['nilaisensor3'=> $sensor]);
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
