<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = [
            ['id' => 1, 'name' => 'Product 1', 'price' => 250, 'image' => 'pexels.jpg'],
            ['id' => 2, 'name' => 'Product 1', 'price' => 200, 'image' => 'pexels.jpg'],
            ['id' => 3, 'name' => 'Product 1', 'price' => 230, 'image' => 'pexels.jpg'],
            ['id' => 4, 'name' => 'Product 1', 'price' => 520, 'image' => 'pexels.jpg'],
            ['id' => 5, 'name' => 'Product 1', 'price' => 147, 'image' => 'pexels.jpg'],
            ['id' => 6, 'name' => 'Product 1', 'price' => 563, 'image' => 'pexels.jpg'],
            ['id' => 7, 'name' => 'Product 1', 'price' => 125, 'image' => 'pexels.jpg'],
            ['id' => 1, 'name' => 'Product 1', 'price' => 145, 'image' => 'pexels.jpg'],
            // Add more products as needed
        ];
        

        return view('home', compact('products'));
    }
}
