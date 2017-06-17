<?php

use Illuminate\Database\Seeder;
use App\Author;

class AuthorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('authors')->delete();

        Author::create([
        		'name'=>'laureen',
        		'surname'=>'Oliver'
        	]);

        Author::create([
        		'name'=>'stephenie',
        		'surname'=>'meyer'
        	]);

        Author::create([
        		'name'=>'Dan',
        		'surname'=>'Brown'
        	]);
    }
}
