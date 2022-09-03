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
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Flavour Main Area =================-->

@endsection