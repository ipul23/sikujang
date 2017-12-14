<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Khill\Lavacharts\Lavacharts;
use DB;

class ChartKeuntunganController extends Controller
{	
    public function index()
    {
    	$dm = DB::table('demands')->OrderBy('date')->get(); 
    	$dataProduksi = \Lava::DataTable();
		$dataProduksi->addDateColumn('Date')
					 ->addNumberColumn('Keuntungan');
		$sum = 0;
		$year = "0000";
		$i = 0;
    	foreach ($dm as $demand){
    		if (\Carbon\Carbon::parse($demand->date)->format('Y')!=\Carbon\Carbon::parse($year)->format('Y')){
    			if ($year!= "00000"){
    				$dataProduksi->addRow([$year,$sum]);
    			}
    			$year = $demand->date;
    			$sum = $demand->demand_price;
    		} else{
    			$sum += $demand->demand_price;
    			$year = $demand->date;
    		}
    	}
    	$dataProduksi->addRow([$year,$sum]);
    	$i++;
    	\Lava::LineChart($i.'div', $dataProduksi, [
	            'title' => 'Grafik keuntungan '
	        ]);
        return View('grafik.keuntungan',['i'=>$i]);
    }
}
