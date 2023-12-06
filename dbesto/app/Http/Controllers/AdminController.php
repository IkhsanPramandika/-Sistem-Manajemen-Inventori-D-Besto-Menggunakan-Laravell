<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index ()
    {
        return view('admin.utama');
    }
    public function dashboard ()
    {
        return view('admin.dashboard');
    }
    public function table ()
    {
        return view('admin.table');
    }

    public function hallogin ()
    {
    return view('admin.login');
    }

    public function charts ()
    {
    return view('admin.chart');
    }

    public function daftar ()
    {
    return view('admin.register');
    }
    public function lupapw ()
    {
    return view('admin.lupapassword');
    }
    public function bahanbaku ()
    {
    return view('admin.bahanbaku');
    }
    public function transaksi ()
    {
    return view('admin.transaksi');
    }
    
}