@extends('layouts.light')

@section('content')
<header>
    <div>
        <img src="{{url('assets/img/Meeting-Room-Office-Wall-Logo-Mockup-Design.jpg')}}" alt="Company Background Image" class="w-100">
    </div>
</header>

{{-- <header id="home" class="header">
    <div class="overlay"></div>

    <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="container">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="carousel-caption d-none d-md-block">
                        <h1 class="carousel-title">We Make<br> Creative Design</h1>
                        <button class="btn btn-primary btn-rounded">Learn More</button>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="carousel-caption d-none d-md-block">
                        <h1 class="carousel-title">We Make <br> Responsive Design</h1>
                        <button class="btn btn-primary btn-rounded">Learn More</button>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="carousel-caption d-none d-md-block">
                        <h1 class="carousel-title">We Make <br> Simple Design</h1>
                        <button class="btn btn-primary btn-rounded">Learn More</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header> --}}


<!-- Featured Start -->
<div class="container-fluid pt-5">
    <div class="row px-xl-5">
        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
            <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                <h1 class="fa fa-check text-primary m-0 mr-3"></h1>
                <h5 class="font-weight-semi-bold m-0">Quality Product</h5>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
            <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                <h1 class="fa fa-shipping-fast text-primary m-0 mr-2"></h1>
                <h5 class="font-weight-semi-bold m-0">Free Shipping</h5>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
            <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                <h1 class="fas fa-exchange-alt text-primary m-0 mr-3"></h1>
                <h5 class="font-weight-semi-bold m-0">14-Day Return</h5>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
            <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                <h1 class="fa fa-phone-volume text-primary m-0 mr-3"></h1>
                <h5 class="font-weight-semi-bold m-0">24/7 Support</h5>
            </div>
        </div>
    </div>
</div>
<!-- Featured End -->
<!-- Products Start -->
<div class="container-fluid pt-5 pb-3">
    <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Recent
            Products</span></h2>
    <div class="row px-xl-5">
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
            <div class="product-item bg-light mb-4">
                <div class="product-img position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="{{url('assets/img/product-1.jpg')}}" alt="">
                </div>
                <div class="text-center py-4">
                    <a class="h6 text-decoration-none text-truncate" href="detail.html">Product Name Goes Here</a>
                    <div class="d-flex align-items-center justify-content-center mt-2">
                        <h5>$123.00</h5>
                        <h6 class="text-muted ml-2"><del>$123.00</del></h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
            <div class="product-item bg-light mb-4">
                <div class="product-img position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="{{url('assets/img/product-2.jpg')}}" alt="">
                </div>
                <div class="text-center py-4">
                    <a class="h6 text-decoration-none text-truncate" href="">Product Name Goes Here</a>
                    <div class="d-flex align-items-center justify-content-center mt-2">
                        <h5>$123.00</h5>
                        <h6 class="text-muted ml-2"><del>$123.00</del></h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
            <div class="product-item bg-light mb-4">
                <div class="product-img position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="{{url('assets/img/product-1.jpg')}}" alt="">
                </div>
                <div class="text-center py-4">
                    <a class="h6 text-decoration-none text-truncate" href="">Product Name Goes Here</a>
                    <div class="d-flex align-items-center justify-content-center mt-2">
                        <h5>$123.00</h5>
                        <h6 class="text-muted ml-2"><del>$123.00</del></h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
            <div class="product-item bg-light mb-4">
                <div class="product-img position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="{{url('assets/img/product-2.jpg')}}" alt="">
                </div>
                <div class="text-center py-4">
                    <a class="h6 text-decoration-none text-truncate" href="">Product Name Goes Here</a>
                    <div class="d-flex align-items-center justify-content-center mt-2">
                        <h5>$123.00</h5>
                        <h6 class="text-muted ml-2"><del>$123.00</del></h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
            <div class="product-item bg-light mb-4">
                <div class="product-img position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="{{url('assets/img/product-1.jpg')}}" alt="">
                </div>
                <div class="text-center py-4">
                    <a class="h6 text-decoration-none text-truncate" href="">Product Name Goes Here</a>
                    <div class="d-flex align-items-center justify-content-center mt-2">
                        <h5>$123.00</h5>
                        <h6 class="text-muted ml-2"><del>$123.00</del></h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
            <div class="product-item bg-light mb-4">
                <div class="product-img position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="{{url('assets/img/product-1.jpg')}}" alt="">
                </div>
                <div class="text-center py-4">
                    <a class="h6 text-decoration-none text-truncate" href="">Product Name Goes Here</a>
                    <div class="d-flex align-items-center justify-content-center mt-2">
                        <h5>$123.00</h5>
                        <h6 class="text-muted ml-2"><del>$123.00</del></h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
            <div class="product-item bg-light mb-4">
                <div class="product-img position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="{{url('assets/img/product-1.jpg')}}" alt="">
                </div>
                <div class="text-center py-4">
                    <a class="h6 text-decoration-none text-truncate" href="">Product Name Goes Here</a>
                    <div class="d-flex align-items-center justify-content-center mt-2">
                        <h5>$123.00</h5>
                        <h6 class="text-muted ml-2"><del>$123.00</del></h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
            <div class="product-item bg-light mb-4">
                <div class="product-img position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="{{url('assets/img/product-1.jpg')}}" alt="">
                </div>
                <div class="text-center py-4">
                    <a class="h6 text-decoration-none text-truncate" href="">Product Name Goes Here</a>
                    <div class="d-flex align-items-center justify-content-center mt-2">
                        <h5>$123.00</h5>
                        <h6 class="text-muted ml-2"><del>$123.00</del></h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Products End -->


