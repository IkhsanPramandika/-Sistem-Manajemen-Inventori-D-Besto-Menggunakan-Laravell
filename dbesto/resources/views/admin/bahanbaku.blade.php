@extends('admin.utama')
@section('content')
    
    <!-- DataTales Example -->
    <div class="d-flex justify-content-end mb-3">
        <a href="tambahdata" class="btn btn-primary">Tambah Bahan</a>
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
                            <th>Total Bahan</th>
                            <th>Tanggal</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($BahanBaku as $data)
                        <tr>
                            <td>{{ $data->Kode_bahan }}</td>
                            <td>{{ $data->Nama_bahan }}</td>
                            <td>
                                @if ($data->Total_Produk >= 10)
                                    <span class="badge badge-success">Banyak</span>
                                @elseif ($data->Total_Produk >= 1 && $data->Total_Produk <= 9)
                                    <span class="badge badge-warning">Sedikit</span>
                                @else
                                    <span class="badge badge-danger">Kurang</span>
                                @endif
                            </td>
                            <td>{{ $data->Total_Produk }}</td>
                            <td>{{ $data->created_at->format('Y-m-d') }}</td>
                            <td>
                            
                                <a href="{{ url("/bahanbaku/". $data->Kode_bahan ."/edit")}}" class="btn btn-info btn-rounded btn-sm" style="border-color: white; background-color: white; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);">
                                    <i class="fas fa-pen" style="color: black;"></i> 
                                </a>
                                
                                    @csrf
                                    @method('DELETE')
                                    <a href="/bahanbaku/{{ $data->Kode_bahan }}" id="btn-delete-post" class="btn btn-danger btn-rounded btn-sm" style="border-color: white; background-color: white; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);">
                                        <i class="fas fa-trash-alt" style="color: red;"></i> 
                                    </a>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                
            </div>
        </div>
    </div>

    <!-- Modal Edit -->
    @foreach ($BahanBaku as $data)
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
                        <form action="/bahan/{{ $data->Kode_Bahan }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="Nama_bahan">Nama Bahan:</label>
                                <input type="text" name="Nama_bahan" class="form-control" id="Nama_bahan" value="{{ $data->Nama_bahan }}" required>
                            </div>
                            <div class="form-group">
                                <label for="Total_Produk">Total Produk:</label>
                                <input type="number" name="Total_Produk" class="form-control" id="Total_Produk" value="{{ $data->Total_Produk }}" required>
                            </div>
                            <button type="submit" class="btn btn-primary" id="submitBtn{{ $data->Kode_Bahan }}">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection

<!-- Move the script tags to the head section of your HTML document -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.5.0/js/bootstrap.bundle.min.js"></script>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="{{asset('assets/skydash/vendors/js/vendor.bundle.base.js')}}"></script>
<script src="{{asset('assets/skydash/vendors/chart.js/Chart.min.js')}}"></script>
<script src="{{asset('assets/skydash/vendors/datatables.net/jquery.dataTables.js')}}"></script>
<script src="{{asset('assets/skydash/vendors/datatables.net-bs4/dataTables.bootstrap4.js')}}"></script>
<script src="{{asset('assets/skydash/js/dataTables.select.min.js')}}"></script>
<script src="{{asset('assets/skydash/js/off-canvas.js')}}"></script>
<script src="{{asset('assets/skydash/js/hoverable-collapse.js')}}"></script>
<script src="{{asset('assets/skydash/js/template.js')}}"></script>
<script src="{{asset('assets/skydash/js/settings.js')}}"></script>
<script src="{{asset('assets/skydash/js/todolist.js')}}"></script>
<script src="{{asset('assets/skydash/js/dashboard.js')}}"></script>
<script src="{{asset('assets/skydash/js/file-upload.js')}}"></script>
<script src="{{asset('assets/skydash/js/Chart.roundedBarCharts.js')}}"></script>
