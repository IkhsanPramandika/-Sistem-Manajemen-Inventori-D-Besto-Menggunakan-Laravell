<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\InfoPengirimanSupplier;
use App\Http\Requests\StoreInfoPengirimanSupplierRequest;
use App\Http\Requests\UpdateInfoPengirimanSupplierRequest;
use Illuminate\Http\Request;

class InfoPengirimanSupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $info_pengiriman_suppliers = InfoPengirimanSupplier::all();

        return view('supplier.infopengiriman', compact('info_pengiriman_suppliers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('supplier.tambahpengiriman');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $info_pengiriman_suppliers = $request->validate([
            
            'Nama_bahan' => 'required',
            'Total_Produk' => 'required',
            'Alamat_pengiriman' => 'required',
        ]);

        InfoPengirimanSupplier::create($info_pengiriman_suppliers);
        return redirect('/infopengiriman');
    }

    /**
     * Display the specified resource.
     */
    public function show(InfoPengirimanSupplier $info_pengiriman_suppliers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $info_pengiriman_suppliers = DB::table('info_pengiriman_suppliers')->first();
        $data = DB::table('info_pengiriman_suppliers')->where('id', $id)->first();
        return view('supplier.editpengiriman', compact('info_pengiriman_suppliers'));
    }
    
    public function update(Request $request,$id)
    {
        $validated = $request->validate([
            'Nama_bahan',
            'Total_Produk' ,
            'Alamat_pengiriman'
        ]);
    
        DB::table('info_pengiriman_suppliers')->where('id', $id)->update([
            'Nama_bahan' => $request->Nama_bahan,
            'Total_produk' => $request->Total_produk,
            'Alamat_pengiriman' => $request->Alamat_pengiriman,
        ]);
    
        return redirect('/infopengiriman');
    }
    
    public function hapuspengiriman($id)
    {
         DB::table('info_pengiriman_suppliers')->where('id',$id)->delete();
        return redirect('/infopengiriman')->with('success', 'Data Berhasil dihapus');
    }
}