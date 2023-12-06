@extends('admin.utama')
@section('content')
<form action="/tambah" method="POST">
    @csrf


    <div class="form-group">
        <label for="nama_bahan">Nama Bahan:</label>
        <input type="text" name="Nama_bahan" class="form-control" id="Nama_bahan" required>
    </div>

    <div class="form-group">
        <label for="status">Total Bahan:</label>
        <input type="text" name="Total_Produk" class="form-control" id="Total_Produk" required>
    </div>

    <input type="submit" class="btn btn-primary">
</form>
@endsection
