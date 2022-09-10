<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} | @yield('pagetitle')</title>

    <!-- Custom fonts for this template-->
    <link href="{{url('assets/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="{{url('assets/css/dataTables.bootstrap.min.css')}}" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="{{url('assets/css/admin.css')}}" rel="stylesheet">


</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{url('dashboard')}}">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-cash-register"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Maxween</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Product -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{url('product')}}">
                    <i class="fas fa-fw fa-people-carry"></i>
                   <span>Products</span>
                </a>
            </li>
            <!-- Nav Item - Carousel -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{url('employee')}}">
                    <i class="fas fa-photo-video"></i>
                   <span>Employee</span>
                </a>
            </li>
            <!-- Nav Item - Gallery -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{url('gallery')}}">
                    <i class="fas fa-images"></i>
                   <span>Gallery</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-primary small">
                                    {{-- {{ Auth::user()->name . " " . Auth::user()->lname }} --}}
                                </span>
                                {{-- @if ($user->profile)
                                <img src="{{url(Storage::url($user->profile->image))}}" class="img-profile rounded-circle" alt="Profile Image">
                                @else
                                    
                                @endif --}}
                                
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="{{url('profile')}}">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-primary"></i>
                                    Profile
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-primary"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    @yield('content')

                </div>

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Maxween | Copyright &copy; {{date('Y');}} All Rights Reserved. Develop by <a class="text-primary" href="https://crackit-bd.com/" target="blank">CrackIT Ltd.</a></span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">x</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a class="btn btn-primary" href="{{url('logout')}}" onclick="event.preventDefault(); this.closest('form').submit();">Logout</a>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- Bootstrap core JavaScript-->
    {{-- <script src="{{url('assets/vendor/jquery/jquery.min.js')}}"></script> --}}
    <script src="{{url('assets/js/jquery-3.6.0.min.js')}}"></script>
    <script src="{{url('assets/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{url('assets/js/jquery.easing.min.js')}}"></script>

    <!-- Page level plugins -->
    <script src="{{url('assets/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{url('assets/js/dataTables.bootstrap.min.js')}}"></script>
    <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{url('assets/js/admin.min.js')}}"></script>
    <script>
        $(document).ready( function () {
        $('#dataTable').DataTable();
        });

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>

    @yield('script')

</body>

</html>