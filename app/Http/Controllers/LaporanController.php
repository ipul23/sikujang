<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaction;
use App\cabang_akun;

class LaporanController extends Controller
{
    public function jurnalUmum()
    {
      $bulan = date('m');
      $tahun = date('Y');

      if($bulan == '1'){
        $month = "Januari";
      }else
      if($bulan == '2'){
          $month = "Februari";
      }else
      if($bulan == '3'){
          $month = "Maret";
      }else
      if($bulan == '4'){
          $month = "April";
      }else
      if($bulan == '5'){
          $month = "Mei";
      }else
      if($bulan == '6'){
          $month = "Juni";
      }else
      if($bulan == '7'){
          $month = "Juli";
      }else
      if($bulan == '8'){
          $month = "Agustus";
      }else
      if($bulan == '9'){
          $month = "September";
      }else
      if($bulan == '10'){
          $month = "Oktober";
      }else
      if($bulan == '11'){
          $month = "November";
      }else
      if($bulan == '12'){
          $month = "Desember";
      }

      $transaksis = \DB::table('transactions')->where('bulan', $bulan)->where('tahun', $tahun)->get();
      $cabang_akuns = cabang_akun::all();
      return view('laporan.jurnalUmum', compact('bulan', 'tahun', 'transaksis', 'cabang_akuns', 'month', 'tahun'));
    }

    public function jurnalUmumStore()
    {
      // $date = request('tanggal');
      $bulan = request('bulan');
      $tahun = request('tahun');

      if($bulan == '1'){
        $month = "Januari";
      }else
      if($bulan == '2'){
          $month = "Februari";
      }else
      if($bulan == '3'){
          $month = "Maret";
      }else
      if($bulan == '4'){
          $month = "April";
      }else
      if($bulan == '5'){
          $month = "Mei";
      }else
      if($bulan == '6'){
          $month = "Juni";
      }else
      if($bulan == '7'){
          $month = "Juli";
      }else
      if($bulan == '8'){
          $month = "Agustus";
      }else
      if($bulan == '9'){
          $month = "September";
      }else
      if($bulan == '10'){
          $month = "Oktober";
      }else
      if($bulan == '11'){
          $month = "November";
      }else
      if($bulan == '12'){
          $month = "Desember";
      }

      $transaksis = \DB::table('transactions')->where('bulan', $bulan)->where('tahun', $tahun)->get();
      $cabang_akuns = cabang_akun::all();
      return view('laporan.jurnalUmum', compact('bulan', 'tahun', 'transaksis', 'cabang_akuns', 'month', 'tahun'));

    }
    public function bukuBesar()
    {
      return view('laporan.bukuBesar');
    }
}
