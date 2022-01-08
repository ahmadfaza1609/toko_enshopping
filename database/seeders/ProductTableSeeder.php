<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = [
            [
                'title'             => 'Jagung Bakar Manis',
                'description'       => '',
                'stock'             => '1.234',
                'price'             => '',
                'photo'             => '',
                'link'              => 'https://github.com/ahmadfaza1609/toko_enshopping',
                'created_at'        => date('Y-m-d H:i:s'),
                'updated_at'        => date('Y-m-d H:i:s')
            ],
            [
                'title'             => 'Beras Bulog Original',
                'description'       => '',
                'stock'             => '2.465',
                'price'             => '',
                'photo'             => '',
                'link'              => 'https://github.com/ahmadfaza1609/toko_enshopping',
                'created_at'        => date('Y-m-d H:i:s'),
                'updated_at'        => date('Y-m-d H:i:s')
            ],
        ];

        Product::insert($product);
    }
}
