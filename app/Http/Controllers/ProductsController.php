<?php

namespace App\Http\Controllers;

use App\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        $products = Products::sortable()->paginate(5);
        return view('products', compact('products'));
    }
}
