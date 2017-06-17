<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';

    protected $fillable = ['member_id', 'address', 'total'];

    public function orderItems()
    {
    	return $this->belongsToMany('book')->withPivot('amount',  'total');	
    }
}
