@extends('admin.utama')
@section('content')
<form action="/tambahTransaksi" method="POST">
    @csrf

    <div class="form-group">
        <label for="nama_bahan">Nama Kasir:</label>
        <input type="text" name="Nama_kasir" class="form-control" id="Nama_kasir" required>
    </div>

    <div class="form-group">
        <label for="nama_bahan">Nama Customer:</label>
        <input type="text" name="Nama_customer" class="form-control" id="Nama_customer" required>
    </div>


    <div class="form-group">
        <label for="status">Total Harga:</label>
        <input type="text" name="Total_harga" class="form-control" id="Total_harga" required>
    </div>

    <input type="submit" class="btn btn-primary">
</form>
@endsection
