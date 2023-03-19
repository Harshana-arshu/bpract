<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product=new Product;
        $product->name='laptop';
        $product->price='15000';
        $product->save();

        $product=new Product;
        $product->name='phone';
        $product->price='5000';
        
        $product->save();
    }
}
