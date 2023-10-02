<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\AdminService;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {

        $data = AdminService::adminList($request);
        return view('admin.admin.index', compact('data'));
    }

    public function list(Request $request)
    {
        $data = AdminService::adminList($request);
        return view('admin.admin.index',compact('data'));
    }



    
    public function create()
    {
        return view('admin.admin.form');
    }
    public function edit($id) 
    {
        $data = AdminService::AdminEdit($id);
        // dd($data);

        // dd($data);
        return view('admin.admin.form', compact('data'));
    }    


    public function store(Request $request)
    {
        $params = $request->all();
            // dd($params);

        // if(!isset($request['id'])){
        //     $validated = $request->validate([
        //         'name' => 'required|min:3|max:255',
        //         'username' => 'required|min:3|max:255',
        //         'email' => 'required|email:dns|unique:users',
        //         'nip' => 'required|min:18|max:18|unique:users',
        //         'gender' => 'required',
        //         'password' => 'min:6|required_with:password_confirmation|same:password_confirmation',
        //         'password_confirmation' => 'min:6'
        //     ]);
        //     $params = $validated;
        //     // dd($params);

        // }else{
        //     // $params = $request->all();
        //     // dd($params);

        //       $validated = $request->validate([
        //         'id'=>'required',
        //         'name' => 'required|min:3|max:255',
        //         'username' => 'required|min:3|max:255',
        //         'email' => 'required',
        //         'nip' => 'required',
        //         'gender' => 'required',
        //         'password' => 'min:6|required_with:password_confirmation|same:password_confirmation',
        //         'password_confirmation' => 'min:6'
        //     ]);
        //     $params = $validated;
        //     // dd($params);


        // }        
        
        $params = $request->all();
        $data = AdminService::add($params);
        if(!isset($request['id'])){
            return redirect('admin')->with('success', 'Berhasil menambahkan data');
        }else{
            return redirect('admin')->with('successEdit', 'Berhasil mengedit data');
        }
    }
    public function detail($id)
    {
        $data = AdminService::AdminDetail($id);
        return view('admin.admin.detail',compact('data'));
    }
    
    
    public function delete($id)
    {
        $data = AdminService::deleteAdmin($id);
        return redirect()->back()->with('success_hapus', 'Berhasil dihapus');
    }



}
