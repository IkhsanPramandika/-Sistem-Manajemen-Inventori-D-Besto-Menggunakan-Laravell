@extends('supplier.utama')
@section('content')
    <h1>Edit Bahan Baku</h1>
    <form action="{{ url('editpengiriman/'.$info_pengiriman_suppliers->id ) }}" method="POST">
        @csrf
        <!-- Tambahkan field form sesuai dengan atribut yang ingin diubah -->
        
        
        <div class="form-group">
            <label for="Nama_menu">Nama Bahan:</label>
            <input type="text" name="Nama_bahan" class="form-control" id="Nama_bahan" value="{{$info_pengiriman_suppliers->Nama_bahan}}">
        </div>
        <div class="form-group">
            <label for="Harga_menu">Total Produk :</label>
            <input type="text" name="Total_produk" class="form-control" id="Nama_bahan" value="{{$info_pengiriman_suppliers->Total_produk}}" >
        </div>
        <div class="form-group">
            <label for="Harga_menu">Alamat Pengiriman  :</label>
            <input type="text" name="Total_Produk" class="form-control" id="Nama_bahan" value="{{$info_pengiriman_suppliers->Alamat_pengiriman	}}" >
        </div>
       
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
@endsection
