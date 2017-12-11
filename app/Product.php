<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model {
    protected $primaryKey = 'product_id';
    public $fillable = ['product_id','product_name','product_price','product_desc'];

}
