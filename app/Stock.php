<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model {
  public function product()
  {
    return $this->has('App\Product');
  }
    protected $primaryKey = 'stock_id';
    public $fillable = ['product_id',
    'stock_increase',
    'stock_decrease',
    'stage'];

}
