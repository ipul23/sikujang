<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use App\Http\Controllers\Controller;
use App\Demand;
use App\Product;

class DemandSelesaiController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $demands = Demand::orderBy('demand_id')->where('demand_status','=','2')->paginate(5);
        return view('demand.index',compact('demands'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $product = \App\product::pluck('product_name','product_id');
        return view('demand.create')->with('product',$product);
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
            'client_name' => 'required',
            'demand_quantity' => 'required',
            'demand_note' => 'required',
            'product_id' => 'required'
        ]);

        $demand = demand::create($request->all());
        $price = $request->demand_quantity*Product::find($demand->product_id)->product_price;
        demand::find($demand->demand_id)->update(['demand_status'=>1]);
        demand::find($demand->demand_id)->update(['demand_price'=>$price]);
        return redirect()->route('demand.show',$demand->demand_id)
                        ->with('success','Item created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($demand_id)
    {
        $demand = demand::find($demand_id);
        return view('demand.show',compact('demand'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($demand_id)
    {
    $product = \App\product::pluck('product_name','product_id');
        $demand = demand::find($demand_id);
        return view('demand.edit',compact('demand','product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $demand_id)
    {
        $this->validate($request, [
            'client_name' => 'required',
            'demand_quantity' => 'required',
            'demand_note' => 'required'
        ]);

        demand::find($demand_id)->update($request->all());
        return redirect()->route('demand.index')
                        ->with('success','Item updated successfully');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($demand_id)
    {
        demand::find($demand_id)->update(['demand_status'=>0]);
        return redirect()->route('demand.index')
                        ->with('success','Product update successfully');
    }
}
