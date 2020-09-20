<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="Cakeries - egg and egg-less cakes | Cake Bakery " />
    <meta name="description" content="We specialise in egg and egg-less cakes. Be it a cake for a wedding, birthday, anniversary or any special occasion. We create all types of delicious cakes including: fresh cream cakes, butter cream cakes, icing cakes and chocolate cakes." />
    <meta name="author" content="Dcode Arena" />

    <link rel="icon" href="img/fav-icon.png" type="image/x-icon" />
    <title>@yield('title')</title>


    <!-- Icon css link -->
    <link href="../assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="../assets/vendors/linearicons/style.css" rel="stylesheet">
    <link href="../assets/vendors/flat-icon/flaticon.css" rel="stylesheet">
    <link href="../assets/vendors/stroke-icon/style.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Rev slider css -->
    <link href="../assets/vendors/revolution/css/settings.css" rel="stylesheet">
    <link href="../assets/vendors/revolution/css/layers.css" rel="stylesheet">
    <link href="../assets/vendors/revolution/css/navigation.css" rel="stylesheet">
    <link href="../assets/vendors/animate-css/animate.css" rel="stylesheet">

    <!-- Extra plugin css -->
    <link href="../assets/vendors/owl-carousel/owl.carousel.min.css" rel="stylesheet">
    <link href="../assets/vendors/magnifc-popup/magnific-popup.css" rel="stylesheet">
    <link href="../assets/vendors/jquery-ui/jquery-ui.min.css" rel="stylesheet">
    <link href="../assets/vendors/nice-select/css/nice-select.css" rel="stylesheet">

    <link href="../assets/css/style.css" rel="stylesheet">
    <link href="../assets/css/responsive.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Harmattan&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Alata&display=swap" rel="stylesheet">
</head>

