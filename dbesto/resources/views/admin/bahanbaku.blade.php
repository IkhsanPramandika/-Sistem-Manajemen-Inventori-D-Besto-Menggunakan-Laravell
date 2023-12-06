@extends('admin.utama')
@section('content')
    
    <!-- DataTales Example -->
    <div class="d-flex justify-content-end mb-3">
        <a href="tambahdataTransaksi" class="btn btn-primary">Tambah Bahan</a>
    </div>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tabel Bahan Baku</h6>
          
        </div>
        
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Kode Bahan</th>
                            <th>Nama Bahan</th>
                            <th>Status</th>
                            <th>Total Produk</th>
                            <th>Tanggal</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($BahanBaku as $data)
                            <tr>
                                <td>{{ $data->Kode_bahan }}</td>
                                <td>{{ $data->Nama_bahan }}</td>
                                <td>
                                    @if ($data->Total_Produk > 10)
                                        Banyak
                                    @elseif ($data->Total_Produk >= 1 && $data->Total_Produk <= 9)
                                        Sedikit
                                    @elseif ($data->Total_Produk < 1)
                                        Kurang
                                    @else
                                        Tidak Valid
                                    @endif
                                </td>
                                <td>{{ $data->Total_Produk }}</td>
                                <td>{{ $data->created_at->format('Y-m-d') }}</td>
                                <td>
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editModal{{ $data->Kode_Bahan }}">Edit</button>
                                    <form action="/bahan{{ $data->Kode_Bahan }}" method="POST" style="display: inline-block">
                               

                                    <form action="{{ route('bahanbaku.destroy', $data->Kode_bahan) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
                                    </form>
                                        
                                </td>
                            </tr>

                            <!-- Modal Edit -->
                            <div class="modal fade" id="editModal{{ $data->Kode_Bahan }}" tabindex="-1" role="dialog" aria-labelledby="editModalLabel{{ $data->Kode_Bahan }}" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="editModalLabel{{ $data->Kode_Bahan }}">Edit Data Bahan Baku</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <!-- Form Edit Data -->
                                            <form action="/bahan/{{ $data->Kode_Bahan }}" method="POST" style="display: inline-block">

                                                @csrf
                                                @method('PUT')
                                                <!-- Tambahkan field form sesuai dengan atribut yang ingin diubah -->
                                                <div class="form-group">
                                                    <label for="Kode_bahan">Kode Bahan:</label>
                                                    <input type="text" name="Kode_bahan" class="form-control" id="Kode_bahan" value="{{ $data->Kode_bahan }}" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="Nama_bahan">Nama Bahan:</label>
                                                    <input type="text" name="Nama_bahan" class="form-control" id="Nama_bahan" value="{{ $data->Nama_bahan }}" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="Total_Produk">Total Produk:</label>
                                                    <input type="number" name="Total_Produk" class="form-control" id="Total_Produk" value="{{ $data->Total_Produk }}" required>
                                                </div>
                                                <button type="submit" class="btn btn-primary">Simpan</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Modal Edit -->
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.5.0/js/bootstrap.bundle.min.js"></script>
<script>
    $(document).ready(function() {
        $('#dataTable').DataTable();
    });
</script>
<!-- plugins:js -->
<script src="{{asset('assets/skydash/vendors/js/vendor.bundle.base.js')}}"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src="{{asset('assets/skydash/vendors/chart.js/Chart.min.js')}}"></script>
<script src="{{asset('assets/skydash/vendors/datatables.net/jquery.dataTables.js')}}"></script>
<script src="{{asset('assets/skydash/vendors/datatables.net-bs4/dataTables.bootstrap4.js')}}"></script>
<script src="{{asset('assets/skydash/js/dataTables.select.min.js')}}"></script>

<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="{{asset('assets/skydash/js/off-canvas.js')}}"></script>
<script src="{{asset('assets/skydash/js/hoverable-collapse.js')}}"></script>
<script src="{{asset('assets/skydash/js/template.js')}}"></script>
<script src="{{asset('assets/skydash/js/settings.js')}}"></script>
<script src="{{asset('assets/skydash/js/todolist.js')}}"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src="{{asset('assets/skydash/js/dashboard.js')}}"></script>
<script src="{{asset('assets/skydash/js/file-upload.js')}}"></script>
<script src="{{asset('assets/skydash/js/Chart.roundedBarCharts.js')}}"></script>
<!-- End custom js for this page-->
<script src="https://code.highcharts.com/highcharts.js"></script>
