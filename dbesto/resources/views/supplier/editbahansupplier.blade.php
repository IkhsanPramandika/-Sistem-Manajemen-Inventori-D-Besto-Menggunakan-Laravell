@extends('supplier.utama')
@section('content')
    <h1>Edit Produk</h1>
            <form action="{{ url('editbahansupplier/'.$produkSupplier->id ) }}" method="POST">
        @csrf
      
        <!-- Tambahkan field form sesuai dengan atribut yang ingin diubah -->
    
        
        <div class="form-group">
            <label for="Nama_menu">Nama Menu:</label>
            <input type="text" name="Nama_bahan" class="form-control" id="Nama_bahan" value="{{$produkSupplier->Nama_bahan}}">
        </div>
        <div class="form-group">
            <label for="Harga_menu">Total Bahan:</label>
            <input type="number" name="Total_bahan" class="form-control" id="Total_bahan" value="{{$produkSupplier->Total_bahan}}">
        </div>

        <div class="form-gr21oup">
            <label for="Harga_menu">Harga:</label>
            <input type="number" name="Harga_bahan" class="form-control" id="Harga_bahan" value="{{$produkSupplier->Harga_bahan}}">
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
@endsection
