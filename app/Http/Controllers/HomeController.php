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
        // $allproduct = Product::where('status', '1')->get();
        $products = Product::with('productimages')->where('status', '1')->take('12')->get();
        $allproducts = Product::with('productimages')->where('status', '1')->take('12')->orderBy('id','Desc')->get();
        return view('home.index', compact('products'))->with(compact('allproducts'));
    }
    public function product()
    {
        $products = Product::with('productimages')->where('status', '1')->get();
        // dd($products->productimages);
        return view('home.product', compact('products'));
    }


    public function productdetails($slug)
    {
        $product = Product::where('slug',$slug)->first();
       return view('home.details',compact('product'));
    }

    
}
