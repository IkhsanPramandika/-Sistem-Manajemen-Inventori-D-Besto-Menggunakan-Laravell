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
                                            <th>Nama Menu</th>          
                                            <th>Harga Menu</th>
                                            <th>Stok</th>
                                            <th>Deskripsi </th>
                                    
                                            <th>Action </th>
                                            
                                        
                                        </tr>
                                    </thead>
                                    @foreach ($produk as $dataP) 
                                    
                                        <tr>
                                            <td>{{ $dataP->id }}</td>
                                            <td>{{ $dataP->Nama_menu }}</td>
                                            <td>{{ $dataP->Harga_menu }}</td>
                                            <td>{{ $dataP->stok }}</td>
                                            <td>{{ $dataP->Deskripsi }}</td>
                                
                                            <td>
                                            <a href="{{ url("/produk/". $dataP->id ."/edit")}}" class="btn btn-info btn-rounded btn-sm" style="border-color: white; background-color: white; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);">
                                                <i class="fas fa-pen" style="color: black;"></i> 
                                            </a>
                                            
                                            @csrf
                                            @method('DELETE')
                                            <a href="/produk/{{ $dataP->id }}" id="btn-delete-post" class="btn btn-danger btn-rounded btn-sm" style="border-color: white; background-color: white; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);">
                                                <i class="fas fa-trash-alt" style="color: red;"></i> 
                                            </a>
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


    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#produks').DataTable({
                searching: true, // Aktifkan fitur pencarian
                ordering: true, // Aktifkan fitur pengurutan
            });
        });
    </script>

</body>

</html>