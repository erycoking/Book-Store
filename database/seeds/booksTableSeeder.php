<?php

use Illuminate\Database\Seeder;
use App\book;

class booksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->delete();

        Book::create([
    		'title'=>'Requiem',
		    'isbn'=>'9780062014535',
		    'price'=>'13.40',
		    'cover'=>'requiem.jpg',
		    'author_id'=>1
        	]);
    	Book::create([
    		'title'=>'Twilight',
		    'isbn'=>'9780316015844',
		    'price'=>'15.40',
		    'cover'=>'twilight.jpg',
		    'author_id'=>2
    	]);
    	Book::create([
    		'title'=>'Deception Point',
		    'isbn'=>'9780671027384',
		    'price'=>'16.40',
		    'cover'=>'deception.jpg',
		    'author_id'=>3
    	]);
    }
}
