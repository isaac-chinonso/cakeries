@extends('layout.master1')
@section('title')
Special Events || Cakeries
@endsection
@section('content')

<!--================End Main Header Area =================-->
<section class="banner_area">
    <div class="container">
        <div class="banner_text">
            <h3>Special Events</h3>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">All Cakes</a></li>
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
                    <small>Shop by Occassion</small><br>
                    <h3> Special Event Cakes</h3>
                </div>
                <div class="row product_item_inner">
                    @foreach($productcat as $prodcat)
                    <div class="col-lg-4 col-md-4 col-6">
                        <div class="cake_feature_item">
                            <div class="cake_img">
                                <img src="../upload/{{ $prodcat->image->first()->source }}" alt="">
                            </div>
                            <div class="cake_text">
                                <h3 style="font-size: 16px;font-weight:bolder;">{{ $prodcat->name }}</h3>
                                <a class="pink_btn" href="{{ route('productdetails',$prodcat->slug) }}">View Product</a>
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
                            <li><a href="#">Wedding Cakes (9)</a></li>
                            <li><a href="#">Men Cakes (31)</a></li>
                            <li><a href="#">Special Event Cake (42)</a></li>
                            <li><a href="#">Boys Cakes (8)</a></li>
                            <li><a href="#">Cupcakes (11)</a></li>
                            <li><a href="#">Girls Cakes (8)</a></li>
                            <li><a href="#">Ladies Cakes (8)</a></li>
                        </ul>
                    </aside>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Product Area =================-->

@endsection