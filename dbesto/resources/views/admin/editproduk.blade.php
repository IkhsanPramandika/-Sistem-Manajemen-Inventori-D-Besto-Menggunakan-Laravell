@extends('admin.utama')
@section('content')
    <h1>Edit Produk</h1>
    <form action="{{ route('produk.update', $produk->id) }}" method="POST">

        @csrf
        @method('PUT')
        <!-- Tambahkan field form sesuai dengan atribut yang ingin diubah -->
        <div class="form-group">
            <label for="GambarMenu">Gambar Menu:</label>
            <input type="file" name="GambarMenu" class="form-control-file" id="GambarMenu">
        </div>
        
        <div class="form-group">
            <label for="Nama_menu">Nama Menu:</label>
            <input type="text" name="Nama_menu" class="form-control" id="Nama_menu" value="{{ $txtNama }}">
        </div>
        <div class="form-group">
            <label for="Harga_menu">Harga Menu:</label>
            <input type="number" name="Harga_menu" class="form-control" id="Harga_menu" value="{{ $txtHarga }}">
        </div>
        <div class="form-group">
            <label for="Deskripsi">Deskripsi:</label>
            <textarea name="Deskripsi" class="form-control" id="Deskripsi">{{ $txtDeskripsi }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
@endsection
