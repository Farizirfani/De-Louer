<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class kostSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('kosts')->insert([
            'name' => 'Melati',
            'address' => 'Jl.Jasmine 1 No 20',
            'description' => 'lorem ipsum',
        ]);
    }
}
