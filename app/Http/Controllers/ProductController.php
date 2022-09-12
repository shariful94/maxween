<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Productimage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allproduct = Product::all();
        // dd($allproduct);
        return view('product.index',compact('allproduct'))->with('user',Auth::user());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("product.create")->with('user',Auth::user());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductRequest $request)
    {
        // dd($request);
        $p = new Product();
        $p->name = $request->name;
        $p->feature = $request->feature;
        $p->description = $request->description;
        $p->information = $request->information;
        $p->regular_price = $request->regular_price;
        $p->price = $request->price;
        if($p->save()){
            if($request->file('image')){
                for ($i=0; $i < count($request->file('image')); $i++) { 
                    // $path = $request->file('image')[$i];
                    $path = $request->file('image')[$i]->store('public/products');
                    $storagepath = Storage::path($path);
                    $img = Image::make($storagepath);
            
                    // resize image instance
                    $img->resize(500, 500);
            
                    // insert a watermark
                    // $img->insert('public/watermark.png');
            
                    // save image in desired format
                    $img->save($storagepath);
                    $pi = new Productimage();
                    $pi->product_id = $p->id;
                    $pi->name = $path;              
                    $pi->save();
                }
            }
            else{
                return back()->with('message','Product image not found');
            }
            return back()->with('message','Product ' .$p->id. ' Create Successfully!!!');
        }
        else{
            return back()->with('message','Product not save');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('product.show',compact('product'))->with('user',Auth::user());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('product.edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductRequest  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        $product->name = $request->name;
        $product->feature = $request->feature;
        $product->description = $request->description;
        $product->information = $request->information;
        $product->regular_price = $request->regular_price;
        $product->price = $request->price;

        if($product->save()){
            if($request->file('image')){
                for ($i=0; $i < count($request->file('image')); $i++) { 
                    // $path = $request->file('image')[$i];
                    $path = $request->file('image')[$i]->store('public/products');
                    $storagepath = Storage::path($path);
                    $img = Image::make($storagepath);
            
                    // resize image instance
                    $img->resize(500, 500);
            
                    // insert a watermark
                    // $img->insert('public/watermark.png');
            
                    // save image in desired format
                    $img->save($storagepath);
                    $pi = new Productimage();
                    $pi->product_id = $product->id;
                    $pi->name = $path;                
                    $pi->save();
                }
            }
            else{
                return back()->with('message','Product image not found');
            }
            return back()->with('message',"Update Successfully!!!");
        }
        else{
            return back()->with('message',"Update Failed!!!");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        // dd($product->slug);
        if(Product::destroy($product->slug)){
            return back()->with('message',$product->slug. ' Deleted!!!!');
        }
    }

    public function changeStatus(UpdateProductRequest $request, Product $product)
    {
        // dd($request);
        $product->status = $request->status;
        
        if($product->save()){
            return back()->with('message',"Update Successfully!!!");
        }
        else{
            return back()->with('message',"Update Failed!!!");
        }
    }
    public function updateproductstatus(Request $request){
        // echo $request->id;
        // Log::info($request->id);
        $status = Product::find($request->id);
        $status->status = $request->status;
        if($status->save()){
            return response()->json(['done'=> 1,'message'=>'Product Active']);
        }else{
            return response()->json(['done'=> 0,'message'=>'Product Inactive']);
        }

    }
}
