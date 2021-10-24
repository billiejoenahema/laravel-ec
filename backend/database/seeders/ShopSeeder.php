<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shops')->insert([
            [
                'owner_id' => 1,
                'name' => 'shop' . 1,
                'information' => '店舗情報' . 1,
                'filename' => 'sample1.jpeg',
                'is_selling' => true
            ],
            [
                'owner_id' => 2,
                'name' => 'shop' . 2,
                'information' => '店舗情報' . 2,
                'filename' => 'sample2.jpeg',
                'is_selling' => true
            ],
        ]);

        // create 18 owners
        for ($i = 3; $i < 21; $i++) {
            DB::table('shops')->insert([
                'owner_id' => $i,
                'name' => 'shop' . $i,
                'information' => '店舗情報' . $i,
                'filename' => '',
                'is_selling' => true
            ]);
        }
    }
}
