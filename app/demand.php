<?php namespace App;
use Illuminate\Database\Eloquent\Model;
class Demand extends Model {
	public function product()
    {
        return $this->has('App\Product');
    }
    protected $primaryKey = 'demand_id';
    public $fillable = [
    	'product_id',
    	'demand_id',
        'demand_price',
        'demand_status',
    	'demand_quantity',
    	'client_name',
    	'demand_note'
    ];
}
