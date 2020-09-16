@extends('layout.master')
@section('title')
Register || Cakeries
@endsection
@section('content')

<section class="product_area p_100 billing_details_area">
    <div class="container">
        <div class="return_option">
            <h4>Returning customer? <a href="{{ url('/signin') }}">Click here to login</a></h4>
        </div>
        <div class="row product_inner_row">
            <div class="col-lg-9">
                <div class="order_box_price">
                    <div class="payment_list">
                        <div class="p_w_title">
                            <h3>Personal Registration</h3>
                            <hr>
                        </div>
                        <form class="billing_form row" method="POST">
                            <div class="form-group col-md-6">
                                <label>First Name *</label>
                                <input type="text" class="form-control" name="fname" placeholder="Enter First Name">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Last Name *</label>
                                <input type="text" class="form-control" name="lname" placeholder="Enter Last Name">
                            </div>
                            <div class="form-group col-md-12">
                                <label>Email</label>
                                <input type="email" class="form-control" name="email" placeholder="Enter Email">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Password *</label>
                                <input type="password" class="form-control" name="password" placeholder="Enter password">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Confirm Password *</label>
                                <input type="password" class="form-control" name="cpassword" placeholder="Confirm Password">
                            </div>
                            <div class="form-group col-md-12 text-center">
                                <button class="btn colo">Register now</button>
                            </div>
                        </form>
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