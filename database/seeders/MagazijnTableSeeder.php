<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MagazijnTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('magazijn')->insert([
            ['product_id' => 1, 'verpakkings_eenheid' => 5, 'aantal_aanwezig' => 453],
            ['product_id' => 2, 'verpakkings_eenheid' => 2.5, 'aantal_aanwezig' => 400],
            ['product_id' => 3, 'verpakkings_eenheid' => 5, 'aantal_aanwezig' => 1],
            ['product_id' => 4, 'verpakkings_eenheid' => 1, 'aantal_aanwezig' => 800],
            ['product_id' => 5, 'verpakkings_eenheid' => 3, 'aantal_aanwezig' => 234],
            ['product_id' => 6, 'verpakkings_eenheid' => 2, 'aantal_aanwezig' => 345],
            ['product_id' => 7, 'verpakkings_eenheid' => 1, 'aantal_aanwezig' => 795],
            ['product_id' => 8, 'verpakkings_eenheid' => 10, 'aantal_aanwezig' => 233],
            ['product_id' => 9, 'verpakkings_eenheid' => 2.5, 'aantal_aanwezig' => 123],
            ['product_id' => 10, 'verpakkings_eenheid' => 3, 'aantal_aanwezig' => null],
            ['product_id' => 11, 'verpakkings_eenheid' => 2, 'aantal_aanwezig' => 367],
            ['product_id' => 12, 'verpakkings_eenheid' => 1, 'aantal_aanwezig' => 467],
            ['product_id' => 13, 'verpakkings_eenheid' => 5, 'aantal_aanwezig' => 20],
        ]);
    }
}
