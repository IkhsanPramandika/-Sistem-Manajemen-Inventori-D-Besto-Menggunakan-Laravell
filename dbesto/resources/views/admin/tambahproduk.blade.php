@extends('admin.utama')
@section('content')
<form action="/tambahProduk1" method="POST" enctype="multipart/form-data">
    @csrf




    <div class="form-group">
        <label for="Nama_menu">Nama Menu:<span style="font-size: 12px; color: red;"> *wajib diisi</span></label>
        <select name="Nama_menu" class="form-control" id="Nama_menu" required>
            <option value="Kentang Goreng">Kentang Goreng</option>
            <option value="Burger">Burger</option>
            <option value="Ayam">Ayam</option>
            <option value="Spaghetti">Spaghetti</option>
        </select>
    </div>
    
    <div class="form-group">
        <label for="Harga_menu">Harga Menu:</label>
        <input type="number" name="Harga_menu" class="form-control" id="Harga_menu" step="1" required readonly>
    </div>
    
    <script>
        var hargaMenu = {
            "Kentang Goreng": 8000,
            "Burger": 9000,
            "Ayam": 10000,
            "Spaghetti": 11000
        };
    
        var namaMenuDropdown = document.getElementById("Nama_menu");
        var hargaMenuInput = document.getElementById("Harga_menu");
    
        // Fungsi untuk mengupdate harga berdasarkan menu yang dipilih
        function updateHargaMenu() {
            var selectedMenu = namaMenuDropdown.value;
            var harga = hargaMenu[selectedMenu];
            hargaMenuInput.value = harga;
        }
    
        // Memanggil fungsi updateHargaMenu saat ada perubahan pada dropdown menu
        namaMenuDropdown.addEventListener("change", updateHargaMenu);
    
        // Memanggil fungsi updateHargaMenu untuk menginisialisasi harga awal
        updateHargaMenu();
    </script>

    <div class="form-group">
        <label for="Harga_menu">Stok:</label>
        <input type="number" name="stok" class="form-control" id="stok" step="1" required>
    </div>

    <div class="form-group">
        <label for="Deskripsi">Deskripsi Singkat:</label>
        <textarea name="Deskripsi" class="form-control" id="Deskripsi" required></textarea>
    </div>
    
    

    <input type="submit" class="btn btn-primary" value="Tambah Produk">
</form>
@endsection
