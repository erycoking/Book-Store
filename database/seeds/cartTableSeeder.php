<?php

use Illuminate\Database\Seeder;
use App\Cart;

class cartTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('carts')->delete();

        Cart::create([
        	'member_id'=>'1'
        	]);
    }
}
