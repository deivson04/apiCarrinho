<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'dayvson',
            'email' => 'dayvson04@hotmail.com',
            'password' => '$2a$12$69RZzcUm/g1zMxmMqG3hEOaXjdqXLh79j8UYOTVjzuxcr3YkzYfwC'
            
            
                                              
            ]);
    }
}
