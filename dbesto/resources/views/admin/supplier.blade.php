@extends('admin.utama')
@section('content')
    
    <!-- DataTales Example -->
    <div class="d-flex justify-content-end mb-3">
        <a href="tambahSupplier" class="btn btn-primary">Tambah Supplier</a>
    </div>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tabel Supplier</h6>
          
        </div>
        
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama Supplier</th>
                            <th>Nomor Telepon</th>
                            <th>Alamat</th>
                            <th>Nama Bahan</th>
                            <th>Tanggal</th>
                            <th>Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($supplier as $dataS)
                            <tr>
                                <td>{{ $dataS->id }}</td>
                                <td>{{ $dataS->Nama_supplier }}</td>   
                                <td>{{ $dataS->Nomor_telepon }}</td>
                                <td>{{ $dataS->Alamat }}</td>
                                <td>{{ $dataS->Nama_produk }}</td>  
                                <td>{{ $dataS->created_at->format('Y-m-d') }}</td>
            
                                <td>
                                    <a href="{{ url("/supplier/". $dataS->id ."/edit")}}" class="btn btn-info btn-rounded btn-sm" style="border-color: white; background-color: white; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);">
                                        <i class="fas fa-pen" style="color: black;"></i> 
                                    </a>
                                    
                                    @csrf
                                    @method('DELETE')
                                    <a href="/supplier/{{ $dataS->id }}" id="btn-delete-post" class="btn btn-danger btn-rounded btn-sm" style="border-color: white; background-color: white; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);">
                                        <i class="fas fa-trash-alt" style="color: red;"></i> 
                                    </a>
                                </td>
                                
                                
                                
                                
                                 </tr>
                            <!-- Modal Edit -->

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
