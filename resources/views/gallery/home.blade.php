@extends('layouts.light')

@section('pagetitle')
    Galleries
@endsection

@section('content')
<div class="container pt-5 mt-5">
    <h1>Galleries</h1>
    <div class="row">
        @forelse ($allimages as $img)
        <div class="col-sm-4 pb-4 image-area">
          <img src="{{ url(Storage::url($img->name)) }}"  alt="Preview">
        </div>
            
        @empty
            <p>No image available</p>
        @endforelse
            
    </div>
    <div class="col-12">
        {{$allimages->onEachSide(1)->links()}}
        {{-- {{$products->links()}} --}}
    </div>

</div>

@endsection