@extends('admin.utama')
@section('content')
<form action="/tambahProduk1" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="form-group">
        <label for="GambarMenu">Gambar Menu:</label>
        <input type="file" name="GambarMenu" class="form-control" id="GambarMenu" required>
    </div>

    <div class="form-group">
        <label for="Nama_menu">Nama Menu:</label>
        <input type="text" name="Nama_menu" class="form-control" id="Nama_menu" required>
    </div>

    <div class="form-group">
        <label for="Harga_menu">Harga Menu:</label>
        <input type="number" name="Harga_menu" class="form-control" id="Harga_menu" step="1" required>
    </div>

    <div class="form-group">
        <label for="Deskripsi">Deskripsi Singkat:</label>
        <textarea name="Deskripsi" class="form-control" id="Deskripsi" required></textarea>
    </div>
    
    

    <input type="submit" class="btn btn-primary" value="Tambah Produk">
</form>
@endsection
