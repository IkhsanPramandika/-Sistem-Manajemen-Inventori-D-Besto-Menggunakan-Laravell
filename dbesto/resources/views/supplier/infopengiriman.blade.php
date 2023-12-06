@extends('supplier.utama')
@section('content')

    <!-- DataTales Example -->
    <div class="d-flex justify-content-end mb-3">
        <a href="tambahpengiriman" class="btn btn-primary">Tambah Pengiriman</a>
    </div>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tabel Info Pengiriman</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID Order</th>
                            <th>Nama Bahan</th>
                            <th>Status</th>
                            <th>Total Produk</th>
                            <th>Tanggal</th>
                            <th>Alamat Pengiriman</th>
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
                        @foreach ($info_pengiriman_suppliers as $dataSupplier)
                            <tr>
                                <td>{{ $dataSupplier->id }}</td>
                                <td>{{ $dataSupplier->Nama_bahan }}</td>
                                <td>
                                    @if ($dataSupplier->Total_produk > 10)
                                        <span class="badge badge-success">Selesai</span>
                                    @elseif ($dataSupplier->Total_produk >= 1 && $dataSupplier->Total_produk <= 9)
                                        <span class="badge badge-warning">Sedang Dikirim</span>
                                    @elseif ($dataSupplier->Total_produk < 1)
                                        <span class="badge badge-danger">Kurang</span>
                                    @else
                                        <span class="badge badge-secondary">Tidak Valid</span>
                                    @endif
                                </td>
                                <td>{{ $dataSupplier->Total_produk }}</td>
                                <td>{{ $dataSupplier->created_at->format('Y-m-d') }}</td>
                                <td>{{ $dataSupplier->Alamat_pengiriman }}</td>
                               
                                <td>
                                    <a href="{{ url("/infopengiriman/". $dataSupplier->id ."/edit")}}" class="btn btn-info btn-rounded btn-sm" style="border-color: white; background-color: white; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);">
                                        <i class="fas fa-pen" style="color: black;"></i> 
                                    </a>
                                    
                                    @csrf
                                    @method('DELETE')
                                    <a href="/infopengiriman/{{ $dataSupplier->id }}" id="btn-delete-post" class="btn btn-danger btn-rounded btn-sm" style="border-color: white; background-color: white; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);">
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

@endsection
