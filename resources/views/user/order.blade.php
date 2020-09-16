@extends('layout.master')
@section('title')
Manage Account || Cakeries
@endsection
@section('content')

<section class="product_area p_100 billing_details_area">
    <div class="container">
        <div class="return_option">
            @if (date("H") < 12) <h1 style="font-size: 20px;">Good morning <img src="assets/img/morning1.png">, Chinonso</h1>
                @elseif (date("H") >= 12 && date("H") < 16) <h1 style="font-size: 20px;">Good afternoon <img src="assets/img/afternoon.png">, Chinonso</h1>
                    @elseif (date("H") >= 15)</h1>
                    <h1 style="font-size: 20px;">Good evening <img src="assets/img/evening.png">, Chinonso</h1>
                    @endif
        </div>
        <div class="row product_inner_row">
            <div class="col-lg-9">
                <div class="order_box_price">
                    <div class="payment_list">
                        <div class="p_w_title">
                            <h3>My Orders</h3>
                            <hr>
                        </div>
                        <div class="alert alert-danger" role="alert">
                            No records found, Make new order now
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="product_left_sidebar">
                    <aside class="left_sidebar p_catgories_widget">
                        <ul class="list-group">
                            <li class="list-group-item colo">
                                <h5>Product Categories</h5>
                            </li>
                            <li class="list-group-item">Wedding Cakes <span class="badge badge-pill float-right colo">19</span></li>
                            <li class="list-group-item">Men Cakes <span class="badge badge-pill float-right colo">31</span></li>
                            <li class="list-group-item">Special Event Cake <span class="badge badge-pill float-right colo">42</span></li>
                            <li class="list-group-item">Boys Cakes <span class="badge badge-pill float-right colo">18</span></li>
                            <li class="list-group-item">Cupcakes <span class="badge badge-pill float-right colo">11</span></li>
                            <li class="list-group-item">Girls Cakes <span class="badge badge-pill float-right colo">18</span></li>
                            <li class="list-group-item">Ladies Cakes <span class="badge badge-pill float-right colo">18</span></li>
                        </ul>
                    </aside>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection