<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{asset('assets/img/favicon.png')}}">
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" media="screen">
    <script type="text/javascript" src="{{asset('assets/js/jquery.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/jquery-ui.1.10.4.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/toastr.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/modernizr.js')}}"></script>
    <link rel="stylesheet" href="{{asset('dist/fontawesome-free/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('dist/css/adminlte.css')}}">

    @livewireStyles
    @stack('styles')
</head>
<body class="">
<div id="layout">

    <div class="info-head">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <ul class="visible-md visible-lg text-left">
                        <li><a href="tel:+911234567890"><i class="fa fa-phone"></i> +91-1234567890</a></li>
                        <li><a href="mailto:contact@surfsidemedia.in"><i class="fa fa-envelope"></i>
                                contact@surfsidemedia.in</a></li>
                    </ul>
                    <ul class="visible-xs visible-sm">
                        <li class="text-left"><a href="tel:+911234567890"><i class="fa fa-phone"></i>
                                +91-1234567890</a></li>
                        <li class="text-right"><a href="index.php/changelocation.html"><i
                                    class="fa fa-map-marker"></i> Faridabad, Haryana</a></li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="visible-md visible-lg text-right">
                        <li><i class="fa fa-comment"></i> Live Chat</li>
                        <li><a href="index.php/changelocation.html"><i class="fa fa-map-marker"></i> Faridabad,
                                Haryana</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div id="header" class="header-v3" style="z-index: 99 !important;">

        <nav class="flat-mega-menu">
            <label for="mobile-button"> <i class="fa fa-bars"></i></label>
            <input id="mobile-button" type="checkbox">


            <ul class="">
                <li class="title" style="display: inline-flex;">
                    <a href="{{route('home')}}"><img src="{{asset('images/logo.png')}}"></a>
                </li>

                <li><a href="javascript:void(0);">Air Conditioners</a>
                    <ul class="drop-down one-column hover-fade">
                        <li><a href="service-details/ac-wet-servicing.html">Wet Servicing</a></li>
                        <li><a href="service-details/ac-dry-servicing.html">Dry Servicing</a></li>
                        <li><a href="service-details/ac-installation.html">Installation</a></li>
                        <li><a href="service-details/ac-uninstallation.html">Uninstallation</a></li>
                        <li><a href="service-details/ac-gas-top-up.html">Gas Top Up</a></li>
                        <li><a href="service-details/ac-gas-refill.html">Gas Refill</a></li>
                        <li><a href="service-details/ac-repair.html">Repair</a></li>
                    </ul>
                </li>
                <li><a href="#">Appliances</a>
                    <ul class="drop-down one-column hover-fade">
                        <li><a href="servicesbycategory/11.html">Computer Repair</a></li>
                        <li><a href="servicesbycategory/12.html">TV</a></li>
                        <li><a href="servicesbycategory/1.html">AC</a></li>
                        <li><a href="servicesbycategory/14.html">Geyser</a></li>
                        <li><a href="servicesbycategory/21.html">Washing Machine</a></li>
                        <li><a href="servicesbycategory/22.html">Microwave Oven</a></li>
                        <li><a href="servicesbycategory/9.html">Chimney and Hob</a></li>
                        <li><a href="servicesbycategory/10.html">Water Purifier</a></li>
                        <li><a href="servicesbycategory/13.html">Refrigerator</a></li>
                    </ul>
                </li>
                <li><a href="#">Home Needs</a>
                    <ul class="drop-down one-column hover-fade">
                        <li><a href="servicesbycategory/19.html">Laundry</a></li>
                        <li><a href="servicesbycategory/4.html">Electrical</a></li>
                        <li><a href="servicesbycategory/8.html">Pest Control</a></li>
                        <li><a href="servicesbycategory/7.html">Carpentry</a></li>
                        <li><a href="servicesbycategory/3.html">Plumbing </a></li>
                        <li><a href="servicesbycategory/20.html">Painting</a></li>
                        <li><a href="servicesbycategory/17.html">Movers &amp; Packers</a></li>
                        <li><a href="servicesbycategory/5.html">Shower Filters </a></li>
                    </ul>
                </li>
                <li><a href="#">Home Cleaning</a>
                    <ul class="drop-down one-column hover-fade">
                        <li><a href="service-details/bedroom-deep-cleaning.html">Bedroom Deep Cleaning</a></li>
                        <li><a href="service-details/overhead-water-storage.html">Overhead Water Storage </a></li>
                        <li><a href="/service-details/tank-cleaning">Tank Cleaning</a></li>
                        <li><a href="service-details/underground-sump-cleaning.html">Underground Sump Cleaning</a>
                        </li>
                        <li><a href="service-details/dining-chair-shampooing.html">Dining Chair Shampooing </a></li>
                        <li><a href="service-details/office-chair-shampooing.html">Office Chair Shampooing</a></li>
                        <li><a href="service-details/home-deep-cleaning.html">Home Deep Cleaning </a></li>
                        <li><a href="service-details/carpet-shampooing.html">Carpet Shampooing </a></li>
                        <li><a href="service-details/fabric-sofa-shampooing.html">Fabric Sofa Shampooing</a></li>
                        <li><a href="service-details/bathroom-deep-cleaning.html">Bathroom Deep Cleaning</a></li>
                        <li><a href="service-details/floor-scrubbing-polishing.html">Floor Scrubbing &amp; Polishing
                            </a></li>
                        <li><a href="service-details/mattress-shampooing.html">Mattress Shampooing </a></li>
                        <li><a href="service-details/kitchen-deep-cleaning.html">Kitchen Deep Cleaning </a></li>
                    </ul>
                </li>
                <li><a href="#">Special Services</a>
                    <ul class="drop-down one-column hover-fade">
                        <li><a href="servicesbycategory/16.html">Document Services</a></li>
                        <li><a href="servicesbycategory/15.html">Cars &amp; Bikes</a></li>
                        <li><a href="servicesbycategory/17.html">Movers &amp; Packers </a></li>
                        <li><a href="servicesbycategory/18.html">Home Automation</a></li>
                    </ul>
                </li>


                @if(\Illuminate\Support\Facades\Auth::check())
                    <li>
                        |
                    </li>
                    @if(\Illuminate\Support\Facades\Auth::user()->role =='USR')

                        <li><a href="javascript:void(0);" title="dashboard user">My Account
                                ({{\Illuminate\Support\Facades\Auth::user()->name}})</a>
                            <ul class="drop-down one-column hover-fade">

                                <li><a href="{{route('user.dashboard')}}">Dashboard</a></li>
                                <li class=" logout">
                                    <form class="logout" method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <a class="logout" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();this.closest('form').submit();">
                                            {{ __('Log Out') }}
                                        </a>
                                    </form>
                                </li>
                            </ul>
                        </li>

                    @elseif(\Illuminate\Support\Facades\Auth::user()->role =='ADM')


                        <li><a href="javascript:void(0);" title="dashboard admin">My Account
                                ({{\Illuminate\Support\Facades\Auth::user()->name}})</a>
                            <ul class="drop-down one-column hover-fade">

                                <li><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                                <li class=" logout">
                                    <form class="logout" method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <a class="logout" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();this.closest('form').submit();">
                                            {{ __('Log Out') }}
                                        </a>
                                    </form>
                                </li>
                            </ul>
                        </li>


                    @endif
                @else
                    <li class="login-form"><a href="{{route('register')}}" title="Register">Register</a></li>
                    <li class="login-form"><a href="{{route('login')}}" title="Login">Login</a></li>
                    <li class="search-bar">
                    </li>

                @endif

            </ul>
        </nav>
    </div>


    <div class="container-by-widget-filter">
        <h1></h1>

        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>
        </nav>

        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Sidebar -->

            <div class="sidebar">


                <!-- Sidebar Menu -->
                <nav class="mt-2">


                    <ul class="navbar-nav nav nav-pills nav-sidebar flex-column" id="myDIV" data-widget="treeview"
                        role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
                             with font-awesome or any other icon font library -->


                        <li class="mb-3  mt-4 nav-item menu-open" class="title">
                            <a class="no-hover" href="{{route('home')}}"><img width="220"
                                                                              height="60"
                                                                              src="{{asset('images/logo.png')}}"></a>
                        </li>


                        <li class="nav-item ">
                            <a href="{{route('admin.dashboard')}}" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>


                        <li class="nav-item ">
                            <a href="{{route('admin.category')}}" class="nav-link">
                                <i class="nav-icon fas fa-list-alt"></i>
                                <p>
                                    Category
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{route('admin.serv')}}" class="nav-link">
                                <i class="nav-icon fas fa-th"></i>
                                <p>
                                    Services
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{route('admin.slider')}}" class="nav-link">
                                <i class="nav-icon far fa-image"></i>
                                <p>
                                    Slider
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{route('admin.profile')}}" class="nav-link">
                                <i class="nav-icon far fa-user"></i>
                                <p>
                                    Profile
                                </p>
                            </a>
                        </li>

                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>
        <div class="mr-auto ml-auto">

            {{$slot}}
        </div>

    </div>


    <footer id="footer" class="footer-v1">
        <div class="container">
            <div class="row visible-md visible-lg">
                <div class="col-md-3 col-xs-6 col-sm-6">
                    <h3>APPLIANCE SERVICES </h3>
                    <ul>
                        <li><i class="fa fa-check"></i> <a href="servicesbycategory/12.html">TV</a></li>
                        <li><i class="fa fa-check"></i> <a href="servicesbycategory/14.html">Geyser</a></li>
                        <li><i class="fa fa-check"></i> <a href="servicesbycategory/13.html">Refrigerator</a></li>
                        <li><i class="fa fa-check"></i> <a href="servicesbycategory/21.html">Washing Machine</a>
                        </li>
                        <li><i class="fa fa-check"></i> <a href="servicesbycategory/22.html">Microwave Oven</a></li>
                        <li><i class="fa fa-check"></i> <a href="servicesbycategory/10.html">Water Purifier</a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-xs-6 col-sm-6">
                    <h3>AC SERVICES </h3>
                    <ul>
                        <li><i class="fa fa-check"></i> <a
                                href="service-details/ac-installation.html">Installation</a></li>
                        <li><i class="fa fa-check"></i> <a
                                href="service-details/ac-uninstallation.html">Uninstallation</a></li>
                        <li><i class="fa fa-check"></i> <a href="service-details/ac-repair.html">AC Repair</a></li>
                        <li><i class="fa fa-check"></i> <a href="service-details/ac-gas-refill.html">Gas Refill</a>
                        </li>
                        <li><i class="fa fa-check"></i> <a href="service-details/ac-wet-servicing.html">Wet
                                Servicing</a></li>
                        <li><i class="fa fa-check"></i> <a href="service-details/ac-dry-servicing.html">Dry
                                Servicing </a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-xs-6 col-sm-6">
                    <h3>HOME NEEDS </h3>
                    <ul>
                        <li><i class="fa fa-check"></i> <a href="servicesbycategory/19.html">Laundry </a></li>
                        <li><i class="fa fa-check"></i> <a href="servicesbycategory/4.html">Electrical</a></li>
                        <li><i class="fa fa-check"></i> <a href="servicesbycategory/8.html">Pest Control </a></li>
                        <li><i class="fa fa-check"></i> <a href="servicesbycategory/7.html">Carpentry </a></li>
                        <li><i class="fa fa-check"></i> <a href="servicesbycategory/3.html">Plumbing </a></li>
                        <li><i class="fa fa-check"></i> <a href="servicesbycategory/20.html">Painting </a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-xs-6 col-sm-6">
                    <h3>CONTACT US</h3>
                    <ul class="contact_footer">
                        <li class="location">
                            <i class="fa fa-map-marker"></i> <a href="#"> Faridabad, Haryana, India</a>
                        </li>
                        <li>
                            <i class="fa fa-envelope"></i> <a
                                href="mailto:contact@surfsidemedia.in">contact@surfsidemedia.in</a>
                        </li>
                        <li>
                            <i class="fa fa-headphones"></i> <a href="tel:+911234567890">+91-1234567890</a>
                        </li>
                    </ul>
                    <h3 style="margin-top: 10px">FOLLOW US</h3>
                    <ul class="social">
                        <li class="facebook"><span><i class="fa fa-facebook"></i></span><a href="#"></a></li>
                        <li class="twitter"><span><i class="fa fa-twitter"></i></span><a href="#"></a></li>
                        <li class="github"><span><i class="fa fa-instagram"></i></span><a href="#"></a></li>
                    </ul>
                </div>
            </div>
            <div class="row visible-sm visible-xs">
                <div class="col-md-6">
                    <h3 class="mlist-h">CONTACT US</h3>
                    <ul class="contact_footer mlist">
                        <li class="location">
                            <i class="fa fa-map-marker"></i> <a href="#"> Faridabad, Haryana, India</a>
                        </li>
                        <li>
                            <i class="fa fa-envelope"></i> <a
                                href="mailto:contact@surfsidemedia.in">contact@surfsidemedia.in</a>
                        </li>
                        <li>
                            <i class="fa fa-phone"></i> <a href="tel:+911234567890">+91-1234567890</a>
                        </li>
                    </ul>
                    <ul class="social mlist-h">
                        <li class="facebook"><span><i class="fa fa-facebook"></i></span><a href="#"></a></li>
                        <li class="twitter"><span><i class="fa fa-twitter"></i></span><a href="#"></a></li>
                        <li class="github"><span><i class="fa fa-instagram"></i></span><a href="#"></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-down">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <ul class="nav-footer">
                            <li><a href="about-us.html">About Us</a></li>
                            <li><a href="contact-us.html">Contact Us</a></li>
                            <li><a href="faq.html">FAQ</a></li>
                            <li><a href="terms-of-use.html">Terms of Use</a></li>
                            <li><a href="privacy.html">Privacy</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <p class="text-xs-center crtext">&copy; 2021 SurfsideMedia. All Rights Reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>

<script src="{{asset('dist/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('dist/js/adminlte.js')}}"></script>
<script src="{{asset('dist/js/pages/dashboard3.js')}}"></script>
<script src="{{asset('dist/jquery/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/bootstrap/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/bootstrap/bootstrap-slider.js')}}"></script>
<script>
    jQuery(function ($) {
        var path = window.location.href;
        // because the 'href' property of the DOM element is the absolute path
        $('ul a').each(function () {
            if (this.href === path) {
                $(this).addClass('active');
            }
        });
    });
</script>

@livewireScripts
@stack('scripts')
</body>
</html>
