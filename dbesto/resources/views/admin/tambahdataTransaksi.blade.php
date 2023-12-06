@extends('admin.utama')
@section('content')
<form action="/tambahTransaksi" method="POST">
    @csrf

    <div class="form-group">
        <label for="Nama_kasir">Nama Kasir:<span style="font-size: 12px; color: red;"> *wajib diisi</span></label>
        <input type="text" name="Nama_kasir" class="form-control" id="Nama_kasir" required>
    </div>

    <div class="form-group">
        <label for="nama_bahan">Nama Customer:<span style="font-size: 12px; color: red;"> *wajib diisi</span></label>
        <input type="text" name="Nama_customer" class="form-control" id="Nama_customer" required>
    </div>

    <div class="form-group">
        <label for="jenis_layanan">Jenis Layanan:<span style="font-size: 12px; color: red;"> *wajib diisi</span></label>
        <select name="jenis_layanan" class="form-control" required>
            <option value="Take Away">Take Away</option>
            <option value="Delivery">Delivery</option>
        </select>
    </div>

    <div class="form-group">
        <label for="cabang">Cabang d'Besto:<span style="font-size: 12px; color: red;"> *wajib diisi</span></label>
        <select name="cabang" class="form-control" required>
            <option value="Panam">Panam</option>
            <option value="Rumbai">Rumbai</option>
            <option value="Sudirman">Sudirman</option>
            <option value="KH Ahmad Dahlan">KH Ahmad Dahlan</option>
        </select>
    </div>

    <div class="form-group">
        <label for="nama_menu">Nama Menu:<span style="font-size: 12px; color: red;"> *wajib diisi</span></label>
        <select name="nama_menu" class="form-control" required>
            <option value="Kentang Goreng">Kentang Goreng</option>
            <option value="Burger">Burger</option>
            <option value="Ayam">Ayam</option>
            <option value="Spaghetii">Spaghetii</option>
        </select>
    </div>

    <div class="form-group">
        <label for="harga_menu">Harga Menu:</label>
        <input type="text" name="harga_menu" class="form-control" readonly>
    </div>

    <div class="form-group">
        <label for="qty">Quantity:<span style="font-size: 12px; color: red;"> *wajib diisi</span></label>
        <input type="number" name="qty" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="Total_harga">Total Harga:</label>
        <input type="text" name="Total_harga" class="form-control" readonly>
    </div>

    <div class="form-group">
        <label for="jenis_pembayaran">Jenis Pembayaran:<span style="font-size: 12px; color: red;"> *wajib diisi</span></label>
        <select name="jenis_pembayaran" class="form-control" required>
            <option value="Shopepay">Shopepay</option>
            <option value="QRIS">QRIS</option>
            <option value="Cash">Cash</option>
        </select>
    </div>

    <input type="submit" class="btn btn-primary">
</form>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        var namaMenuSelect = document.querySelector("select[name='nama_menu']");
        var hargaMenuInput = document.querySelector("input[name='harga_menu']");
        var qtyInput = document.querySelector("input[name='qty']");
        var totalHargaInput = document.querySelector("input[name='Total_harga']");

        function updateHargaMenu() {
            var hargaMenu = 0;
            var selectedMenu = namaMenuSelect.value;

            // Mengambil harga berdasarkan menu yang dipilih
            switch (selectedMenu) {
                case 'Kentang Goreng':
                    hargaMenu = 8000;
                    break;
                case 'Burger':
                    hargaMenu = 9000;
                    break;
                case 'Ayam':
                    hargaMenu = 10000;
                    break;
                case 'Spaghetii':
                    hargaMenu = 11000;
                    break;
            }

            hargaMenuInput.value = hargaMenu;
            updateTotalHarga();
        }

        namaMenuSelect.addEventListener("change", function() {
            updateHargaMenu();
        });

        qtyInput.addEventListener("input", function() {
            updateTotalHarga();
        });

        function updateTotalHarga() {
            var qty = qtyInput.value;
            var hargaMenu = hargaMenuInput.value;
            var totalHarga = qty * hargaMenu;
            totalHargaInput.value = totalHarga;
        }

        // Memanggil fungsi untuk mengupdate harga menu awal dan total harga awal
        updateHargaMenu();
    });
</script>
@endsection
