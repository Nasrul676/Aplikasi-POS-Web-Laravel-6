@extends('main_kasir')
@section('title','Kasir')
@section('content')
<div class="container">
  <div class="row row-cols-3">
    <div class="col">
      {{-- <div class="shadow-sm mr-1 col py-3 px-lg-5 border bg-light"> --}}
        <div class="col mb-2">
          <div class="btn-group">
          <img width="50px" height="50px" class="img-profile rounded-circle mr-3" src="{{asset('/images/' .Auth::user()->foto)}}"></div>
          <button type="button" class="btn btn-danger">{{ Auth::user()->name }}</button>
          <button type="button" class="btn btn-danger dropdown-toggle px-3" data-toggle="dropdown" aria-haspopup="true"
          aria-expanded="false">
          <span class="sr-only">Toggle Dropdown</span>
          </button>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">Logout</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
            </form>
            {{-- <a class="dropdown-item" href="#">Another action</a> --}}
            {{-- <a class="dropdown-item" href="#">Something else here</a> --}}
            {{-- <div class="dropdown-divider"></div> --}}
            {{-- <a class="dropdown-item" href="#">Separated link</a> --}}
          </div>
        </div>
      {{-- </div> --}}
    </div>
    <div class="col">
    </div>
    <div class="col mb-3">
      <h3 class="text-black">Total | Rp. 000,00</h3>
    </div>
  </div>
</div>
<div class="container">
  <div class="row mx-lg-n5">
    <div class="shadow-sm mr-1 col py-3 px-lg-5 border bg-light">
      <h5>Pilih Produk</h5>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>No.</th>
                <th>Nama</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Mie Gooreng</td>
              </tr>
              <tbody>
              </table><br>
            </div>
          </div>
        </div>
        <div class="shadow-sm ml-1 col py-3 px-lg-5 border bg-light">
          <h5>Detail Produk</h5>
          <form action="">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama</label>
                  <input type="text" name="nama" class="form-control" id="exampleInputEmail1" placeholder="Nama" disabled="">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputPassword1">Harga Awal(Rp)</label>
                  <input type="number" name="harga_awal" class="form-control" id="exampleInputPassword1" placeholder="harga awal" disabled="">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">Qty</label>
                  <input type="number" name="qty" value="1" class="form-control" id="exampleInputEmail1" placeholder="Nama" >
                </div>
              </div>
              <div class="col-md-6 mt-auto">
                <div class="form-group">
                  <button class="btn btn-warning"><i class="fas fa-paper-plane"></i> Simpan</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row mx-lg-n5">
          <div class="shadow-sm mr-1 col py-3 px-lg-5 border bg-light">
            <h5>Pilih Produk</h5>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No.</th>
                      <th>Nama</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>Mie Gooreng</td>
                    </tr>
                    <tbody>
                    </table><br>
                  </div>
                </div>
              </div>
              <div class="shadow-sm ml-1 col py-3 px-lg-5 border bg-light">
                <h5>Detail Produk</h5>
                <form action="">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Nama</label>
                        <input type="text" name="nama" class="form-control" id="exampleInputEmail1" placeholder="Nama" disabled="">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="exampleInputPassword1">Harga Awal(Rp)</label>
                        <input type="number" name="harga_awal" class="form-control" id="exampleInputPassword1" placeholder="harga awal" disabled="">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Qty</label>
                        <input type="number" name="qty" value="1" class="form-control" id="exampleInputEmail1" placeholder="Nama" >
                      </div>
                    </div>
                    <div class="col-md-6 mt-auto">
                      <div class="form-group">
                        <button class="btn btn-warning"><i class="fas fa-paper-plane"></i> Simpan</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            @endsection