<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->delete();

        DB::table('products')->insert([
            [
                'name' => 'Product 1',
                'price' => 19.99,
                'discription' => 'Description of Product 1.',
            ],
            [
                'name' => 'Product 2',
                'price' => 29.99,
                'discription' => 'Description of Product 2.',
            ],
            [
                'name' => 'Product 3',
                'price' => 39.99,
                'discription' => 'Description of Product 3.',
            ],
            [
                'name' => 'Product 4',
                'price' => 49.99,
                'discription' => 'Description of Product 4.',
            ],
            // Add more product data as needed
        ]);
    }
}
