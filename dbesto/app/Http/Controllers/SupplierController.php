<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoreSupplierRequest;
use App\Http\Requests\UpdateSupplierRequest;


class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $supplier = Supplier::all();

        return view('admin.supplier', compact('supplier'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.tambahSupplier');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $dataS = $request->validate([
            'Nama_supplier' => 'required',
            'Nomor_telepon' => 'required',
            'Alamat'=> 'required',
            'Nama_produk' => 'required',
        ]);

        Supplier::create($dataS);
        return redirect('/supplier');
    }

    /**
     * Display the specified resource.
     */
    public function show(Supplier $supplier)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $supplier = DB::table('suppliers')->first();
        $dataS = DB::table('suppliers')->where('id', $id)->first();
        return view('admin.editsupplier', compact('supplier')); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'Nama_supplier' ,
            'Nomor_telepon' ,
            'Alamat' ,
            'Nama_produk', 
            
            
        ]);
    
        DB::table('suppliers')->where('id', $id)->update([
            'Nama_supplier' => $request->Nama_supplier,
            'Nomor_telepon' => $request->Nomor_telepon,
            'Alamat' => $request->Alamat,
            'Nama_produk' => $request->Nama_produk,
        ]);
    
        return redirect('/supplier');
    }
    
    public function hapussupplier($id)
    {
        DB::table('suppliers')->where('id',$id)->delete();
        return redirect('/supplier')->with('success', 'Data Berhasil dihapus');
    }
} 
