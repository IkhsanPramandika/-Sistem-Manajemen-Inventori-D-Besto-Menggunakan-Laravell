<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaksi;
use Illuminate\Support\Facades\DB;


class AdminController extends Controller
{
    public function index ()
    {
        return view('admin.utama');
    }


    public function dashboard()
{
    $data = Transaksi::select(\DB::raw('DATE(created_at) as tanggal'), \DB::raw('SUM(Total_harga) as total'))
        ->groupBy('tanggal')
        ->paginate(10);

    $data2 = Transaksi::select('Nama_customer', \DB::raw('COUNT(jenis_pembayaran) as pembayaran'))
        ->groupBy('Nama_customer')
        ->paginate(13);

    $total = [];
    $nama = [];
    $customer = [];
    $pembayaran = [];

    foreach ($data as $row) {
        $total[] = $row->total;
        $nama[] = $row->tanggal;
    }

    foreach ($data2 as $row) {
        $customer[] = $row->Nama_customer;
        $pembayaran[] = $row->pembayaran;
    }

    return view('admin.dashboard', compact('total', 'nama', 'customer', 'pembayaran'));
}



    public function table ()
    {
        return view('admin.table');
    }

    public function kalender ()
    {
        return view('admin.kalender');
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
    public function supplier ()
    {
    return view('admin.supplier');
    }

   


public function grafik()
{
   

        $data = Transaksi::select('Nama_kasir', \DB::raw('COUNT(Total_harga) as total'))
            ->groupBy('Nama_kasir')->paginate(10);


        $total = [];
        $nama = [];
      

        foreach ($data as $row) {
            $total[] = $row->total;
            $nama[] = $row->Nama_kasir;
        }
dd($nama);
        return view('admin.dashboard', compact('total', 'nama'));
}

}


    