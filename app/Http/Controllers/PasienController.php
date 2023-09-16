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

     public function index()
    {
        return view('admin.pasien.index');
    }


    public function list(Request $request)
    {
        $data = PasienService::PasientList($request);
        return view('admin.pasien.index',compact('data'));
    }
}
