<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call('usersTableSeeder');        
        $this->command->info('user table seeded');
        $this->call('AuthorsTableSeeder');
        $this->command->info('Authors table seeded');
        $this->call('booksTableSeeder');
        $this->command->info('books table seeded');
    }
}