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

    public function saveProduct(Request $request) {
        // dd($request->all());
        $this->validate($request, [
            'title' => 'required',
            'author' => 'required',
            'publish_date' => 'required|date',
            'price' => 'required|numeric'
        ]);

        $product = (isset($request->p_id)) ? ProductModel::find($request->p_id) : new ProductModel();

        $product->title = $request->title;
        $product->author = $request->author;
        $product->publish_date = $request->publish_date;
        $product->price = $request->price;

        if($product->save()) {
            return redirect('/')->with('success', (isset($request->p_id)) ? 'Product addded successfully.' : 'Product updated successfully.');
        }

        return redirect()->back();


    }

    public function editProduct(ProductModel $id) {
        if($id) {
            return view('editProduct')->with(compact('id'));
        }
    }

    public function destroyeProduct(Request $request) {
        // dd($request->id);
        if(ProductModel::find($request->id)->delete()) {
            return redirect('/')->with('success', 'Product destroye successfully.');
        }
    }
}
