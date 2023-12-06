<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use App\Http\Requests\StoreTransaksiRequest;
use App\Http\Requests\UpdateTransaksiRequest;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $transaksi = Transaksi::all();

        return view('admin.transaksi', compact('transaksi'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.tambahdataTransaksi');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $dataT = $request->validate([
            'Nama_kasir' => 'required',
            'Nama_customer' => 'required',
            'jenis_layanan' => 'required',
            'cabang' => 'required',
            'nama_menu' => 'required',
            'harga_menu' => 'required',
            'qty' => 'required',
            'Total_harga' => 'required',
            'jenis_pembayaran' => 'required',
            

        
        
        ]);
    
        Transaksi::create($dataT);
        return redirect('/transaksi')->with('success', 'Data transaksi berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Transaksi $transaksi)
    {
        return view('admin.detailTransaksi', compact('transaksi'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Transaksi $transaksi)
    {
        return view('admin.editTransaksi', compact('transaksi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTransaksiRequest $request, Transaksi $transaksi)
    {
        $dataT = $request->validated();

        $transaksi->update($dataT);

        return redirect('/transaksi')->with('success', 'Data transaksi berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Transaksi $transaksi)
    {
        $transaksi->delete();

        return redirect('/transaksi')->with('success', 'Data transaksi berhasil dihapus.');
    }
}
