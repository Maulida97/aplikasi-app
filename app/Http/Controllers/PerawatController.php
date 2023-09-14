<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\AdminService;
use App\Services\PerawatService;


class PerawatController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    // public function index(Request $request)
    // {

    //     $data = PerawatService::perawatList($request);
    //     return view('admin.perawat.index', compact('data'));
    // }

    public function list(Request $request)
    {
        $data = PerawatService::perawatList($request);
        return view('admin.perawat.index',compact('data'));
    }



    
    public function create()
    {
        return view('admin.perawat.form');
    }


    public function edit($id) 
    {
        $data = PerawatService::AdminEdit($id);
        // dd($data);

        // dd($data);
        return view('admin.perawat.form', compact('data'));
    }    


    public function store(Request $request)
    {
        // if(!isset($request['id'])){
        //     $validated = $request->validate([
        //         'name' => 'required|min:3|max:255',
        //         'email' => 'required|email:dns|unique:users',
        //         'nip' => 'required|min:18|max:18|unique:users',
        //         'gender' => 'required',
        //         // 'image_url' => '',
        //         'password' => 'min:6|required_with:password_confirmation|same:password_confirmation',
        //         'password_confirmation' => 'min:6'
        //     ]);
        //     $params = $validated;
        //     // dd($params);
        // }else{
        //     // $params = $request->all();
        //       $validated = $request->validate([
        //         'id'=>'required',
        //         'name' => 'required|min:3|max:255',
        //         'email' => 'required|email:dns|unique:users',
        //         'nip' => 'required|min:18|max:18|unique:users',
        //         'gender' => 'required',
        //         // 'image_url' => '',
        //         'password' => 'min:6|required_with:password_confirmation|same:password_confirmation',
        //         'password_confirmation' => 'min:6'
        //     ]);
        //     $params = $validated;
        // }        
        
        
        $params = $request->all();
        // dd($params);
        $data = PerawatService::add($params);
        if(!isset($request['id'])){
            return redirect('perawat')->with('success', 'Berhasil menambahkan data');
        }else{
            return redirect('perawat')->with('successEdit', 'Berhasil mengedit data');
        }
    }
    public function detail($id)
    {
        $data = PerawatService::AdminDetail($id);
        return view('admin.perawat.detail',compact('data'));
    }
    
    
    public function delete($id)
    {
        $data = PerawatService::deletePerawat($id);
        return redirect()->back()->with('success_hapus', 'Berhasil dihapus');
    }



}
