<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index(Request $request)
    {
        if($request){
            $products = Product::where('product_name', 'like', '%'.$request->cari.'%')->get(); 
        }else{
            $products = Product::all(); 
        }

        return view('products', compact('products', 'request'));
    }
}
