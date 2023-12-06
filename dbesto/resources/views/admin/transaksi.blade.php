@extends('admin.utama')
@section('content')
    
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Tabel Transaksi</h6>
                        </div>
                        <div class="card-body">
                            
                            <div class="table-responsive">
                                <div class="d-flex justify-content-end mb-3">
                                    <a href="tambahdataTransaksi" class="btn btn-primary">Tambah Transaksi</a>
                                </div>
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    </a>
                                    <thead>
                                        <tr>
                                            <th>Invoice</th>
                                            <th>Nama Kasir</th>
                                            <th>Nama Customer</th>
                                            <th>Status</th>
                                            <th>Total Harga </th>
                                            <th>Tanggal</th>
                                            
                                        
                                        </tr>
                                    </thead>
                                    @foreach ($transaksi as $dataT) 
                                    
                                        <tr>
                                            <td>{{ $dataT->Invoice }}</td>
                                            <td>{{ $dataT->Nama_kasir }}</td>
                                            <td>{{ $dataT->Nama_customer }}</td>
                                            <td>{{ $dataT->Status}}</td>
                                            <td>{{ $dataT->Total_harga }}</td>
                                            <td>{{ $dataT->created_at->format('Y-m-d') }}</td>

                                        </tr>
                                    
                                      
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                   @endsection
                <!-- /.container-fluid -->


    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

</body>

</html>