<?php
namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProdukController extends Controller
{
    public function index()
    {
        $produk = Produk::all();

        return view('admin.produk', compact('produk'));
    }

    public function create()
    {
        return view('admin.tambahproduk');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'Nama_menu' => 'required',
            'Harga_menu' => 'required',
            'stok' => 'required|integer',
            'Deskripsi' => 'required',
        ]);

        Produk::create($validatedData);

        return redirect('/produk')->with('success', 'Data Produk berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $produk = Produk::findOrFail($id);

        return view('admin.editproduk', compact('produk'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'Nama_menu' => 'required',
            'Harga_menu' => 'required',
            'stok' => 'required|integer',
            'Deskripsi' => 'required',
        ]);

        $produk = Produk::findOrFail($id);
        $produk->update($validatedData);

        return redirect('/produk')->with('success', 'Data Produk berhasil diperbarui.');
    }

    public function destroy($id)
    {
        Produk::destroy($id);

        return redirect('/produk')->with('success', 'Data Produk berhasil dihapus.');
    }

// public function menu()
// {
//     return $this->belongsTo(Transaksi::class, 'nama_menu');
// }
// 
}