<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoleSupplierController extends Controller
{
    public function index ()
    {
        return view('supplier.utama');
    }
    public function dashboardsupplier ()
    {
        return view('supplier.dashboardsupplier');
    }
    public function table ()
    {
        return view('supplier.table');
    }

    public function kalender ()
    {
        return view('supplier.kalender');
    }

    public function hallogin ()
    {
    return view('supplier.login');
    }

    public function charts ()
    {
    return view('supplier.chart');
    }

    public function daftar ()
    {
    return view('supplier.register');
    }
    public function lupapw ()
    {
    return view('supplier.lupapassword');
    }

    public function infopengiriman ()
    {
    return view('supplier.infopengiriman');
    }
    public function produksupplier ()
    {
    return view('supplier.produksupplier');
    }


    
}
