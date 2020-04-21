<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title')</title>
        <link href="{{asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="{{asset('assets/assets/main.css')}}">
        <link rel="stylesheet" href="{{asset('css/toastr.min.css')}}" />
        <script src="{{asset('js/toastr.min.js')}}"></script>
        <script src="{{asset('js/jquery.js')}}"></script>
        
    </head>
    <body>
        @include('master_layout.theme_topbar')
        @include('master_layout.theme_sidebar')
        <div class="app-main__outer">
            <div class="app-main__inner">
                @yield('content')
            </div>
        </div>
        <script src="{{asset('js/jquery.mask.min.js')}}"></script>
        <script src="{{asset('assets/assets/main.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/assets/jquery.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/assets/sweetalert2.all.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/assets/bootstrap-confirmation.min.js')}}" type="text/javascript"></script>
        <script type="text/javascript">
            
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
            'use strict';
            window.addEventListener('load', function() {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.getElementsByClassName('needs-validation');
                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
        </script>
        <script type="text/javascript">
            $(document).ready(function(){
            $(document).on('click', '#select', function(){
                var id = $(this).data('id');
                var nama_barang = $(this).data('nama_barang');
                var stok_barang = $(this).data('stok_barang');
                var harga_jual = $(this).data('harga_jual');
                    $('#nama_barang').val(nama_barang);
                    $('#stok_barang').val(stok_barang);
                    $('#id').val(id);
                    $('#harga_jual').val(harga_jual);
                })
            })
        </script>
        <script type="text/javascript">
            // Ketika submit di klik
            $('.btn-submit').click(function(e){
                e.preventDefault();
                var nama = $("input[name='nama_barang']").val();
                    if(nama == ''){
                        swal('Check Out Gagal','Barang wajib dipilih terlebih dahulu...!','error');
                        // alert('Barang wajib dipilih terlebih dahulu');
                        }else{
                            $(this).addClass('disabled');
                            $(this).closest('form').submit();
                        }
                    })
        </script>
        <script type="text/javascript">
            // Ketika cari di klik
            $('.btn-cari').click(function(e){
                e.preventDefault();
                var caribarang = $("input[name='cari']").val();
                    if(caribarang == ''){
                        swal('Pencarian Barcode Gagal','Masukkan Barcode Barang Atau Nama Barang terlebih dahulu...!','error');
                        // alert('Barang wajib dipilih terlebih dahulu');
                        }else{
                            $(this).addClass('disabled');
                            $(this).closest('form').submit();
                        }
                    })
        </script>
        <script type="text/javascript">
            // Ketika cari di klik
            $('.btn-search').click(function(e){
                e.preventDefault();
                var caribarang = $("input[name='cari']").val();
                    if(caribarang == ''){
                        swal('Pencarian Data Gagal','Masukkan Data terlebih dahulu...!','error');
                        // alert('Barang wajib dipilih terlebih dahulu');
                        }else{
                            $(this).addClass('disabled');
                            $(this).closest('form').submit();
                        }
                    })
        </script>
    </body>
</html>
