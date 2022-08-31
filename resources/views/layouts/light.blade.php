<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="maxween business info">
    <meta name="author" content="maxween">
    <title>{{ config('app.name', 'Laravel')}}</title>

    <!-- font icons -->
    <link rel="stylesheet" href="{{url('assets/css/themify-icons.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

    <!-- owl carousel -->
    {{-- <link rel="stylesheet" href="assets/vendors/owl-carousel/css/owl.carousel.css">
    <link rel="stylesheet" href="assets/vendors/owl-carousel/css/owl.theme.default.css"> --}}

    <!-- Bootstrap + Ollie main styles -->
    <link rel="stylesheet" href="{{url('assets/css/ollie.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/style.css')}}">

</head>

<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">

    <nav id="scrollspy" class="navbar navbar-light bg-light navbar-expand-lg fixed-top" data-spy="affix"
        data-offset-top="20">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{url('/')}}"> <h1 class="text-success fw-bold"> Maxween Limited</h1></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link text-success" href="{{url('/')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-success" href="{{url('/about')}}">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-success" href="{{url('/products')}}">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-success" href="#">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-success" href="#">Contact Us</a>
                    </li>
                    <!-- <li class="nav-item ml-0 ml-lg-4">
                        <a class="nav-link btn btn-primary" href="#">Components</a>
                    </li> -->
                </ul>
            </div>
        </div>
    </nav>
    
    @yield('content')


    
    <!-- Footer Start -->
    <div class="container-fluid bg-info text-secondary mt-5 pt-5">
        <div class="row px-xl-5 pt-5">
            <div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5">
                <h5 class="text-light text-uppercase mb-4">Get In Touch</h5>
                <p class="mb-4">The global machinery manufacturing industry plays a vital role in terms of supplying
                    essential machine tools and other industrial equipment for many other downstream manufacturing and
                    service industries to increase the productivity and reduce cost. Sales of many types of machinery
                    typically are accompanied by a variety of other high-value services, including specialized design,
                    engineering, and logistics. </p>
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="row">
                    <div class="col-md-4 mb-5">
                        <h5 class="text-secondary text-uppercase mb-4">Address</h5>
                        <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i>Kotchandpur, Jhenaidah</p>
                        <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i>Khulna, Bangladesh</p>

                    </div>
                    <div class="col-md-4 mb-5">
                        <h5 class="text-secondary text-uppercase mb-4">Contact</h5>
                        <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i>info.maxween@gmail.com</p>
                        <p class="mb-0"><i class="fa fa-phone-alt text-primary mr-3"></i>+01921-151616</p>
                        <p class="mb-0"><i class="fa fa-mobile-alt text-primary mr-3"></i>+01921-151617</p>
                    </div>
                    <div class="col-md-4 mb-5">
                        <h5 class="text-secondary text-uppercase mb-4">Business Hours</h5>
                        <p>Mon: 9:30 AM – 6:30 PM</p>
                        <p>Tue: 9:30 AM – 6:30 PM</p>
                        <p>wed: 9:30 AM – 6:30 PM</p>
                        <p>Thu: 9:30 AM – 6:30 PM</p>
                        <p>Fri: Closed</p>
                        <p>sat: 9:30 AM – 6:30 PM</p>
                        <p>Sun: 9:30 AM – 6:30 PM</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row border-top mx-xl-5 py-4 m-5" style="border-color: rgba(256, 256, 256, .1) !important;">
            <div class="col-md-6 px-xl-0">
                <p class="mb-md-0 text-center text-md-left text-secondary">
                    &copy; <a class="text-primary" href="#">Maxween</a>. All Rights Reserved. Designed
                    by
                    <a class="text-primary" href="#">CrackIT Limited</a>
                </p>
            </div>
            <div class="col-md-6 px-xl-0 text-center text-md-right">
                <img class="img-fluid" src="{{url('assets/img/payments.png')}}" alt="">
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- core  -->
    <script src="{{url('assets/js/jquery-3.4.1.js')}}"></script>
    <script src="{{url('assets/js/bootstrap.bundle.js')}}"></script>

    <!-- bootstrap 3 affix -->
    <script src="{{url('assets/js/bootstrap.affix.js')}}"></script>

    <!-- Owl carousel  -->
    <script src="{{url('assets/js/owl.carousel.js')}}"></script>


    <!-- Ollie js -->
    <script src="{{url('assets/js/ollie.js')}}"></script>

    @yield('script')

</body>

</html>