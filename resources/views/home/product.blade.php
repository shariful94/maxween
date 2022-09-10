@extends('layouts.light')

@section('content')

@section('pagetitle')
    Products
@endsection
<!-- Breadcrumb Start -->
<div class="container-fluid mt-5 pt-5">
    <div class="row px-xl-5 pt-4">
        <div class="col-12">
            <nav class="breadcrumb bg-light mb-30">
                <a class="breadcrumb-item text-dark" href="{{url('/')}}">Home</a>
                <span class="breadcrumb-item active">Products</span>
            </nav>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->

<!-- Products Start -->
<div class="container-fluid pb-3">
    <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Our Products</span></h2>
    <div class="row px-xl-5">
        @foreach ($products as $product)
            <div class="col-lg-4 col-md-6 col-sm-6 pb-1">
                <div class="product-item bg-light mb-4">
                    <div class="product-img position-relative overflow-hidden">
                        @if ($product->productimages)
                        <img class="img-fluid w-100" src="{{url(Storage::url($product->productimages->first()->name))}}" alt="">     
                        @else 
                        <img class="img-fluid w-100" src="{{url('assets/img/product-1.jpg')}}" alt="">           
                        @endif
                    </div>
                    <div class="text-center py-4">
                        <a class="h6 text-decoration-none text-truncate" href="{{url('item/'.$product->slug)}}">{{Str::substr($product->name, 0, 26)}}...</a>
                        <div class="d-flex align-items-center justify-content-center mt-2">
                            <h5>&#2547; {{$product->price}}</h5><h6 class="text-muted ml-2"><del>&#2547; {{$product->regular_price}}</del></h6>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
<!-- Products End -->


<!-- Offer Start -->
<div class="container-fluid pt-5 pb-3">
    <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Flash sale Products</span></h2>
    <div class="row px-xl-5">
        <div class="col-md-6">
            <div class="product-offer mb-30" style="height: 300px;">
                <img class="img-fluid" src="{{url('assets/img/Sonalika-di-50-tiger.jpg')}}" alt="">
                <div class="offer-text">
                    <h3 class="text-white mb-3">Flash sale</h3>
                    <h6 class="text-white text-uppercase">Save up to 50%</h6>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="product-offer mb-30" style="height: 300px;">
                <img class="img-fluid" src="{{url('assets/img/1652260013286.jpg')}}" alt="">
                <div class="offer-text">
                    <h3 class="text-white mb-3">Flash sale</h3>
                    <h6 class="text-white text-uppercase">Save up to 50%</h6>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Offer End -->

@endsection
    