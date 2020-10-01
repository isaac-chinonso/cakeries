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
                            <h3>Order Details</h3>
                            <hr>
                        </div>
                        <form class="billing_form row" method="POST" action="{{ url('/user/save-order') }}">
                            <div class="form-group col-md-6">
                                <label>Occasion *</label>
                                <select class="form-control" name="occasion">
                                    <option selected disabled>Select Occasion</option>
                                    <option value="Wedding">Wedding</option>
                                    <option value="Birthday">Birthday</option>
                                    <option value="Anniversary">Anniversary</option>
                                    <option value="Others">Others</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label>If others Specify </label>
                                <input type="text" class="form-control" name="others" value="{{ Request::old('others')}}">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Size *</label>
                                <select class="form-control" name="size">
                                    <option selected disabled>Select Cake Size</option>
                                    <option value="8 (10-15 portion)">8" (10-15 portion)</option>
                                    <option value="10 (15-20 portion)">10" (15-20 portion)</option>
                                    <option value="12 (20-30 portion)">12" (20-30 portion)</option>
                                    <option value="14 (30-40 portion)">14" (30-40 portion)</option>
                                    <option value="16 (50-60 portion)">16" (50-60 portion)</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Color</label>
                                <input type="text" class="form-control" name="color" placeholder="Please Enter Cake Color" value="{{ Request::old('color')}}">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Collection Date *</label>
                                <input type="date" class="form-control" name="collection_date" value="{{ Request::old('collection_date')}}">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Collection Type *</label>
                                <select class="form-control" name="collection_type">
                                    <option selected disabled>Select Collection Type</option>
                                    <option value="Delivery">Delivery</option>
                                    <option value="Pick up">Pickup</option>
                                </select>
                            </div>
                            <div class="form-group col-md-12">
                                <label>Additional Note </label>
                                <textarea class="form-control" name="comment" placeholder="kindly specify additional information if available">{{ Request::old('comment')}}</textarea>
                            </div>
                            <div class="form-group col-md-12 text-center">
                                <button type="submit" class="btn colo">Place Order</button>
                            </div>
                            @foreach($products->items as $product)
                            <input type="hidden" name="product_id[]" value="{{ $product['item']['id'] }}">
                            @endforeach
                            <input type="hidden" name="_token" value="{{ Session::token() }}">
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="order_box_price">
                    <div class="payment_list">
                        <div class="right_sidebar_area">
                            <aside class="r_widget recent_widget">
                                <div class="r_title">
                                    <h3>Your Order</h3>
                                    <hr>
                                </div>
                                <div class="recent_w_inner">
                                    @if (request()->session()->has('cart'))
                                    @foreach($products->items as $product)
                                    <div class="media">
                                        <div class="d-flex">
                                            <img class="img-thumbnail" src="../upload/{{ $product['item']['image']->first()->source  }}" alt="" width="70px" height="60px">
                                        </div>
                                        <div class="media-body">
                                            <a href="#">
                                                <h4>{{ $product['item']['name'] }}</h4>
                                            </a>
                                            <a href="#">
                                                <p>{{ $product['item']['category']['name'] }}</p>
                                            </a>
                                        </div>
                                    </div>
                                    @endforeach
                                    @endif
                                </div>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection