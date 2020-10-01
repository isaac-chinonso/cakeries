@extends('layout.master1')
@section('title')
Single Cake || Cakeries
@endsection
@section('content')

<!--================End Main Header Area =================-->
<section class="banner_area">
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
            <div class="col-lg-6">
                <div class="product_img"><img class="img-fluid" src="assets/img/product/big1.jpg" alt=""></div>
            </div>
            <div class="col-lg-6">
                <div class="product_details_text">
                    <h4>Beautiful Begining</h4>
                    <p>Cake colours, images and layout are for illustration ONLY. All our cakes are hand finished so the final product may vary. In case you want to change the colours then please add remarks during checkout or call the branch after placing the order.</p>
                    <h5>Category : Wedding Cake </h5>
                    <a class="btn btn-default colo" href="{{ url('/user/place-order') }}"><i class="fa fa-globe"></i> Order Now</a>
                    <a class="btn btn-success" href="http://wa.me/2349035820637" target="_blank"><i class="fa fa-whatsapp"> Whatsapp to Order</i> </a>
                    <a class="btn btn-primary" href="tel:+2349035820637"><i class="fa fa-phone"></i> Call to Order</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Product Details Area =================-->

<!--================Similar Product Area =================-->
<section class="similar_product_area p_100">
    <div class="container">
        <div class="main_title">
            <h2>Similar Products</h2>
        </div>
        <div class="row similar_product_inner">
            <div class="col-lg-3 col-md-4 col-6">
                <div class="cake_feature_item">
                    <div class="cake_img">
                        <img src="assets/img/cake-feature/wedding.jpg" alt="">
                    </div>
                    <div class="cake_text">
                        <h4>$29</h4>
                        <h3>Strawberry Cupcakes</h3>
                        <a class="pest_btn" href="#">Add to cart</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6">
                <div class="cake_feature_item">
                    <div class="cake_img">
                        <img src="assets/img/cake-feature/special.jpg" alt="">
                    </div>
                    <div class="cake_text">
                        <h4>$29</h4>
                        <h3>Strawberry Cupcakes</h3>
                        <a class="pest_btn" href="#">Add to cart</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6">
                <div class="cake_feature_item">
                    <div class="cake_img">
                        <img src="assets/img/cake-feature/men.jpg" alt="">
                    </div>
                    <div class="cake_text">
                        <h4>$29</h4>
                        <h3>Strawberry Cupcakes</h3>
                        <a class="pest_btn" href="#">Add to cart</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6">
                <div class="cake_feature_item">
                    <div class="cake_img">
                        <img src="assets/img/cake-feature/boys.jpg" alt="">
                    </div>
                    <div class="cake_text">
                        <h4>$29</h4>
                        <h3>Strawberry Cupcakes</h3>
                        <a class="pest_btn" href="#">Add to cart</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Similar Product Area =================-->

@endsection