<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BangsalController extends Controller
{
    public function index()
    {
        return view('admin.bangsal.index');
    }
}
