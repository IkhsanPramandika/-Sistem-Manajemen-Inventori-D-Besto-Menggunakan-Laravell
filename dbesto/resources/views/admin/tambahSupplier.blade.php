@extends('admin.utama')
@section('content')
<form action="/tambahSupplier1" method="POST">
    @csrf

    <div class="form-group">
        <label for="kode_bahan">Nama Supplier :</label>
        <input type="text" name="Nama_supplier" class="form-control" id="Nama_supplier" required>
    </div>

    <div class="form-group">
        <label for="nama_bahan">Nama Telepon:</label>
        <input type="text" name="Nomor_telepon" class="form-control" id="Nomor_telepon" required>
    </div>

    <div class="form-group">
        <label for="status">Alamat : </label>
        <input type="text" name="Alamat" class="form-control" id="Alamat" required>
    </div>
    
    <div class="form-group">
        <label for="status">Nama Produk : </label>
        <input type="text" name="Nama_produk" class="form-control" id="Nama_produk" required>
    </div>

    <input type="submit" class="btn btn-primary">
</form>
@endsection
