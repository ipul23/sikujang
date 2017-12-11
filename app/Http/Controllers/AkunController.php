<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Akun;
use App\cabang_akun;

class AkunController extends Controller
{

  //========================ASET========================
  public function aset()
  {
    $row_aset = \DB::table('cabang_akuns')->where('id_akun', '1')->get();
    return view('akun.aset', compact('row_aset'));
  }

  public function asetStore()
  {
    cabang_akun::create([
      'nama' => request('nama'),
      'kode' => request('kode'),
      'jumlah' => 0,
      'id_akun' => 1,
    ]);
    return redirect()-> route('akun.aset');
  }

  //======================== MODAL 2========================
  public function modal()
  {
    $row_modal = \DB::table('cabang_akuns')->where('id_akun', '2')->get();
    return view('akun.modal', compact('row_modal'));
  }

  public function modalStore()
  {
    cabang_akun::create([
      'nama' => request('nama'),
      'kode' => request('kode'),
      'jumlah' => 0,
      'id_akun' => 2,
    ]);
    return redirect()-> route('akun.modal');
  }

  //========================PEMASUKAN 3========================
  public function pemasukan()
  {
    $row_pemasukan = \DB::table('cabang_akuns')->where('id_akun', '3')->get();
    return view('akun.pemasukan', compact('row_pemasukan'));
  }

  public function pemasukanStore()
  {
    cabang_akun::create([
      'nama' => request('nama'),
      'kode' => request('kode'),
      'jumlah' => 0,
      'id_akun' => 3,
    ]);
    return redirect()-> route('akun.pemasukan');
  }

  //========================PENGELUARAN 4==============
  public function pengeluaran()
  {
    $row_pengeluaran = \DB::table('cabang_akuns')->where('id_akun', '4')->get();
    return view('akun.pengeluaran', compact('row_pengeluaran'));
  }

  public function pengeluaranStore()
  {
    cabang_akun::create([
      'nama' => request('nama'),
      'kode' => request('kode'),
      'jumlah' => 0,
      'id_akun' => 4,
    ]);
    return redirect()-> route('akun.pengeluaran');
  }

  //========================HUTANG========================
  public function hutang()
  {
    $row_hutang = \DB::table('cabang_akuns')->where('id_akun', '5')->get();
    return view('akun.hutang', compact('row_hutang'));
  }

  public function hutangStore()
  {
    cabang_akun::create([
      'nama' => request('nama'),
      'kode' => request('kode'),
      'jumlah' => 0,
      'id_akun' => 5,
    ]);
    return redirect()-> route('akun.hutang');
  }

  //========================PIUTANG========================
  public function piutang()
  {
    $row_piutang = \DB::table('cabang_akuns')->where('id_akun', '6')->get();
    return view('akun.piutang', compact('row_piutang'));
  }

  public function piutangStore()
  {
    cabang_akun::create([
      'nama' => request('nama'),
      'kode' => request('kode'),
      'jumlah' => 0,
      'id_akun' => 6,
    ]);
    return redirect()-> route('akun.piutang');
  }
}
