<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Khill\Lavacharts\Lavacharts;
use DB;

class DashboardController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
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
		$dataProduksi->addDateColumn('Month')
		             ->addNumberColumn('Data produksi')
		for ($i=1; $i<=12; $i++){
			$sum = 0;
			foreach(DB::table('stocks')->where('date','LIKE','%'.$stock->created_at->format('m').'%') as $stock){
				$sum+=$stock->stock_quantity;
			}
			$dataProduksi->addRow(['$i',$sum]);
		}
		
		$lava->LineChart('Temps', $dataProduksi, [
		    'title' => 'grafik data produksi'
		]);
		foreach(\App\stock::all() as $stock){
			$inisiasi = DB::table('stocks')->where('stage',$stock->Inisiasi)->where('created_at','LIKE','%'.$stock->created_at->format('Y-m-d').'%')->count();
			$Aklimatisasi = DB::table('stocks')->where('stage',$stock->Aklimatisasi)->where('created_at','LIKE','%'.$stock->created_at->format('Y-m-d').'%')->count();

			$Transplanting = DB::table('stocks')->where('stage',$stock->Transplanting)->where('created_at','LIKE','%'.$stock->created_at->format('Y-m-d').'%')->count();
			$dataProduksi->addRow([$stock->created_at->format('Y-m-d'),$inisiasi,$Aklimatisasi,$Transplanting]);
		}
        return View('home',['produk'=>$produk,'demand'=>$permintaan,'lava'=>$lava]);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
