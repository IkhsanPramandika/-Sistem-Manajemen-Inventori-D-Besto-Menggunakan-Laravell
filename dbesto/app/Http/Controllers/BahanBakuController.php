<?php

namespace App\Http\Controllers;

use App\Models\BahanBaku;
use Illuminate\Http\Request;

class BahanBakuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $BahanBaku = BahanBaku::all();

        return view('admin.bahanbaku', compact('BahanBaku'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.tambahdata');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'Kode_bahan' => 'required',
            'Nama_bahan' => 'required',
            'Total_Produk' => 'required',
        ]);

        BahanBaku::create($data);
        return redirect('/bahanbaku');
    }

    /**
     * Display the specified resource.
     */
    public function show(BahanBaku $BahanBaku)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BahanBaku $BahanBaku)
    {
        return view('admin.editbahan', compact('bahanBaku'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, BahanBaku $BahanBaku)
    {
        $data = $request->validate([
            'Kode_bahan' => 'required',
            'Nama_bahan' => 'required',
            'Total_Produk' => 'required',
        ]);

        $BahanBaku->update($data);
        return redirect('/bahanbaku');
    }

   
    public function destroy($BahanBaku)
    {
        BahanBaku::findOrFail($BahanBaku)->delete();
        return redirect('/bahanbaku')->with('success', 'Data Bahan Baku berhasil dihapus.');
    }
}