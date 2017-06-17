<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class book extends Model
{
    protected $table = 'books';

    protected $fillable = ['title', 'isbn', 'cover', 'price', 'author_id'];

    public function Author()
    {
    	return $this->belongsTo('Author');
    }
}
