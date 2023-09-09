<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\BangsalService;
use App\Services\PenyakitService;

class BangsalController extends Controller
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
        // $eduStages = EducationStage::all();
        $data = BangsalService::BangsalList($request);
        return view('admin.bangsal.index',compact('data'));
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
        $data = BangsalService::add($params);
        return redirect('/bangsal');
    }

    public function delete($id)
    {
        $data = BangsalService::deleteBangsal($id);
        return redirect()->back()->with('message',$data);
    }


}
