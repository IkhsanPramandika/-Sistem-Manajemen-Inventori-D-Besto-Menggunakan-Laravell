@extends('admin.utama')
@section('content')
    
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Tabel Produk</h6>
                        </div>
                        <div class="card-body">
                            
                            <div class="table-responsive">
                                <div class="d-flex justify-content-end mb-3">
                                    <a href="tambahProduk" class="btn btn-primary">Tambah Produk</a>
                                </div>
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    </a>
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Gambar Menu</th> 
                                            <th>Nama Menu</th>          
                                            <th>Harga Menu</th>
                                            <th>Deskripsi </th>
                                            <th>Tanggal</th>
                                            <th>Action </th>
                                            
                                        
                                        </tr>
                                    </thead>
                                    @foreach ($produk as $dataP) 
                                    
                                        <tr>
                                            <td>{{ $dataP->id }}</td>
                                            <td><img src="{{ $dataP->GambarMenu }}" alt="Gambar Menu"></td>
                                            <td>{{ $dataP->Nama_menu }}</td>
                                            <td>{{ $dataP->Harga_menu }}</td>
                                            <td>{{ $dataP->Deskripsi }}</td>
                                            <td>{{ $dataP->created_at->format('Y-m-d') }}</td> 
                                            <td> 
                                                <button onclick="window.location='{{ url('produk/'.$dataP->id.'/show') }}'" type="button" class="btn btn-sm btn-info" title="Edit Data">
                                                    <i class="fas fa-edit"></i>
                                                </button>
                                                
                                            </td> 
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