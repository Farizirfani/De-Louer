<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class roomSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('rooms')->insert([
            'kosts_id' => '1',
            'nama_room' => 'Standard',
            'price' => 1500000,
            'capacity' => 5,
        ]);
    }
}
