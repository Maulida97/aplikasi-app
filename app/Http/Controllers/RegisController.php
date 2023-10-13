<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisController extends Controller
{
    public function index()
    {
        return view('auth.regis');
    }
    public function store(Request $request)
    {
        // dd($request);
        $validated = $request->validate([
            // 'user_name' => 'min:6',
            'name' => 'required|min:3|max:255',
            'username' => 'required|unique:users',
            'nip' => 'required|unique:users',
            'password' => 'min:6|required_with:password_confirmation|same:password_confirmation',
        // dd($request);

        ]);
        // dd($request);

        $validated['password'] = Hash::make($validated['password']);
    
        $data = User::create($validated);
        $admin = $data->admin()->create([]);
        return redirect('login')->with('success', 'Registration Successful, Please Login');
    }
}
