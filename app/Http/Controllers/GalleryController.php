<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Http\Requests\StoreGalleryRequest;
use App\Http\Requests\UpdateGalleryRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allimages = Gallery::all();
        return view('gallery.index', compact('allimages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("gallery.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreGalleryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGalleryRequest $request)
    {
        if($request->file('name')){
            for ($i=0; $i < count($request->file('name')); $i++) { 
                // $path = $request->file('image')[$i];
                $path = $request->file('name')[$i]->store('public/galleries');
                $storagepath = Storage::path($path);
                $img = Image::make($storagepath);
        
                // resize image instance
                $img->resize(500, 500);
        
                // insert a watermark
                // $img->insert('public/watermark.png');
        
                // save image in desired format
                $img->save($storagepath);
                $g = new Gallery();
                $g->name = $path;
                $g->save();
            }
            return back()->with('message', 'Image Uploded Successfully!!!');
        }
        else{
            return back()->with('message','Image Upload Failed');
        }
        
    }

    public function imgDel(Request $request)
    {
        // echo $request->id;
        // Log::info($request);
        if(Gallery::destroy($request->id)){
            // if($request->name){
            //     Storage::delete($request->name);
            // }
            return response()->json(['done'=> 1,'message'=>'Image Deleted']);
        }else{
            return response()->json(['done'=> 0,'message'=>'Image Not Deleted']);
        }

    }

    public function home()
    {
        $allimages = Gallery::paginate(16);
        return view('gallery.home', compact('allimages'));
    }
}
