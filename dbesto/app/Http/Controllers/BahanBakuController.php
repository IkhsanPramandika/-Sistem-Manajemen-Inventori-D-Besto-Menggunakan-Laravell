<?php

namespace App\Http\Controllers;

use App\Models\BahanBaku;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


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

    public function edit($Kode_bahan)
    {
        $BahanBaku = DB::table('bahan_bakus')->first();
        $data = DB::table('bahan_bakus')->where('Kode_bahan', $Kode_bahan)->first();
        return view('admin.editbahanbaku', compact('BahanBaku'));
    }

        public function update(Request $request,$Kode_bahan)
        {
            $validated = $request->validate([
                'Nama_bahan' ,
                'Total_Produk' 
            ]);

            DB::table('bahan_bakus')->where('Kode_bahan', $Kode_bahan)->update([
                'Nama_bahan' => $request->Nama_bahan,
                'Total_Produk' => $request->Total_Produk,
            ]);
            return redirect('/bahanbaku')->with('success', 'Data Produk berhasil diperbarui.');
        }
        
    
    
    public function hapusbahan($Kode_bahan)
    {
         DB::table('bahan_bakus')->where('Kode_bahan',$Kode_bahan)->delete();
        return redirect('/bahanbaku')->with('success', 'Data Berhasil dihapus');
    }
}