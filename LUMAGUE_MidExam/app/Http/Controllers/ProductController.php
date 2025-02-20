<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function resto()
    {
        $products = [
            ['name' => 'Sushi', 'price' => 250, 'category' => 'Main Dish'],
            ['name' => 'Ramen', 'price' => 350, 'category' => 'Noodles'],
            ['name' => 'Takoyaki', 'price' => 200, 'category' => 'Street Food'],
            ['name' => 'Matcha Ice Cream', 'price' => 150, 'category' => 'Dessert'],
            ['name' => 'Onigiri', 'price' => 100, 'category' => 'Snack'],
        ];

        return view('products.resto', compact('products'));
    }
}