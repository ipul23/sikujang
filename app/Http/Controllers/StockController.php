<?php
namespace App\Http\Controllers;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Stock;
use DB;
use Auth;
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
        $t = DB::table('users')->where('user_status','=',1)->where('id','=',Auth::user()->id)->get();
        foreach ($t as $at){
          if ($at->id == Auth::user()->id){
            $tc = DB::table('employees')->where('employee_id','=',Auth::user()->id)->get();
            foreach($tc as $t){
                if (\Carbon\Carbon::parse($t->date)->format('Y-m-d') == \Carbon\Carbon::parse(\Carbon\Carbon::now())->format('Y-m-d')){
                    return view('stock.index',compact('stocks'))
                    ->with('i', ($request->input('page', 1) - 1) * 5);
                }
            }
            DB::table('employees')->insert(['employee_id'=>Auth::user()->id]);
          }
        }

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
        $product = \App\product::pluck('product_name','product_id');
        $this->validate($request, [
            'product_id' => 'required',
            'stock_increase' => 'required|integer|min:0',
            'stock_decrease' => 'required|integer|min:0',
            'stage' => 'required',
            'stock_quantity'
        ]);
        $id_prod = $request->product_id;
        $inc = $request->stock_increase;
        $dec = $request->stock_decrease;
        $prev_total = DB::table('products')->where('product_id', $id_prod)->get();
        foreach ($prev_total as $pq)
          $now = $pq->product_quantity;
        $total = $now + $inc - $dec;
        DB::table('products')
          ->where('product_id',$id_prod)
          ->update(['product_quantity' => $total]);
        $stock = array(
          'product_id' => $request->product_id,
          'stock_increase' => $request->stock_increase,
          'stock_decrease' => $request->stock_decrease,
          'stock_quantity' => $total,
          'stage'=> $request->stage,
          );
          DB::table('stocks')->insert($stock);
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
