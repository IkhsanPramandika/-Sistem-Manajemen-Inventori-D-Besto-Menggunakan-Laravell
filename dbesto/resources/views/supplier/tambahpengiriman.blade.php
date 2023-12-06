@extends('supplier.utama')
@section('content')
<form action="/tambahpengirimanbaru" method="POST">
    @csrf

    <div class="form-group">
        <label for="nama_bahan">Nama Bahan:</label>
        <input type="text" name="Nama_bahan" class="form-control" id="Nama_bahan" required>
    </div>

    <div class="form-group">
        <label for="status">Total Produk:</label>
        <input type="text" name="Total_Produk" class="form-control" id="Total_Produk" required>
    </div>

    <div class="form-group">
        <label for="nama_bahan">Alamat Pengiriman:</label>
        <input type="text" name="Alamat_pengiriman" class="form-control" id="Alamat_pengiriman" required>
    </div>

    <input type="submit" class="btn btn-primary">
</form>
@endsection
