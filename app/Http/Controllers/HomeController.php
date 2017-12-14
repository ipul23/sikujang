<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Khill\Lavacharts\Lavacharts;
use DB;
use Auth;
use App\Employee;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
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
                     ->addNumberColumn('Data produksi');
        $st = DB::table('stocks')->where('stage','=','Aklimatisasi')->orderBy('date')->get();
        $str = \Carbon\Carbon::now();
        $sum = 0;
        foreach($st as $stock){
            if (\Carbon\Carbon::parse($str)->format('m') != \Carbon\Carbon::parse($stock->date)->format('m')){
                if (\Carbon\Carbon::parse($str)->format('m')!=\Carbon\Carbon::now()->format('m')){
                    $dataProduksi->addRow([$str,$sum]);
                }
                  $str = $stock->date;  
                  $sum = $stock->stock_quantity;
            } else{
                $sum += $stock->stock_quantity;
            }
        }
        $dataProduksi->addRow([$str,$sum]);
        $lava->LineChart('Temps', $dataProduksi, [
            'title' => 'grafik data produksi'
        ]);
        return View('home',['produk'=>$produk,'demand'=>$permintaan,'lava'=>$lava]);
    }
}
