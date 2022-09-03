@extends('layout.master1')
@section('title')
Wedding-Order || Cakeries
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
                            <h3>Contact us</h3>
                            <hr>
                        </div>
                        <p style="font-size: 19px;font-family: 'Harmattan', sans-serif;text-align:justify;">
                            Congratulations on your upcoming wedding! Send us a message about your wedding cake and get a call from us in no to discuss further on how to make your day special
                        </p>
                        <form class="billing_form row" method="POST" action="{{ url('/user/save-wedding-order') }}">
                            <div class="form-group col-md-12">
                                <label>Fullname *</label>
                                <input type="text" class="form-control" name="name" value="{{ Auth::user()->profile->first()->lname }} {{ Auth::user()->profile->first()->fname }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Email *</label>
                                <input type="email" class="form-control" name="email" value="{{ Auth::user()->email }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Phone *</label>
                                <input type="phone" class="form-control" name="phone" value="{{ Auth::user()->profile->first()->phone }}">
                            </div>
                            <div class="form-group col-md-12">
                                <label>Additional Note *</label>
                                <textarea class="form-control" name="message"></textarea>
                            </div>
                            <div class="form-group col-md-12 text-center">
                                <button type="submit" class="btn colo">Contact us</button>
                            </div>
                            <input type="hidden" name="_token" value="{{ Session::token() }}">
                        </form>
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

@endsection