<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Return the products layout.
     */
    public function getProducts(){
        return view('product.products',[
            // We pass all products what we have.
            'products' => Product::all()
        ]);
    }
}
