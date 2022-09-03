@extends('layout.master')
@section('title')
About || Cakeries
@endsection
@section('content')

<!--================End Main Header Area =================-->
<section class="banner_area p_20">
    <div class="container">
        <div class="banner_text">
            <h3>About us</h3>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
            </ul>
        </div>
    </div>
</section>
<!--================End Main Header Area =================-->

<!--================about Main Area =================-->
<section class="main_blog_area p_100">
    <div class="container">
        <div class="row blog_area_inner">
            <div class="col-lg-9">
                <div class="main_blog_inner single_blog_inner">
                    <div class="blog_item">
                        <div class="blog_text">
                            <div class="blog_time">
                                <h4>About our Cakes</h4>
                            </div><br>
                            <p style="font-size: 20px;text-align: justify;line-height:30px;font-family: 'Harmattan', sans-serif;">
                                Every party deserves a really delicious cake. <br>
                                Wedding cake, birthday cake or any celebration cake is baked fresh shortly before your event. We use only the finest ingredients. Our cakes are designed and tailored to suit our customer’s individual requirements.<br>
                                We hope your enjoy browsing through our unique and bespoke range of birthdays, weddings and celebration cakes and that you will make the best decision to allow us to be part of your plans.<br>
                                If you have any questions please contact us.
                            </p>
                            <h3 class="cm_title_br">About your Cakes</h3>
                            <p style="font-size: 20px;text-align: justify;font-family: 'Harmattan', sans-serif;">
                                Cakes are fragile, handle with care at all times. Your cake comes in flavour and filling required. They are hand decorated and crafted individually to your special requirements.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="right_sidebar_area">
                    <aside class="r_widget categories_widget">
                        <div class="r_title">
                            <h3>Shop by Occasion</h3>
                        </div>
                        <ul class="list_style">
<<<<<<< HEAD
                            <li><a href="{{ url('/cake/wedding-cakes') }}">Wedding Cakes<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                            <li><a href="{{ url('/cake/men-cakes') }}">Men's Cake<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                            <li><a href="{{ url('/cake/specialevent-cakes') }}">Special Event Cakes<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                            <li><a href="{{ url('/cake/boy-cakes') }}">Boy's Cakes<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                            <li><a href="{{ url('/cake/cupcake') }}">Cupcakes<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                            <li><a href="{{ url('/cake/girl-cakes') }}">Girl's Cakes<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                            <li><a href="{{ url('/cake/lady-cakes') }}">Ladies Cake<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
=======
                            <li><a href="#">Wedding Cakes<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                            <li><a href="#">Men's Cake<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                            <li><a href="#">Special Event Cakes<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                            <li><a href="#">Boy's Cake<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                            <li><a href="#">Cupcakes<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                            <li><a href="#">Girls Cake<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                            <li><a href="#">Ladies Cake<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
>>>>>>> 77078cc7ac9e761d2a0be84f29240d41d2685202
                        </ul>
                    </aside>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End about Main Area =================-->

@endsection