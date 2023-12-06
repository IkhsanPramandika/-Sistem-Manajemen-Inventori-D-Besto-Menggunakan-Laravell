@extends('admin.utama')
@section('content')
    <h1>Edit Supplier</h1>
    <form action="{{ url('supplieredit/'.$supplier->id ) }}" method="POST">
        @csrf
        <!-- Tambahkan field form sesuai dengan atribut yang ingin diubah -->
        
        
        <div class="form-group">
            <label for="Nama_menu">Nama Supplier:</label>
            <input type="text" name="Nama_supplier" class="form-control" id="Nama_supplier" value="{{$supplier->Nama_supplier}}">
        </div>

        <div class="form-group">
            <label for="Nama_menu">Nama Telepon:</label>
            <input type="text" name="Nomor_telepon" class="form-control" id="Alamat" value="{{$supplier->Nomor_telepon}}">
        </div>

        <div class="form-group">
            <label for="Nama_menu">Alamat:</label>
            <input type="text" name="Alamat" class="form-control" id="Nama_produk" value="{{$supplier->Alamat}}">
        </div>

        <div class="form-group">
            <label for="Nama_menu">Nama Bahan:</label>
            <input type="text" name="Nama_produk" class="form-control" id="Nama_bahan" value="{{$supplier->Nama_produk}}">
        </div>
       
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
@endsection
