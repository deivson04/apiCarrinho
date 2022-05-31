<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class StoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //comando para realizar o seeder php artisan db:seed --class=StoreSeeder
            
        DB::table('stores')->insert([
                'name_fantasya' => 'rita salgados',
                'cnpj' => '123456',
                'street' => 'rua dr pernambuco',
                'number' => '235',
                'complement' => 'casa',
                'city' => 'recife',
                'state' => 'pernambuco',
                'cellphone' => '99887766',
                'site' => 'www.ritasalgados.com.br',
                'mail' => 'ritasalgados@gmail.com'                                   
                ]);
            }
}
