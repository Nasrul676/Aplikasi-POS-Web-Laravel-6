@extends('theme')
@section('history', 'mm-active')
@section('title','Riwayat Transaksi')
@section('content')
@include('sweetalert::alert')
<div class="main-card card">
  <div class="card-body">
    <div class="border mb-3">
      <div class="row">
        <div class="col-3"></div>
        <div class="col-3"> </div>
        <div class="col-3"></div>
        <div class="col-3">
          <form style="padding: 15px;" class="d-none d-sm-inline-block form-inline pull-right navbar-search" method="GET" action="{{route('history')}}">
            <div class="input-group">
              <input type="text" name="cari" class=" form-control shadow-sm large" value="{{old('cari')}}" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-success shadow-sm btn-search" type="submit">
                <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="border" style="padding: 10px;">
      <div class="table-responsive">
        <table class="mb-0 table text-center table-bordered">
          <thead class="bg-info text-white">
            <tr>
              <th>No.</th>
              <th>Nama Produk</th>
              <th>Jumlah Produk</th>
              <th>Total Harga</th>
              <th>Jumlah Diskon</th>
              <th>Nama Kasir</th>
              <th>Tanggal Transaksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($data as $getdata)
            <tr>
              <td>{{$loop->iteration}}</td>
              <td>{{$getdata->nama_barang}}</td>
              <td>{{$getdata->qty}}</td>
              <td>@currency($getdata->harga)</td>
              <td>{{$getdata->diskon}} %</td>
              <td>{{$getdata->nama_kasir}}</td>
              <td>{{$getdata->created_at}}</td>
            </tr>
            @endforeach
          </tbody>
        </table><br>
        {{ $data->links() }}
      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>
@endsection