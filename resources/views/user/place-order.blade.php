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
                            <h3>Order Form</h3>
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
                                    <option value="other">Others</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label>If others Specify </label>
                                <input type="text" class="form-control" name="other_occasion" value="{{ Request::old('other_occasion')}}">
                            </div>
                            @foreach($products->items as $product)
                            @if ($product['item']['category_id'] == 5)
                            <div class="form-group col-md-6">
                                <label>Size *</label>
                                <select class="form-control" name="size">
                                    <option selected disabled>Select Cupcake Size</option>
                                    <option value="6 Cupcakes">6 Cupcakes</option>
                                    <option value="12 Cupcakes">12 Cupcakes</option>
                                    <option value="24 Cupcakes">24 Cupcakes</option>
                                    <option value="other">Others</option>
                                </select>
                            </div>
                            @elseif ($product['item']['category_id'] !== 5)
                            <div class="form-group col-md-6">
                                <label>Size *</label>
                                <select class="form-control" name="size">
                                    <option selected disabled>Select Cake Size</option>
                                    <option value="6">6</option>
                                    <option value="8">8</option>
                                    <option value="10">10</option>
                                    <option value="12">12</option>
                                    <option value="other">Others</option>
                                </select>
                            </div>
                            @endif
                            @endforeach
                            <div class="form-group col-md-6">
                                <label>If others Specify </label>
                                <input type="text" class="form-control" name="other_size" value="{{ Request::old('other_size')}}">
                            </div>
                            <div class="form-group col-md-12">
                                <label>Color</label>
                                <input type="text" class="form-control" name="color" placeholder="Please Enter Cake Color" value="{{ Request::old('color')}}">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Flavour *</label>
                                <select class="form-control" name="flavour">
                                    <option selected disabled>Select Cake Flavour </option>
                                    <option value="Vanilla Cream Sponge">Vanilla Cream Sponge</option>
                                    <option value="Red Velvet">Red Velvet</option>
                                    <option value="Chocolate and Vanilla Marble">Chocolate and Vanilla Marble</option>
                                    <option value="Light Fruit Cake">Light Fruit Cake</option>
                                    <option value="Lemon Cake">Lemon Cake</option>
                                    <option value="Rich Fruit Cake">Rich Fruit Cake</option>
                                    <option value="Coconut Cake">Coconut Cake</option>
                                    <option value="Luxury Chocolate Madeira Cake">Luxury Chocolate Madeira Cake</option>
                                    <option value="Carrot Cake">Carrot Cake</option>
                                    <option value="Madeira Cake">Madeira Cake</option>
                                    <option value="Strawberry Cake">Strawberry Cake</option>
                                    <option value="Chocolate Orange Cake">Chocolate Orange Cake</option>
                                    <option value="White Chocolate Mud Cake">White Chocolate Mud Cake</option>
                                    <option value="Lime and Coconut Cake">Lime and Coconut Cake</option>
                                    <option value="Lemon Cake">Lemon Cake</option>
                                    <option value="other">Others</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label>If others Specify </label>
                                <input type="text" class="form-control" name="other_flavour" value="{{ Request::old('other_flavour')}}">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Fillings</label>
                                <select class="form-control" name="filling">
                                    <option selected disabled>Select Cake Fillings</option>
                                    <option value="Apricot Jam Filling">Apricot Jam Filling</option>
                                    <option value="Vanilla Buttercream">Vanilla Buttercream</option>
                                    <option value="White Chocolate Cream Cheese Frosting">White Chocolate Cream Cheese Frosting</option>
                                    <option value="White Chocolate Buttercream">White Chocolate Buttercream</option>
                                    <option value="Strawberry Jam FillingM">Strawberry Jam FillingM</option>
                                    <option value="Cream Cheese Frosting">Cream Cheese Frosting</option>
                                    <option value="Chocolate Buttercream">Chocolate Buttercream</option>
                                    <option value="Lime and Coconut Frosting">Lime and Coconut Frosting</option>
                                    <option value="other">Others</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label>If others Specify </label>
                                <input type="text" class="form-control" name="other_filling" value="{{ Request::old('other_filling')}}">
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