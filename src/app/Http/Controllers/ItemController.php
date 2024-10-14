<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ItemController extends Controller
{
    // 初期表示
    public function index() {
        $products = Product::all();
        return view('index', compact('products'));
    }
}
