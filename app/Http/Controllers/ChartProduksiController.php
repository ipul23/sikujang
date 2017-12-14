<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Khill\Lavacharts\Lavacharts;
use DB;

class ChartProduksiController extends Controller
{
    public function index()
    {
    		$st = DB::table('stocks')->where('stage','=','Transplanting')->orderBy('date')->get();
    		$dataProduksi = \Lava::DataTable();
			$dataProduksi->addDateColumn('Date')
			             ->addNumberColumn('Data produksi');
		    $TabelProduksi = \Lava::DataTable();
			$TabelProduksi->addDateColumn('Date')
			             ->addNumberColumn('Data produksi');
	        $month = "00";
	        $year = "0000";
	        $sum = 0;
	        $i = 0;
	        $sum1 = 0;
	        $years = "0000";
	        foreach($st as $stock){
	            if ($year != \Carbon\Carbon::parse($stock->date)->format('Y')){
	            	if ($year != "0000"){
	            		$dataProduksi->addRow([$month,$sum]);
	            		$TabelProduksi->addRow([$month,$sum1]);
	            		$sum = $stock->stock_quantity;
	            		$sum1 = $stock->stock_quantity;
	            		$i++;
	        			\Lava::LineChart($i.'div', $dataProduksi, [
	            			'title' => 'Grafik data produksi tahun '.$year
	        			]);
	        			$year = \Carbon\Carbon::parse($stock->date)->format('Y');
	        			$dataProduksi = \Lava::DataTable();
						$dataProduksi->addDateColumn('Date')
						             ->addNumberColumn('Data produksi');
	            	} else{
	            		$year = \Carbon\Carbon::parse($stock->date)->format('Y');
	            		$years = $year;
	            		$sum = $stock->stock_quantity;
	            		$sum1 = $stock->stock_quantity;
	            		$month = $stock->date;

	            	}
	            } else{
	            	if (\Carbon\Carbon::parse($month)->format('m') != \Carbon\Carbon::parse($stock->date)->format('m')){
			                if (\Carbon\Carbon::parse($month)->format('m') !="00"){
			                    $dataProduksi->addRow([$month,$sum]);
			                }
		                  	$month = $stock->date;
		                 	$sum = $stock->stock_quantity;
		                 	$sum1 += $stock->stock_quantity;
			            } else{
			                $sum += $stock->stock_quantity;
			                $month = $stock->date;
			                $sum1 += $stock->stock_quantity;
			            }
	            }
	        }
	        $dataProduksi->addRow([$month,$sum]);
	        $TabelProduksi->addRow([$month,$sum1]);
	        $i++;
	        \Lava::LineChart($i.'div', $dataProduksi, [
	            'title' => 'Grafik data produksi tahun '.$year
	        ]);
	        $i++;
	        \Lava::ColumnChart($i.'div', $TabelProduksi, [
	            'title' => 'Grafik data produksi tahun '.$years.'-'.$year
	        ]);

        return View('grafik.produksi',['i'=>$i]);
    }
}
