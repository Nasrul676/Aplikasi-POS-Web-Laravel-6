@extends('theme')
@section('laporan_laris', 'mm-active')
@section('title','Laporan Produk Terlaris')
@section('content')
@include('sweetalert::alert')
    <div class="main-card mb-3 card">
        <div class="card-body">
            <div class="card-title">
                <div class="card-header">
                    Data Barang Yang Paling Laris
                </div>
            </div>
            <div class="table-responsive">
                <table class="mb-0 table table-bordered">
                    <thead class="bg-info text-center text-white">
                        <tr>
                            <th>No</th>
                            <th>Nama Barang</th>
                            <th>Total Harga</th>
                            <th>Jumlah Stok Yang Terjual</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        @foreach ($laris as $la )

                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$la->nama_barang}}</td>
                            <td>@currency($la->harga)</td>
                            <td>{{$la->qty}}</td>
                        </tr>

                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>
</div>
@endsection