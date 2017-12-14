<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Khill\Lavacharts\Lavacharts;
use DB;
use App\Product;
class ChartPerjenisController extends Controller
{	
    public function index()
    {
    	$tipe = DB::table('products')->get(); 
    	$i = 0;
    	foreach($tipe as $produk){
    		$st = DB::table('stocks')->where('product_id','=',$produk->product_id)->OrderBy('date','stage')->get();
    		$dataProduksi = \Lava::DataTable();
			$dataProduksi->addDateColumn('Date')
			             ->addNumberColumn('Inisiasi')
			             ->addNumberColumn('Aklimatisasi')
			             ->addNumberColumn('Transplantasi')
			             ->setDateTimeFormat('Y');
    		$aklimatisasi = 0;
    		$inisiasi = 0;
    		$transplantasi = 0;
    		$year = "0000";
    		foreach($st as $stage){
    			if (\Carbon\Carbon::parse($stage->date)->format('Y')!=\Carbon\Carbon::parse($year)->format('Y')){
    				if ($year != "0000"){
    					$dataProduksi->addRow([$year,$inisiasi,$aklimatisasi,$transplantasi]);
    					if ($stage->stage == "Aklimatisasi"){
    						$aklimatisasi=$stage->stock_quantity;
    					}
    					else
    					if ($stage->stage == "Inisiasi"){
    						$inisiasi=$stage->stock_quantity;
    					}
    					else {
    						$transplantasi=$stage->stock_quantity;
    					}
    					$year = \Carbon\Carbon::parse($stage->date);
    				} else {
    					if ($stage->stage == "Aklimatisasi"){
    						$aklimatisasi=$stage->stock_quantity;
    					}
    					else
    					if ($stage->stage == "Inisiasi"){
    						$inisiasi=$stage->stock_quantity;
    					}
    					else {
    						$transplantasi=$stage->stock_quantity;
    					}
    					$year = \Carbon\Carbon::parse($stage->date);
    				}
    			} else{
    				if ($stage->stage == "Aklimatisasi"){
    					$aklimatisasi+=$stage->stock_quantity;
    				}
    				else
    				if ($stage->stage == "Inisiasi"){
    					$inisiasi+=$stage->stock_quantity;
    				}
    				else {
    					$transplantasi+=$stage->stock_quantity;
    				} 
    				$year = \Carbon\Carbon::parse($stage->date);
    			}
    		}
    		$dataProduksi->addRow([$year,$inisiasi,$aklimatisasi,$transplantasi]);
    		$i++;
	        \Lava::ColumnChart($i.'div', $dataProduksi, [
	            'title' => 'Grafik produk '.\App\Product::find($produk->product_id)->product_name,
	            'titleTextStyle' => [
			        'color'    => '#eb6b2c',
			        'fontSize' => 14
			    ]
			]);
    	}
        return View('grafik.Jenis-Pertahapan',['i'=>$i]);
    }
}
