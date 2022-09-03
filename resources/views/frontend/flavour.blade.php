@extends('layout.master')
@section('title')
Flavour and Fillings || Cakeries
@endsection
@section('content')

<!--================End Main Header Area =================-->
<section class="banner_area p_20">
    <div class="container">
        <div class="banner_text">
            <h3>Cake Flavours and Fillings </h3>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Flavours</a></li>
            </ul>
        </div>
    </div>
</section>
<!--================End Main Header Area =================-->
<<<<<<< HEAD
<!--================Flavour Main Area =================-->
<section class="main_blog_area p_100">
    <div class="container">
        <div class="row blog_area_inner">
            <div class="col-lg-9">
                <div class="main_blog_inner single_blog_inner">
                    <div class="blog_item">
                        <div class="blog_text">
                            <div class="blog_time">
                                <h4>Cake Flavour and Fillings</h4>
                            </div><br>
                            <div class="row">
                                <div class="col-md-6">
                                    <h5 class="cm_title_br"><strong>Flavours</strong></h5>
                                    <ul style="font-size: 20px;text-align: justify;line-height:30px;font-family: 'Harmattan', sans-serif;">
                                        <li>Vanilla Cream Sponge </li>
                                        <li>Red Velvet</li>
                                        <li>Chocolate and Vanilla Marble </li>
                                        <li>Light Fruit Cake</li>
                                        <li>Lemon Cake </li>
                                        <li>Rich Fruit Cake </li>
                                        <li>Coconut Cake </li>
                                        <li>Luxury Chocolate Madeira Cake </li>
                                        <li>Carrot Cake </li>
                                        <li>Madeira Cake </li>
                                        <li>Strawberry Cake </li>
                                        <li>Chocolate Orange Cake</li>
                                        <li>White Chocolate Mud Cake </li>
                                        <li>Lime and Coconut Cake </li>
                                        <li>Lemon Cake</li>
                                        <li>Your Preferred Flavour </li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <h5 class="cm_title_br"><strong>Fillings</strong></h5>
                                    <ul style="font-size: 20px;text-align: justify;line-height:30px;font-family: 'Harmattan', sans-serif;">
                                        <li>Apricot Jam Filling </li>
                                        <li>Vanilla Buttercream</li>
                                        <li>White Chocolate Cream Cheese Frosting </li>
                                        <li>White Chocolate Buttercream</li>
                                        <li>Strawberry Jam Filling </li>
                                        <li>Cream Cheese Frosting </li>
                                        <li>Chocolate Buttercream</li>
                                        <li>Lime and Coconut Frosting </li>
                                        <li>Your Preffered Fillings</li>
                                    </ul>
                                </div>
                            </div>

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
                            <li><a href="{{ url('/cake/wedding-cakes') }}">Wedding Cakes<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                            <li><a href="{{ url('/cake/men-cakes') }}">Men's Cake<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                            <li><a href="{{ url('/cake/specialevent-cakes') }}">Special Event Cakes<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                            <li><a href="{{ url('/cake/boy-cakes') }}">Boy's Cakes<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                            <li><a href="{{ url('/cake/cupcake') }}">Cupcakes<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                            <li><a href="{{ url('/cake/girl-cakes') }}">Girl's Cakes<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                            <li><a href="{{ url('/cake/lady-cakes') }}">Ladies Cake<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                        </ul>
                    </aside>
=======
<!--================Special Area =================-->
<section class="special_area p_100">
    <div class="container">
        <div class="special_item_inner">
            <div class="specail_item">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="s_item_left">
                            <div class="main_title">
                                <h2>Your Preferred Flavour </h2>
                            </div>
                            <ul class="list_style">
                                <li><a href="#">Vanilla Cream Sponge </a></li>
                                <li><a href="#">Red Velvet</a></li>
                                <li><a href="#">Chocolate and Vanilla Marble </a></li>
                                <li><a href="#">Light Fruit Cake</a></li>
                                <li><a href="#">Lemon Cake </a></li>
                                <li><a href="#">Rich Fruit Cake </a></li>
                                <li><a href="#">Coconut Cake </a></li>
                                <li><a href="#">Luxury Chocolate Madeira Cake </a></li>
                                <li><a href="#">Carrot Cake </a></li>
                                <li><a href="#">Madeira Cake </a></li>
                                <li><a href="#">Strawberry Cake </a></li>
                                <li><a href="#">Chocolate Orange Cake </a></li>
                                <li><a href="#">White Chocolate Mud Cake </a></li>
                                <li><a href="#">Lime and Coconut Cake </a></li>
                                <li><a href="#">Lemon Cake </a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                    <div class="s_item_left">
                            <div class="main_title">
                                <h2>Your Preferred Filling </h2>
                            </div>
                            <ul class="list_style">
                                <li><a href="#">Apricot Jam Filling  </a></li>
                                <li><a href="#">Vanilla Buttercream </a></li>
                                <li><a href="#">White Chocolate Cream Cheese Frosting </a></li>
                                <li><a href="#">White Chocolate Buttercream</a></li>
                                <li><a href="#">Strawberry Jam Filling </a></li>
                                <li><a href="#">Cream Cheese Frosting </a></li>
                                <li><a href="#">Chocolate Buttercream  </a></li>
                                <li><a href="#">Lime and Coconut Frosting </a></li>
                            </ul>
                        </div>
                    </div>
>>>>>>> 77078cc7ac9e761d2a0be84f29240d41d2685202
                </div>
            </div>
        </div>
    </div>
</section>
<<<<<<< HEAD
<!--================End Flavour Main Area =================-->
=======
<!--================End Special Area =================-->
>>>>>>> 77078cc7ac9e761d2a0be84f29240d41d2685202

@endsection