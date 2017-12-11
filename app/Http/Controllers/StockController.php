<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Stock;



class StockController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
      $cari = $request->get('search');
      $stocks = Stock::where('stage','LIKE','%'.$cari.'%')->paginate(5);
      return view('stock.index',compact('stocks'))
          ->with('i', ($request->input('page', 1) - 1) * 5);

#        $stocks = Stock::orderBy('stock_id')->paginate(5);
#        return view('stock.index',compact('stocks'))
#            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $product = \App\product::pluck('product_name','product_id');
        return view('stock.create')->with('product',$product);
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'product_id' => 'required',
            'stock_increase' => 'required',
            'stock_decrease' => 'required',
            'stage' => 'required'
        ]);


        $stock = Stock::create($request->all());
        return redirect()->route('stock.index')
                        ->with('success','Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($stock_id)
    {
        $stock = Stock::find($stock_id);
        return view('stock.show',compact('stock'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($stock_id)
    {
        $product = \App\product::pluck('product_name', 'product_id');
        $stock = Stock::find($stock_id);
        return view('stock.edit',compact('stock','product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $stock_id)
    {
        $this->validate($request, [
          'product_id' => 'required',
          'stock_increase' => 'required',
          'stock_decrease' => 'required',
        ]);

        Stock::find($stock_id)->update($request->all());
        return redirect()->route('stock.index')
                        ->with('success','Item updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function search(Request $request)
     {
         $cari = $request->get('search');
         $stocks = Stock::where('stage','LIKE','%'.$cari.'%')->paginate(5);
         return view('stock.index',compact('stocks'))
             ->with('i', ($request->input('page', 1) - 1) * 5);
     }

    public function destroy($stock_id)
    {
        Stock::find($stock_id)->delete();
        return redirect()->route('stock.index')
                        ->with('success','Product deleted successfully');
    }
}
