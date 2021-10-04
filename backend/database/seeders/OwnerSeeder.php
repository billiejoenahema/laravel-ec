<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use DateTime;

class OwnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('owners')->insert([
            'name' => 'owner1',
            'email' => 'owner1@example.com',
            'password' => Hash::make('123456789'),
            'created_at' => new DateTime()
        ]);

        // create 20 owners
        for ($i = 2; $i < 21; $i++) {
            DB::table('owners')->insert([
                'name' => 'owner' . $i,
                'email' => 'owner' . $i . '@example.com',
                'password' => Hash::make('123456789'),
                'created_at' => new DateTime()
            ]);
        }
    }
}
