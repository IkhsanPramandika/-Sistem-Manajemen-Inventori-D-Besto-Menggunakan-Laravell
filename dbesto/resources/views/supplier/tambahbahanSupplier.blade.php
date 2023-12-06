@extends('supplier.utama')
@section('content')
<form action="/tambahbahanSupplier1" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="Nama_bahan">Nama bahan:</label>
        <input type="text" name="Nama_bahan" class="form-control" id="Nama_bahan" required>
    </div>

    <div class="form-group">
        <label for="Total_bahan">Total bahan:</label>
        <input type="number" name="Total_bahan" class="form-control" id="Total_bahan" step="1" required>
    </div>

    <div class="form-group">
        <label for="Harga_bahan">Harga bahan:</label>
        <input type="number" name="Harga_bahan" class="form-control" id="Harga_bahan" step="1" required>
    </div>
    <input type="submit" class="btn btn-primary" value="Tambah Produk">
</form>
@endsection