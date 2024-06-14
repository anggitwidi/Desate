<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function display() {
        $product = product::all();
        return view('/foods', compact('product'));
    }
}
