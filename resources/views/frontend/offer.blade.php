@extends('layout.master')
@section('title')
About || Cakeries
@endsection
@section('content')

<!--================End Main Header Area =================-->
<section class="banner_area p_20">
    <div class="container">
        <div class="banner_text">
            <h3>Special Offers</h3>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Offers</a></li>
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
                                <h4><span style="color: red;">Special Offer</span> for Limited Period Only</h4>
                            </div><br>
                            <p style="font-size: 22px;text-align: justify;font-family: 'Harmattan', sans-serif;">
                                Currently there are no offers running, However keep and eye out on our website for future offers.
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
                            <li><a href="#">Wedding Cakes<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                            <li><a href="#">Men's Cake<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                            <li><a href="#">Special Event Cakes<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                            <li><a href="#">Boy's Cake<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                            <li><a href="#">Cupcakes<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                            <li><a href="#">Girls Cake<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                            <li><a href="#">Ladies Cake<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                        </ul>
                    </aside>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End about Main Area =================-->

@endsection