@extends('layout.master1')
@section('title')
Single Cake || Cakeries
@endsection
@section('content')

<!--================End Main Header Area =================-->
<section class="banner_area p_20">
    <div class="container">
        <div class="banner_text">
            <h3>Cake Details</h3>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Cakes</a></li>
            </ul>
        </div>
    </div>
</section>
<!--================End Main Header Area =================-->
<!--================Product Details Area =================-->
<section class="product_details_area p_100">
    <div class="container">
        <div class="row product_d_price">
            <div class="col-lg-5">
                <div class="">
                    <img class="img-thumbnail product_img" src="../upload/{{ $proddetail->image->first()->source }}" alt="">
                </div>
            </div>
            <div class="col-lg-7">
                <div class="product_details_text">
                    <h4>{{ $proddetail->name }}</h4>
                    <p style="font-size: 14px;">
                        {{ $proddetail->description }}<br>
                        <span style="color: red;">Note: </span>
                        Cake colours, images and layout are for illustration ONLY. All our cakes are hand finished so the final product may vary. In case you want to change the colours then please add remarks during checkout or call us after placing the order.
                    </p>
                    <h5>Category : {{ $proddetail->category->name }} </h5>
<<<<<<< HEAD
                    @if ($proddetail->category_id != 1)
                    <a class="btn btn-default btn-block colo" href="{{ route('addtocart',$proddetail->id) }}"><i class="fa fa-shopping-cart"></i> Add to Basket</a>
                    @elseif(($proddetail->category_id == 1))
                    <a class="btn btn-default btn-block colo" href="{{ url('/user/wedding-order') }}"><i class="fa fa-envelope-o"></i> Contact us</a>
                    @endif
=======
                    <a class="btn btn-default btn-block colo" href="{{ route('addtocart',$proddetail->id) }}"><i class="fa fa-shopping-cart"></i> Add to Basket</a>
>>>>>>> 77078cc7ac9e761d2a0be84f29240d41d2685202
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Product Details Area =================-->

<!--================Similar Product Area =================-->
<<<<<<< HEAD
<section class="welcome_bakery_area">
    <div class="container">
        <div class="cake_feature_inner">
            <div class="main_title">
                <h2>Similar Products</h2>
            </div>
            <div class="cake_feature_slider owl-carousel">
                @foreach($similarprod as $simprod)
                <div class="item">
                    <div class="cake_feature_item">
                        <div class="cake_img">
                            <img src="../upload/{{ $simprod->image->first()->source }}" alt="">
                        </div>
                        <div class="cake_text">
                            <h3 style="font-size: 16px;font-weight:bolder;">{{ $simprod->name }}</h3>
                            <a class="pest_btn" href="{{ route('productdetails',$simprod->slug) }}">View Cake</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
=======
<section class="similar_product_area p_100">
    <div class="container">
        <div class="main_title">
            <h2>Similar Products</h2>
        </div>
        <div class="row similar_product_inner">
            @foreach($similarprod as $simprod)
            <div class="col-lg-3 col-md-4 col-6">
                <div class="cake_feature_item">
                    <div class="cake_img">
                        <img src="../upload/{{ $simprod->image->first()->source }}" alt="">
                    </div>
                    <div class="cake_text">
                        <h3 style="font-size: 16px;font-weight:bolder;">{{ $simprod->name }}</h3>
                        <a class="pest_btn" href="#">View Cake</a>
                    </div>
                </div>
            </div>
            @endforeach
>>>>>>> 77078cc7ac9e761d2a0be84f29240d41d2685202
        </div>
    </div>
</section>
<!--================End Similar Product Area =================-->

@endsection