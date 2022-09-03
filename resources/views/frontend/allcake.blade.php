@extends('layout.master1')
@section('title')
All Cakes || Cakeries
@endsection
@section('content')

<!--================End Main Header Area =================-->
<section class="banner_area p_20">
    <div class="container">
        <div class="banner_text">
            <h3>Shop</h3>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Cakes</a></li>
            </ul>
        </div>
    </div>
</section>
<!--================End Main Header Area =================-->

<!--================Product Area =================-->
<section class="product_area p_100">
    <div class="container">
        <div class="row product_inner_row">
            <div class="col-lg-9">
                <div class="p_w_title">
                    <h3>All Categories</h3>
                </div>
                <div class="row product_item_inner">
                    @foreach($product as $prods)
                    <div class="col-lg-4 col-md-4 col-6">
                        <div class="cake_feature_item">
                            <div class="cake_img">
                                <img src="../upload/{{ $prods->image->first()->source }}" alt="{{ $prods->name }}">
                            </div>
                            <div class="cake_text">
                                <h3>{{ $prods->category->name }}</h3>
                                @if($prods->category_id == 1)
                                <a class="pink_btn" href="{{ url('/cake/wedding-cakes') }}">View all</a>
                                @elseif($prods->category_id == 2)
                                <a class="pink_btn" href="{{ url('/cake/men-cakes') }}">View all</a>
                                @elseif($prods->category_id == 3)
                                <a class="pink_btn" href="{{ url('/cake/specialevent-cakes') }}">View all</a>
                                @elseif($prods->category_id == 4)
                                <a class="pink_btn" href="{{ url('/cake/boy-cakes') }}">View all</a>
                                @elseif($prods->category_id == 5)
                                <a class="pink_btn" href="{{ url('/cake/cupcake') }}">View all</a>
                                @elseif($prods->category_id == 6)
                                <a class="pink_btn" href="{{ url('/cake/girl-cakes') }}">View all</a>
                                @elseif($prods->category_id == 7)
                                <a class="pink_btn" href="{{ url('/cake/lady-cakes') }}">View all</a>
                                @endif
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-3">
                <div class="product_left_sidebar">
                    <aside class="left_sidebar p_catgories_widget">
                        <div class="p_w_title">
                            <h3>Product Categories</h3>
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
<!--================End Product Area =================-->

@endsection