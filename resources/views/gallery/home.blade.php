@extends('layouts.light')

@section('pagetitle')
    Galleries
@endsection

@section('content')

<!-- Breadcrumb Start -->
<div class="container-fluid mt-5 pt-5">
    <div class="row px-xl-5 pt-4">
        <div class="col-12">
            <nav class="breadcrumb bg-light mb-30">
                <a class="breadcrumb-item text-dark" href="{{url('/')}}">Home</a>
                <span class="breadcrumb-item active">Gallery</span>
            </nav>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->

<div class="container">
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