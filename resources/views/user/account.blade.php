@extends('layout.master1')
@section('title')
Manage Account || Cakeries
@endsection
@section('content')

<section class="product_area p_100 billing_details_area">
    <div class="container">
        <div class="return_option">
            @if (date("H") < 12) <h1 style="font-size: 20px;">Good morning <img src="../assets/img/morning1.png">, {{ Auth::user()->profile->first()->fname }}</h1>
                @elseif (date("H") >= 12 && date("H") < 16) <h1 style="font-size: 20px;">Good afternoon <img src="../assets/img/afternoon.png">, {{ Auth::user()->profile->first()->fname }}</h1>
                    @elseif (date("H") >= 15)</h1>
                    <h1 style="font-size: 20px;">Good evening <img src="../assets/img/evening.png">, {{ Auth::user()->profile->first()->fname }}</h1>
                    @endif
        </div>
        @include('include.success')
        @include('include.warning')
        @include('include.error')
        <div class="row product_inner_row">
            <div class="col-lg-9">
                <div class="order_box_price">
                    <div class="payment_list">
                        <div class="p_w_title">
                            <h3>Manage Account</h3>
                            <hr>
                        </div>
                        <form class="billing_form row" method="POST" action="{{ url('/user/update-profile') }}">
                            <div class="form-group col-md-6">
                                <label>First Name *</label>
                                <input type="text" class="form-control" name="fname" value="{{ Auth::user()->profile->first()->fname }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Last Name *</label>
                                <input type="text" class="form-control" name="lname" value="{{ Auth::user()->profile->first()->lname }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Email *</label>
                                <input type="email" class="form-control" name="email" value="{{ Auth::user()->email }}" disabled>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Phone Number *</label>
                                <input type="phone" class="form-control" name="phone" value="{{ Auth::user()->profile->first()->phone }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label>City *</label>
                                <input type="text" class="form-control" name="city" value="{{ Auth::user()->profile->first()->city }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Country *</label>
                                <input type="text" class="form-control" name="country" value="{{ Auth::user()->profile->first()->country }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Postcode *</label>
                                <input type="text" class="form-control" name="postcode" value="{{ Auth::user()->profile->first()->postcode }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Fax (optional)</label>
                                <input type="text" class="form-control" name="fax" value="{{ Auth::user()->profile->first()->fax }}">
                            </div>
                            <div class="form-group col-md-12">
                                <label>Address *</label>
                                <textarea class="form-control" name="street" placeholder="Enter Street Address">{{ Auth::user()->profile->first()->street }}</textarea>
                            </div>
                            <div class="form-group col-md-12 text-center">
                                <button type="submit" class="btn colo">Update Account</button>
                            </div>
                            <input type="hidden" name="_token" value="{{ Session::token() }}">
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