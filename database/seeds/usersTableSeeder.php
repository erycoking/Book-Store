<?php

use Illuminate\Database\Seeder;
use App\User;

class usersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();

        User::create([
        		'name'=>'John Doe',
        		'password'=>Hash::make('password'),
        		'email'=>'member@email.com',
        		'admin'=>0
        	]);
        User::create([
        		'name'=>'jeniffer Taylor',
        		'password'=>Hash::make('adminpassword'),
        		'email'=>'admin@store.com',
        		'admin'=>1
        	]);
    }
}
