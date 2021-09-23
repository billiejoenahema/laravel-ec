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
        // create 20 owners
        for ($i = 1; $i < 21; $i++) {
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
