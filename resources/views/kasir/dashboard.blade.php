<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Kasir</title>
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.2.css')}}">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="{{asset('css/style3.css')}}">
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="{{asset('css/jquery.mCustomScrollbar.min.css')}}">
    <!-- Font Awesome JS -->
    <script defer src="{{asset('js/solid.js')}}"></script>
    <script defer src="{{asset('js/fontawesome.js')}}"></script>
    <link rel="stylesheet" href="{{asset('css/toastr.min.css')}}" />
    <script src="{{asset('js/toastr.min.js')}}"></script>
  </head>
  <body>
    @include('sweetalert::alert')
    <div class="">
      <!-- Sidebar  -->
      <nav id="sidebar">
        <div id="dismiss" class="shadow">
          <i class="fas fa-arrow-left"></i>
        </div>
        <div class="sidebar-header bg-light">
          @if(Auth::user()->foto == "")
          <img class="img-thumbnail shadow text-center" src="{{asset('images/default/default_avatar.png')}}" width="50px">
          @else
          <img class="img-thumbnail shadow text-center" width="42" height="42" class="rounded-circle" src="{{asset('/images/' .Auth::user()->foto)}}" alt="">
          @endif
          <div class="text-dark text-center mt-3">{{ Auth::user()->name }}</div>
          <div class="text-dark text-center mt-3">{{ Auth::user()->is_admin }}</div>
          <div class="text-dark text-center mt-3">{{ Auth::user()->email }}</div>
        </div>
        <ul class="components bg-aqua">
          <li>
            <a href="{{ route('logout') }}" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();"><i class="fas fa-arrow-left"></i> Log Out</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
            </form>
          </li>
        </ul>
      </nav>
      <!-- Page Content  -->
      <div id="content">
        <div class="mr-3">
          <button type="button" id="sidebarCollapse" class="btn btn-light shadow  ">
          {{-- <img src="{{asset('images/menu-arrow.gif')}}" width="50px" height="50px" alt=""> --}}
          <i class="fas fa-align-left"></i>
          </button>
        </div>
      </div>
    </div>
    
    <div class="text-center mt-3"><h1>Rp 1,000,000,00</h1></div>
    <div class="mt-4">
      <div class="row mx-lg-n5">
        <div class="shadow-sm col py-3 px-lg-5 border bg-light">
          <h5>Pilih Produk</h5>
          <div class="card-body">
            <div class="table-responsive">
              <div class="panel panel-default bg">
                <table class="table table-bordered table-barang">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Nama</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                </table>
              </div>
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
              <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputPassword1">Harga Akhir(Rp)</label>
                  <input type="number" name="harga_akhir" class="form-control" id="exampleInputPassword1" placeholder="harga akhir" disabled="">
                </div>
              </div>
              <button type="submit" class="btn btn-primary btn-block btn-success btn-submit"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span> Submit</button>
            </form>
          </div>
        </div>
      </div>
      <div class="">
        <div class="row">
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>No.</th>
                    <th>Nama</th>
                    <th>Qty</th>
                    <th>Sub Total</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>Mie Goreng</td>
                    <td>20</td>
                    <td>Rp 5.000</td>
                    <td>
                      <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i> </button>
                    </td>
                  </tr>
                  <tr>
                    <td>1</td>
                    <td>Mie Goreng</td>
                    <td>20</td>
                    <td>Rp 5.000</td>
                    <td>
                      <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i> </button>
                    </td>
                  </tr>
                  <tr>
                    <td>1</td>
                    <td>Mie Goreng</td>
                    <td>20</td>
                    <td>Rp 5.000</td>
                    <td>
                      <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i> </button>
                    </td>
                  </tr>
                  <tr>
                    <td>1</td>
                    <td>Mie Goreng</td>
                    <td>20</td>
                    <td>Rp 5.000</td>
                    <td>
                      <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i> </button>
                    </td>
                  </tr>
                  <tr>
                    <td>1</td>
                    <td>Mie Goreng</td>
                    <td>20</td>
                    <td>Rp 5.000</td>
                    <td>
                      <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i> </button>
                    </td>
                  </tr>
                  <tbody>
                  </table><br>
                </div>
              </div>
              <div class="mt-3 shadow-sm col-3 border bg-light">
                <h5 class="mt-2">Pembayaran</h5>
                <form action="">
                  <div class="row">
                    <div class="col-md-11">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Total Harga</label>
                        <input type="text" name="nama" class="form-control" id="exampleInputEmail1">
                      </div>
                    </div>
                    <div class="col-md-11">
                      <div class="form-group">
                        <label for="exampleInputPassword1">Tunai</label>
                        <input type="text" name="harga_awal" class="form-control" id="exampleInputPassword1">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 mt-auto">
                    <div class="form-group">
                      <button class="btn btn-success"><i class="fas fa-paper-plane"></i> Bayar</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <!-- jQuery CDN - Slim version (=without AJAX) -->
          <script src="{{asset('js/jquery-3.3.1.slim.min.js')}}"></script>
          <!-- Popper.JS -->
          <script src="{{asset('js/popper.min.js')}}"></script>
          <!-- Bootstrap JS -->
          <script src="{{asset('js/bootstrap2.min.js')}}"></script>
          <!-- jQuery Custom Scroller CDN -->
          <script src="{{asset('js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
          <script type="text/javascript">
          $(document).ready(function () {
          $("#sidebar").mCustomScrollbar({
          theme: "minimal"
          });
          $('#dismiss, .overlay').on('click', function () {
          $('#sidebar').removeClass('active');
          $('.overlay').removeClass('active');
          });
          $('#sidebarCollapse').on('click', function () {
          $('#sidebar').addClass('active');
          $('.overlay').addClass('active');
          $('.collapse.in').toggleClass('in');
          $('a[aria-expanded=true]').attr('aria-expanded', 'false');
          });
          });
          </script>
        </body>
      </html>