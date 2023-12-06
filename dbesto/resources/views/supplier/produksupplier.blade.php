@extends('supplier.utama')
@section('content')
    
    <!-- DataTales Example -->
    <div class="d-flex justify-content-end mb-3">
        <a href="tambahbahanSupplier" class="btn btn-primary">Tambah Bahan</a>
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
                            <th>ID</th>
                            <th>Nama Bahan</th>
                            <th>Status</th>
                            <th>Total Bahan</th>
                            <th>Harga Bahan</th> <!-- Corrected case -->
                            <th>Tanggal</th>
                            <th class="text-center">Action</th>
                        </tr>
                        <style>
                            .status-banyak {
                                color: green;
                            }
                        
                            .status-sedikit {
                                color: yellow;
                            }
                        
                            .status-kurang {
                                color: red;
                            }
                        
                            .badge-column {
                                font-size: 16;
                                padding: 8px 14px;
                            }
                        </style>
                    </thead>
                    <tbody>
                        @foreach ($produkSupplier as $databahansupplier)
                            <tr>
                                <td>{{ $databahansupplier->id }}</td>
                                <td>{{ $databahansupplier->Nama_bahan }}</td>
                                <td>
                                    @if ($databahansupplier->Total_bahan > 10)
                                        <span class="badge badge-success">Banyak</span>
                                    @elseif ($databahansupplier->Total_bahan >= 1 && $databahansupplier->Total_bahan <= 9)
                                        <span class="badge badge-warning">Sedikit</span>
                                    @elseif ($databahansupplier->Total_bahan < 1)
                                        <span class="badge badge-danger">Kurang</span>
                                    @else
                                        <span class="badge badge-secondary">Tidak Valid</span>
                                    @endif
                                </td>
                                <td>{{ $databahansupplier->Total_bahan}}</td> 
                                <td>{{ $databahansupplier->Harga_bahan}}</td><!-- Corrected case -->
                                <td>{{ $databahansupplier->created_at->format('Y-m-d') }}</td>    
                                  
                                  <td>
                                    <a href="{{ url("/produksupplier/". $databahansupplier->id ."/edit")}}" class="btn btn-info btn-rounded btn-sm" style="border-color: white; background-color: white; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);">
                                        <i class="fas fa-pen" style="color: black;"></i> 
                                    </a>
                                    
                                    @csrf
                                    @method('DELETE')
                                    <a href="/produksupplier/{{ $databahansupplier->id }}" id="btn-delete-post" class="btn btn-danger btn-rounded btn-sm" style="border-color: white; background-color: white; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);">
                                        <i class="fas fa-trash-alt" style="color: red;"></i> 
                                    </a>
                                </td>
                                  
                                  
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Modal Edit -->
   
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
