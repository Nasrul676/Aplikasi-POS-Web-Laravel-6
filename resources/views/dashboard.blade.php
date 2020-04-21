@extends('theme')
@section('sidebar', 'mm-active')
@section('title','Dashboard')
@section('content')
@include('sweetalert::alert')
<div class="app-main__inner">
    <div class="row">
        <div class="col-md-6 col-xl-4">
            <div class="card mb-3 widget-content bg-midnight-bloom">
                <div class="widget-content-wrapper text-white">
                    <div class="widget-content-left">
                        <div class="widget-heading text-white">Total Customer</div>
                        <div class="widget-subheading text-white">Jumlah Castomer Yang Telah Mendaftar</div>
                    </div>
                    <div class="widget-content-right">
                        <div class="widget-numbers text-white text-center"><span><i class="fas fa-users"></i> {{ $data_customer}}</span></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-4">
            <div class="card mb-3 widget-content bg-arielle-smile">
                <div class="widget-content-wrapper text-white">
                    <div class="widget-content-left">
                        <div class="widget-heading text-white">Pendapatan</div>
                        <div class="widget-subheading text-white">Total Pendapatan</div>
                    </div>
                    <div class="widget-content-right">
                        <div class="widget-numbers text-white"><span> @currency($total_penghasilan)</span></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-4">
            <div class="card mb-3 widget-content bg-grow-early">
                <div class="widget-content-wrapper text-white">
                    <div class="widget-content-left">
                        <div class="widget-heading text-white">Transaksi</div>
                        <div class="widget-subheading text-white">Jumlah Transaksi Sukses</div>
                    </div>
                    <div class="widget-content-right">
                        <div class="widget-numbers text-white"><span>{{$data_penjualan}} Transaksi</span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mb-3 card">
        <div class="card-body">
            <ul class="tabs-animated-shadow nav-justified tabs-animated nav">
                <li class="nav-item">
                    <a role="tab" class="nav-link active" id="tab-c1-0" data-toggle="tab" href="#tab-animated1-0">
                        <span class="nav-text">Grafik Stok Paling Laris</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a role="tab" class="nav-link" id="tab-c1-1" data-toggle="tab" href="#tab-animated1-1">
                        <span class="nav-text">Data Stok Hampir Habis</span>
                    </a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="tab-animated1-0" role="tabpanel">
                    <div id="chartlaris" style="padding: 10px;"></div>
                </div>
                <div class="tab-pane" id="tab-animated1-1" role="tabpanel">
                    <div class="table-responsive">
                        <table class="mb-0 table table-bordered">
                            <thead class="bg-info text-center text-white">
                                <tr>
                                    <th>No</th>
                                    <th>Nama Barang</th>
                                    <th>Progress</th>
                                    <th>Jumlah Stok</th>
                                    <th>Satuan</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                @if (is_array($data_stok ?? ''))
                                @foreach ($data_stok ?? '' as $getstok)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$getstok->nama_barang}}</td>
                                    <td>
                                        <div class="progress-bar-animated-alt progress">
                                            <div class="progress-bar bg-danger" role="progressbar" style="width:{{$getstok->stok_barang}}0%"></div>
                                        </div>
                                    </td>
                                    <td>{{$getstok->stok_barang}}</td>
                                    <td>{{$getstok->satuan_barang}}</td>
                                </tr>
                                @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</ul>
<script src="{{asset('assets/assets/highcharts.js')}}" type="text/javascript"></script>
<script type="text/javascript">
Highcharts.chart('chartlaris', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Grafik Stok Paling Laris'
    },
    xAxis: {
        categories: {!!json_encode($chartlarisnama)!!},
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Stok Terjual'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    series: [{
        name: 'Jumlah Stok terjual',
        data: {!!json_encode($chartlarisstok)!!}
    }]
});
</script>
@endsection