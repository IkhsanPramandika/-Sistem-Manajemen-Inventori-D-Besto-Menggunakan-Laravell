@extends('admin.utama')
@section('content')
    <h1>Edit Bahan Baku</h1>
    <form action="{{ url('bahanbakuedit/'.$BahanBaku->Kode_bahan ) }}" method="POST">
        @csrf
        <!-- Tambahkan field form sesuai dengan atribut yang ingin diubah -->
        
        
        <div class="form-group">
            <label for="Nama_menu">Nama Bahan:</label>
            <input type="text" name="Nama_bahan" class="form-control" id="Nama_bahan" value="{{$BahanBaku->Nama_bahan}}">
        </div>
        <div class="form-group">
            <label for="Harga_menu">Total Bahan :</label>
            <input type="text" name="Total_Produk" class="form-control" id="Nama_bahan" value="{{$BahanBaku->Total_Produk}}" >
        </div>
       
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
@endsection
