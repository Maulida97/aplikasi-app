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
    
    public function index(Request $request)
    {
        $data = PenyakitService::PenyakitList($request);
        return view('admin.lansia.index', compact('data'));
        // return view('admin.penyakit.index');
    }

        
}
