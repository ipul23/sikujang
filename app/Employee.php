<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model {
	protected $primaryKey = 'employee_id';
    public $fillable = ['employee_id',
    'date'
    ];

}
