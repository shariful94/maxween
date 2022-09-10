<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::with('productimages')->take('12')->get();
        $allproducts = Product::with('productimages')->take('12')->orderBy('id','Desc')->get();
        return view('home.index', compact('products'))->with(compact('allproducts'));
    }
    public function product()
    {
        $products = Product::with('productimages')->get();
        // dd($products->productimages);
        return view('home.product', compact('products'));
    }


    public function productdetails($slug)
    {
        $product = Product::where('slug',$slug)->first();
       return view('home.details',compact('product'));
    }

    
}
