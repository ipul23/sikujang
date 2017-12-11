<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produk;
use App\Penjualan_produk;

class ProdukController extends Controller
{
    public function create()
    {
      return view('produk.create');
    }

    public function list()
    {
      $produks = Produk::all();

      return view('produk.list', compact('produks'));
    }

    public function sell()
    {
      $produks = Produk::all();
      return view('produk.sell',  compact('produks'));
    }

    public function sell_store()
    {
      $date = request('tanggal');
      $orderdate = explode('-', $date);
      $tanggal = $orderdate[2];
      $bulan = $orderdate[1];
      $tahun = $orderdate[0];

      $row_produk = request('id_produk');
      $produks1 = Produk::find($row_produk);

      $jumlah = $produks1['harga'] * request('jumlah');
      $update_stok = $produks1['stok'] - request('jumlah');

      Penjualan_produk ::create([
        'id_produk' => request('id_produk'),
        'jumlah' => request('jumlah'),
        'harga' => $jumlah,
        'id_user' => auth()->id(),
        'tanggal' => $tanggal,
        'bulan' => $bulan,
        'tahun' => $tahun,
        // 'slug'=>str_slug(request('nama'))
      ]);

      $produks1->update([
        'stok' => $update_stok,
      ]);

        return redirect()->route('produk.sell');
    }

    public function store()
    {
      Produk ::create([
        'nama' => request('nama'),
        'harga' => request('harga'),
        'stok' => request('stok'),
        // 'slug'=>str_slug(request('nama'))
      ]);

      return redirect()->route('produk.list');
    }

    public function edit($id_produk)
    {
      $produks1 = Produk::find($id_produk);
      return view('produk.edit', compact('produks1'));
    }


    public function update($id_produk)
    {
      $produks1 = Produk::find($id_produk);

      $produks1->update([
        'nama' => request('nama'),
        'harga' => request('harga'),
        'stok' => request('stok'),
      ]);
      // return view(compact('produks1'))
      return redirect()->route('produk.list');
    }

    public function history()
    {
      // $penjualan_produks = Penjualan_produk::all();
      // return view('produk.history',  compact('penjualan_produks'));
      $produks = Produk::all();
      $penjualan_produks = Penjualan_produk::all();
      return view('produk.history',  compact('penjualan_produks', 'produks'));
    }

    public function editHistory($id_penjualan)
    {
      $produks = Produk::all();
      $penjualan = Penjualan_produk::find($id_penjualan);
      return view('produk.historyEdit', compact('penjualan','produks'));
    }

    public function updateHistory()
    {
      //
    }

}