<!-- Offer Start -->
<div class="container-fluid pt-5 pb-3">
    <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Flash
            sale
            Products</span></h2>
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


<!-- Products Start -->
<div class="container-fluid pt-5 pb-3">
    <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Top
            Viewed
            Products</span></h2>
    <div class="row px-xl-5">
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
            <div class="product-item bg-light mb-4">
                <div class="product-img position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="{{url('assets/img/product-1.jpg')}}" alt="">
                </div>
                <div class="text-center py-4">
                    <a class="h6 text-decoration-none text-truncate" href="">Product Name Goes Here</a>
                    <div class="d-flex align-items-center justify-content-center mt-2">
                        <h5>$123.00</h5>
                        <h6 class="text-muted ml-2"><del>$123.00</del></h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
            <div class="product-item bg-light mb-4">
                <div class="product-img position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="{{url('assets/img/product-1.jpg')}}" alt="">
                </div>
                <div class="text-center py-4">
                    <a class="h6 text-decoration-none text-truncate" href="">Product Name Goes Here</a>
                    <div class="d-flex align-items-center justify-content-center mt-2">
                        <h5>$123.00</h5>
                        <h6 class="text-muted ml-2"><del>$123.00</del></h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
            <div class="product-item bg-light mb-4">
                <div class="product-img position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="{{url('assets/img/product-1.jpg')}}" alt="">
                </div>
                <div class="text-center py-4">
                    <a class="h6 text-decoration-none text-truncate" href="">Product Name Goes Here</a>
                    <div class="d-flex align-items-center justify-content-center mt-2">
                        <h5>$123.00</h5>
                        <h6 class="text-muted ml-2"><del>$123.00</del></h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
            <div class="product-item bg-light mb-4">
                <div class="product-img position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="{{url('assets/img/product-1.jpg')}}" alt="">
                </div>
                <div class="text-center py-4">
                    <a class="h6 text-decoration-none text-truncate" href="">Product Name Goes Here</a>
                    <div class="d-flex align-items-center justify-content-center mt-2">
                        <h5>$123.00</h5>
                        <h6 class="text-muted ml-2"><del>$123.00</del></h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
            <div class="product-item bg-light mb-4">
                <div class="product-img position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="{{url('assets/img/product-1.jpg')}}" alt="">
                </div>
                <div class="text-center py-4">
                    <a class="h6 text-decoration-none text-truncate" href="">Product Name Goes Here</a>
                    <div class="d-flex align-items-center justify-content-center mt-2">
                        <h5>$123.00</h5>
                        <h6 class="text-muted ml-2"><del>$123.00</del></h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
            <div class="product-item bg-light mb-4">
                <div class="product-img position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="{{url('assets/img/product-1.jpg')}}" alt="">
                </div>
                <div class="text-center py-4">
                    <a class="h6 text-decoration-none text-truncate" href="">Product Name Goes Here</a>
                    <div class="d-flex align-items-center justify-content-center mt-2">
                        <h5>$123.00</h5>
                        <h6 class="text-muted ml-2"><del>$123.00</del></h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
            <div class="product-item bg-light mb-4">
                <div class="product-img position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="{{url('assets/img/product-1.jpg')}}" alt="">
                </div>
                <div class="text-center py-4">
                    <a class="h6 text-decoration-none text-truncate" href="">Product Name Goes Here</a>
                    <div class="d-flex align-items-center justify-content-center mt-2">
                        <h5>$123.00</h5>
                        <h6 class="text-muted ml-2"><del>$123.00</del></h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
            <div class="product-item bg-light mb-4">
                <div class="product-img position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="{{url('assets/img/product-1.jpg')}}" alt="">
                </div>
                <div class="text-center py-4">
                    <a class="h6 text-decoration-none text-truncate" href="">Product Name Goes Here</a>
                    <div class="d-flex align-items-center justify-content-center mt-2">
                        <h5>$123.00</h5>
                        <h6 class="text-muted ml-2"><del>$123.00</del></h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Products End -->


@endsection
    