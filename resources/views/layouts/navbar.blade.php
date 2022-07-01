<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Arsip Elektronik</title>
      <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('fontawesome-free/css/all.min.css') }}">
    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">
    <script src="{{ asset('js/sb-admin-2.js')}}"></script>
    <script src="{{ asset('js/sb-admin-2.min.js')}}"></script>
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
</head>
<body id="page-top" class="">

    <div id="wrapper" class="section-wrapper">

            <!-- Sidebar -->
            <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

                <!-- Sidebar - Brand -->
                <a class="sidebar-brand d-flex align-items-center justify-content-center">
                    <div class="sidebar-brand-icon rotate-n-15">
                        <i class="fas fa-laugh-wink"></i>
                    </div>
                    <div class="sidebar-brand-text mx-3">Siarsip</div>
                </a>

                <!-- Divider -->
                <hr class="sidebar-divider my-0">

                <!-- Nav Item - Dashboard -->
                <li class="nav-item active">
                    <a class="nav-link" href="/dashboard">
                        <i class="fas fa-fw fa-tachometer-alt"></i>
                        <span>Dashboard</span></a>
                </li>

                <!-- Divider -->
                <hr class="sidebar-divider">

                <!-- Heading -->
                <div class="sidebar-heading">
                    Menu
                </div>

                <!-- Nav Item - Pages Collapse Menu -->
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                        <i class="fas fa-id-card"></i>
                        <span>Pengendalian Karir</span>
                    </a>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">sub menu</h6>
                            <a class="collapse-item text-start" href="{{ route('promosi')}}"><i class="fas fa-ad"></i> Promosi</a>
                            <a class="collapse-item text-start" href="{{ route('disiplinpegawai')}}"><i class="fas fa-address-card"></i> Disiplin Pegawai</a>
                            <a class="collapse-item text-start" href="{{ route('tandapenghargaan')}}"><i class="fas fa-award"></i> Tanda Penghargaan</a>
                            <a class="collapse-item text-start" href="{{ route('penilaianprestasi')}}"><i class="fas fa-trophy"></i> Penilaian Prestasi</a>
                        </div>
                    </div>
                </li>

                <!-- Nav Item - Utilities Collapse Menu -->
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                        <i class="fas fa-hand-holding-heart"></i>
                        <span>Kesejahteraan Pegawai</span>
                    </a>
                    <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Sub Menu</h6>
                            <a class="collapse-item text-start" href="{{ route('kesehatan') }}"><i class="fas fa-user-md"></i>Kesehatan</a>
                            <a class="collapse-item text-start" href="{{ route('cuti') }}"><i class="fas fa-retweet"></i> Cuti</a>
                            <a class="collapse-item text-start" href="{{ route('tunjangan') }}"><i class="fas fa-coins"></i> Tunjangan</a>
                            <a class="collapse-item text-start" href="{{ route('pensiun') }}"><i class="fas fa-handshake"></i> Pensiun</a>
                        </div>
                    </div>
                </li>

                <!-- Nav Item - Utilities Collapse Menu -->
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('manajemenuser') }}">
                        <i class="fas fa-user-alt"></i>
                        <span>Manajemen User</span></a>
                </li>

                <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="fas fa-sign-out-alt"></i>
                            <span>{{ __('Logout') }}</span>
                        </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>

                <!-- Divider -->
                <hr class="sidebar-divider">

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
                        <ul class="ml-auto navbar-nav">
                            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                            <li class="nav-item dropdown no-arrow d-sm-none">
                                <div class="input-group">
                                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="button">
                                                    <i class="fas fa-search fa-sm"></i>
                                                </button>
                                    </div>
                                </div>

                            </li>
                            <div class="topbar-divider d-none d-sm-block"></div>
                            <!-- Nav Item - User Information -->
                            <li class="nav-item dropdown no-arrow">
                                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ Auth::user()->name }}</span>
                                    <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
                                </a>
                                
                            </li>
                        </ul>

                    </nav>
                    <!-- End of Topbar -->

                    <!-- Begin Page Content -->
                    <div class="container-fluid">

                        <!-- Page Heading -->
                        <div class="d-sm-flex align-items-center justify-content-between mb-4">
                            <!-- pengisian konten -->
                        @yield('content') 
                    </div>

                    </div>
                    <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->

                <!-- Footer -->
                <!-- <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>Copyright &copy; Your Website 2021</span>
                        </div>
                    </div>
                </footer> -->
                <!-- End of Footer -->

            </div>
            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>
        <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <script src="{{ asset('js/sb-admin-2.min.js')}}"></script>
    <script src="{{ asset('js/jquery.min.js')}}"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script>
    !function(l){"use strict";l("#sidebarToggle, #sidebarToggleTop").on("click",function(e){l("body").toggleClass("sidebar-toggled"),l(".sidebar").toggleClass("toggled"),l(".sidebar").hasClass("toggled")&&l(".sidebar .collapse").collapse("hide")}),l(window).resize(function(){l(window).width()<768&&l(".sidebar .collapse").collapse("hide"),l(window).width()<480&&!l(".sidebar").hasClass("toggled")&&(l("body").addClass("sidebar-toggled"),l(".sidebar").addClass("toggled"),l(".sidebar .collapse").collapse("hide"))}),l("body.fixed-nav .sidebar").on("mousewheel DOMMouseScroll wheel",function(e){var o;768<l(window).width()&&(o=(o=e.originalEvent).wheelDelta||-o.detail,this.scrollTop+=30*(o<0?1:-1),e.preventDefault())}),l(document).on("scroll",function(){100<l(this).scrollTop()?l(".scroll-to-top").fadeIn():l(".scroll-to-top").fadeOut()}),l(document).on("click","a.scroll-to-top",function(e){var o=l(this);l("html, body").stop().animate({scrollTop:l(o.attr("href")).offset().top},1e3,"easeInOutExpo"),e.preventDefault()})}(jQuery);
    </script>
    <script type="text/javascript">
        $(document).ready(function(){
        $("#myInput").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#myTable tr").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
        });
    </script>
</body>
</html>
