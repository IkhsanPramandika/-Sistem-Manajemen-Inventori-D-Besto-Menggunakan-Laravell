@extends('admin.utama')
@section('content')
    <h1>Edit Produk</h1>
            <form action="{{ url('editproduk/'.$produk->id ) }}" method="POST">
        @csrf
      
        <!-- Tambahkan field form sesuai dengan atribut yang ingin diubah -->
    
        
        <div class="form-group">
            <label for="Nama_menu">Nama Menu:</label>
            <input type="text" name="Nama_menu" class="form-control" id="Nama_menu" value="{{$produk->Nama_menu}}">
        </div>
        <div class="form-group">
            <label for="Harga_menu">Harga Menu:</label>
            <input type="number" name="Harga_menu" class="form-control" id="Harga_menu" value="{{$produk->Harga_menu}}">
        </div>

        <div class="form-group">
            <label for="Harga_menu">Stok:</label>
            <input type="number" name="stok" class="form-control" id="stok" value="{{$produk->stok}}">
        </div>

        <div class="form-group">
            <label for="Deskripsi">Deskripsi:</label>
            <textarea name="Deskripsi" class="form-control" id="Deskripsi">{{$produk->Deskripsi}}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
@endsection
