<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect,Response,DB,Config;
use App\Product;
Use Alert;

class LaporanController extends Controller
{
    public function index(){
        $data_stok = DB::select('select nama_barang, stok_barang, satuan_barang from products where stok_barang <= 10');

        return view('laporan.laporan_stok', [
            'data_stok' => $data_stok
            ]);
    }

    public function laris(){

    	$laris = DB::select('SELECT nama_barang, SUM(qty) qty,  SUM(harga) harga FROM history_transactions GROUP BY nama_barang ORDER BY qty DESC');
        // dd($laris);
    	return view('laporan.laporan_stok_paling_laris')->with('laris', $laris);
    }
}
