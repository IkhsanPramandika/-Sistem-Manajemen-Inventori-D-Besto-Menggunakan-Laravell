<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProdukSupplier;
use Illuminate\Support\Facades\DB;

use App\Http\Requests\StoreProdukSupplierRequest;
use App\Http\Requests\UpdateProdukSupplierRequest;

class ProdukSupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produkSupplier = ProdukSupplier::all();

        return view('supplier.produksupplier', compact('produkSupplier'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('supplier.tambahbahanSupplier');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
            $databahansupplier = $request->validate([
            'Nama_bahan'  => 'required',
            'Total_bahan'  => 'required',
            'Harga_bahan' => 'required|integer',
            
        ]);

        ProdukSupplier::create($databahansupplier);

        return redirect('/produksupplier')->with('success', 'Data Produk berhasil ditambahkan.');
    }
   
    /**
     * Display the specified resource.
     */
    public function show(ProdukSupplier $produkSupplier)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    
    public function edit($id)
    {
        $produkSupplier = DB::table('produk_suppliers')->first();
        $databahansupplier = DB::table('produk_suppliers')->where('id', $id)->first();
        return view('supplier.editbahansupplier', compact('produkSupplier'));
    }

        public function update(Request $request,$id)
        {
            $validated = $request->validate([
                'Nama_bahan' ,
                'Total_bahan' ,
                'Harga_bahan',
            ]);

            DB::table('produk_suppliers')->where('id', $id)->update([
                'Nama_bahan' => $request->Nama_bahan,
                'Total_bahan' => $request->Total_bahan,
                'Harga_bahan' => $request->Harga_bahan,
            ]);
            return redirect('/produkSupplier')->with('success', 'Data Produk berhasil diperbarui.');
        }


        public function hapusproduk($id)
        {
            DB::table('produk_suppliers')->where('id',$id)->delete();
            return redirect('/produkSupplier')->with('success', 'Data Berhasil dihapus');
        }
        }