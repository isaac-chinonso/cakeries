@extends('layout.master1')
@section('title')
ladies || Cakeries
@endsection
@section('content')

<!--================End Main Header Area =================-->
<section class="banner_area">
    <div class="container">
        <div class="banner_text">
            <h3>Ladies</h3>
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
                    <h3> Ladies Cake</h3>
                </div>
                <div class="row product_item_inner">
                    @foreach($productcat as $prodcat)
                    <div class="col-lg-4 col-md-4 col-6">
                        <div class="cake_feature_item">
                            <div class="cake_img">
                                <img src="../upload/{{ $prodcat->image->first()->source }}" alt="">
                            </div>
                            <div class="cake_text">
<<<<<<< HEAD
                                <h3 style="font-size: 16px;font-weight:bolder;text-transform:capitalize">{{ $prodcat->name }}</h3>
=======
                                <h3 style="font-size: 16px;font-weight:bolder;">{{ $prodcat->name }}</h3>
>>>>>>> 77078cc7ac9e761d2a0be84f29240d41d2685202
                                <a class="pink_btn" href="{{ route('productdetails',$prodcat->slug) }}">View Product</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
<<<<<<< HEAD
                </div><br>
                <div class="row"> 
                    <div class="col-md-5"></div>
                    <div class="col-md-3">{{ $productcat->links() }}</div>
                    <div class="col-md-4"></div>
=======
>>>>>>> 77078cc7ac9e761d2a0be84f29240d41d2685202
                </div>
            </div>
            <div class="col-lg-3">
                <div class="product_left_sidebar">
                    <aside class="left_sidebar p_catgories_widget">
                        <div class="p_w_title">
                            <h3>Product Categories</h3>
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
                            <li><a href="#">Wedding Cakes (9)</a></li>
                            <li><a href="#">Men Cakes (31)</a></li>
                            <li><a href="#">Special Event Cake (42)</a></li>
                            <li><a href="#">cupcake/s Cakes (8)</a></li>
                            <li><a href="#">Cupcakes (11)</a></li>
                            <li><a href="#">Girls Cakes (8)</a></li>
                            <li><a href="#">Ladies Cakes (8)</a></li>
>>>>>>> 77078cc7ac9e761d2a0be84f29240d41d2685202
                        </ul>
                    </aside>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Product Area =================-->

@endsection