<body>

    <!--================Main Header Area =================-->
    <header class="main_header_area five_header">
        <div class="top_header_area row m0">
            <div class="container">
                <div class="float-left">
                    <a href="#">Sweet Treats for every occassion
                        <a href="tell:+2348037126346"><i class="fa fa-phone" aria-hidden="true"></i> 07956798250</a>
                        <a href="mainto:enquiries@cakeries.co.uk"><i class="fa fa-envelope-o" aria-hidden="true"></i> enquiries@cakeries.co.uk</a>
                </div>
                <div class="float-right">
                    @if(!Auth::check())
                    <ul class="h_social list_style">
                        <li><a href="{{ url('/signin') }}">Sign in / Register</a></li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                    @else
                    <ul class="h_social1 list_style">
                        <li class="dropdown">
                            <a class="dropdown-toggle" href="#" data-toggle="dropdown" id="dropdownMenuLink" aria-haspopup="true" aria-expanded="false" style="color: #fff;">My Account</a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <a href="#" class="dropdown-item" style="color: #7b7b7b;">Manage Account</a>
                                <a href="#" class="dropdown-item" style="color: #7b7b7b;">My Order</a>
                                <a href="#" class="dropdown-item" style="color: #7b7b7b;">Change Password</a>
                                <a href="{{ route('logout') }}" class="dropdown-item" style="color: #7b7b7b;">Sign out</a>
                            </div>
                        </li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                    @endif
                </div>
            </div>
        </div>
        <div class="main_menu_two">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <a class="navbar-brand" href="#"><img src="../assets/img/logo.png" alt=""></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="my_toggle_menu">
                            <span></span>
                            <span></span>
                            <span></span>
                        </span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav justify-content-end">
                            <li class="{{ request()->is('/*') ? 'active' : '' }}">
                                <a href="{{ url('/') }}">Home</a>
                            </li>
                            <li class="{{ request()->is('about*') ? 'active' : '' }}"><a href="{{ url('/about') }}">About</a></li>
                            <li class="dropdown submenu {{ request()->is('cake/allcakes*') ? 'active' : '' }} {{ request()->is('cake/wedding*') ? 'active' : '' }} {{ request()->is('cake/men*') ? 'active' : '' }} {{ request()->is('cake/specialevent*') ? 'active' : '' }} {{ request()->is('cake/boy*') ? 'active' : '' }} {{ request()->is('cake/cupcake*') ? 'active' : '' }} {{ request()->is('cake/girl*') ? 'active' : '' }} {{ request()->is('cake/lady*') ? 'active' : '' }}">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Our Cakes</a>
                                <ul class="dropdown-menu">
                                    <li><a href="{{ url('/cake/wedding') }}">Wedding Cakes</a></li>
                                    <li><a href="{{ url('/cake/men') }}">Men's Cake</a></li>
                                    <li><a href="{{ url('/cake/specialevent') }}">Special Event Cakes</a></li>
                                    <li><a href="{{ url('/cake/boy') }}">Boy's Cakes</a></li>
                                    <li><a href="{{ url('/cake/cupcake') }}">Cupcakes</a></li>
                                    <li><a href="{{ url('/cake/girl') }}">Girl's Cakes</a></li>
                                    <li><a href="{{ url('/cake/lady') }}">Ladies Cake</a></li>
                                    <li><a href="{{ url('/cake/allcakes') }}">View all</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Flavour</a></li>
                            <li class="{{ request()->is('testimonials*') ? 'active' : '' }}"><a href="{{ url('/testimonials') }}">Testimonials</a></li>
                            <li class="{{ request()->is('contact*') ? 'active' : '' }}"><a href="{{ url('/contact') }}">Contact Us</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!--================End Main Header Area =================-->
    @yield('content')
    <!--================Footer Area =================-->
    <footer class="footer_area">
        <div class="footer_widgets">
            <div class="container">
                <div class="row footer_wd_inner">
                    <div class="col-lg-3 col-6">
                        <aside class="f_widget f_about_widget">
                            <div class="f_title">
                                <h3>Cakeries</h3>
                            </div>
                            <p>Our cakes are designed and tailored to suit our customer’s individual requirements.</p>
                            <ul class="nav">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            </ul>
                        </aside>
                    </div>
                    <div class="col-lg-3 col-6">
                        <aside class="f_widget f_link_widget">
                            <div class="f_title">
                                <h3>Quick links</h3>
                            </div>
                            <ul class="list_style">
                                <li><a href="#">Who we are</a></li>
                                <li><a href="#">Our Cakes</a></li>
                                <li><a href="#">News</a></li>
                                <li><a href="#">Offers</a></li>
                            </ul>
                        </aside>
                    </div>
                    <div class="col-lg-3 col-6">
                        <aside class="f_widget f_link_widget">
                            <div class="f_title">
                                <h3>Help</h3>
                            </div>
                            <ul class="list_style">
                                <li><a href="#">Terms & Condition</a></li>
                                <li><a href="#">FAQ</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </aside>
                    </div>
                    <div class="col-lg-3 col-6">
                        <aside class="f_widget f_contact_widget">
                            <div class="f_title">
                                <h3>Contact Info</h3>
                            </div>
                            <h4>07956798250</h4>
                            <p>Bowling Green Row Greenwich London</p>
                            <h5>enquiries@cakeries.co.uk</h5>
                            <h5>booking@cakeries.co.uk</h5>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer_copyright">
            <div class="container">
                <div class="copyright_inner">
                    <div class="float-left">
                        <h5>© Copyright Cakeries 2020. All right reserved. Developed With <i class="fa fa-heart" style="color: #E9212E;"></i> By <a href="https://dcodearena.com">Dcode Arena.</a></h5>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--================End Footer Area =================-->

    <!--================Search Box Area =================-->
    <div class="search_area zoom-anim-dialog mfp-hide" id="test-search">
        <div class="search_box_inner">
            <h3>Search</h3>
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search for...">
                <span class="input-group-btn">
                    <button class="btn btn-default" type="button"><i class="icon icon-Search"></i></button>
                </span>
            </div>
        </div>
    </div>
    <!--================End Search Box Area =================-->


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="../assets/js/jquery-3.2.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <!-- Rev slider js -->
    <script src="../assets/vendors/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script src="../assets/vendors/revolution/js/jquery.themepunch.revolution.min.js"></script>
    <script src="../assets/vendors/revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script src="../assets/vendors/revolution/js/extensions/revolution.extension.video.min.js"></script>
    <script src="../assets/vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="../assets/vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="../assets/vendors/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <!-- Extra plugin js -->
    <script src="../assets/vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="../assets/vendors/magnifc-popup/jquery.magnific-popup.min.js"></script>
    <script src="../assets/vendors/isotope/imagesloaded.pkgd.min.js"></script>
    <script src="../assets/vendors/isotope/isotope.pkgd.min.js"></script>
    <script src="../assets/vendors/datetime-picker/js/moment.min.js"></script>
    <script src="../assets/vendors/datetime-picker/js/bootstrap-datetimepicker.min.js"></script>
    <script src="../assets/vendors/nice-select/js/jquery.nice-select.min.js"></script>
    <script src="../assets/vendors/jquery-ui/jquery-ui.min.js"></script>
    <script src="../assets/vendors/lightbox/simpleLightbox.min.js"></script>

    <script src="../assets/js/theme.js"></script>
</body>

</html>