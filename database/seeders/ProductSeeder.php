<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Product::factory(10)->create();
        /*$data = [
            'name' => 'Pan',
            'price' => 1.20,
            'lote' => 50098700
        ];
        DB::table('products')->insert($data);
        */

    }
}
