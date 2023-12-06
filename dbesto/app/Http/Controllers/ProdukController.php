<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use App\Http\Requests\StoreProdukRequest;
use App\Http\Requests\UpdateProdukRequest;

class ProdukController extends Controller
{
    public function index()
    {
        $produk = Produk::all();

        return view('admin.produk', compact('produk'));
    }

    public function create()
    {
        return view('admin.tambahProduk');
    }

    public function store(Request $request)
    {
        $dataP = $request->validate([
            'GambarMenu' => 'required',
            'Nama_menu' => 'required',
            'Harga_menu' => 'required',
            'Deskripsi' => 'required',
        ]);
    
        Produk::create($dataP);
        return redirect('/produk')->with('success', 'Data Produk berhasil ditambahkan.');
    }

    public function show($id)
    {
        $produk = Produk::findOrFail($id);
        return view('produk.editproduk', compact('produk'));
    }

    public function update(UpdateProdukRequest $request, $id)
    {
        $produk = Produk::findOrFail($id);
        $dataP = $request->validated();
        $produk->update($dataP);
        return redirect('/produk')->with('success', 'Data Produk berhasil diperbarui.');
    }

    public function delete(Produk $produk)
    {
        $produk->delete();
        return redirect('/produk')->with('success', 'Data Produk berhasil dihapus.');
    }
}
