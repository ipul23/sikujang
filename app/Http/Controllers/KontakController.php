<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use App\Produk;
use App\Penjualan_produk;

class KontakController extends Controller
{
    public function kontak()
    {
      $dataKontak = Contact::all();
      // dd($dataKontak)
      return view('kontak.datakontak', compact('dataKontak'));
    }

    public function kontakStore()
    {
      Contact::create([
        'nama' => request('nama'),
        'telepon' => request('telepon'),
        'email' => request('email'),
        'perusahaan' => request('perusahaan'),
        'alamat' => request('alamat'),
      ]);
      return redirect()-> route('kontak.datakontak');
    }
}
