<?php namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use DB;

use Khill\Lavacharts\Lavacharts;


class LoginController extends Controller
{
     public function login(Request $req)
     {
      $email = $req->input('email');
      $password = $req->input('password');

      $checkLogin = DB::table('users')->where(['email'=>$email,'password'=>$password])->get();
      //echo $checkLogin;
      if(count($checkLogin)  >0)
      {
        $produk = 0;
        foreach(\App\product::all() as $product){
          if ($product->created_at->format('Y-m-d') == \Carbon\Carbon::now()->format('Y-m-d'))
            ++$produk;
        }
        $permintaan = 0;
        foreach(\App\demand::all() as $product){
          if ($product->created_at->format('Y-m-d') == \Carbon\Carbon::now()->format('Y-m-d'))
            ++$permintaan;
        }
          $lava = new Lavacharts; // See note below for Laravel
          $dataProduksi = $lava->DataTable();
          $dataProduksi->addDateColumn('Date')
                       ->addNumberColumn('Inisiasi')
                       ->addNumberColumn('Aklimatisasi')
                       ->addNumberColumn('Transplanting');
          foreach(\App\stock::all() as $stock){
            $dataProduksi->addRow([$stock->created_at->format('Y-m-d'),67,65,62]);
          }
          $lava->LineChart('Temps', $dataProduksi, [
              'title' => 'grafik data produksi'
          ]);
              return View('home',['produk'=>$produk,'demand'=>$permintaan,'lava'=>$lava]);

      $checkLogin = DB::table('users')->where(['email'=>$email,'password'=>$password])->get();
      if(count($checkLogin)  >0)
      {
        return view('home');
      }
      else
      {
       return back()->withInput()->withErrors(['email' =>'Email atau Password salah']);
     }
   }
 }
}

