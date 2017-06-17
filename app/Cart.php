<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $table = 'carts';

    protected $filable = ['member_id', 'book_id', 'amount', 'total'];

    public function Book()
    {
    	return $this->belongsTo('book');
    }
}
