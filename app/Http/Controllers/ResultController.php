<?php

namespace App\Http\Controllers;

use App\Models\ProductModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ResultController extends Controller
{
    public function index() {
        $products = ProductModel::all();

        return view('welcome')->with(compact('products'));
    }

    public function addProduct() {
        return view('productForm');
    }
}
