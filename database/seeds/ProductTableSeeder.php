<?php

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
        $product = new \App\Product([
           'imagePath' => 'images/echo.jpg',
            'title' => "San pham so 1",
            'price' => 1,
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'images/echo.jpg',
            'title' => "San pham so 2",
            'price' => 2,
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'images/echo.jpg',
            'title' => "San pham so 3",
            'price' => 3,
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'images/echo.jpg',
            'title' => "San pham so 4",
            'price' => 4,
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'images/echo.jpg',
            'title' => "San pham so 5",
            'price' => 5,
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'images/echo.jpg',
            'title' => "San pham so 5",
            'price' => 5,
        ]);
        $product->save();
    }
}
