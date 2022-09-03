@extends('layout.master1')
@section('title')
Manage Orders || Cakeries
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
            <div class="col-md-12">
                <div class="order_box_price">
                    <div class="payment_list">
                        <div class="p_w_title">
                            <h3>My Orders</h3>
                            <hr>
                        </div>
                        <section class="cart_table_area">
                            <div class="container">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>preview</th>
                                                <th>Product</th>
                                                <th>Occasion</th>
                                                <th>Size</th>
                                                <th>Color</th>
                                                <th>Flavour</th>
                                                <th>Fillings</th>
                                                <th>Collection Date</th>
                                                <th>Collection Type</th>
                                                <th>Additional Note</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if($order->isEmpty())
                                            <tr>
                                                <td colspan="11">No Order Available</td>
                                            </tr>
                                            @else

                                            @foreach($order as $ord)
                                            <tr>
                                                <td>
                                                    <img class="img-thumbnail" src="../upload/{{ $ord->product->image->first()->source }}" width="70px" height="60px">
                                                </td>
                                                <td>{{ $ord->product->name }}</td>
                                                @if($ord->occasion != 'other')
                                                <td>{{ $ord->occasion }}</td>
                                                @elseif($ord->occasion == 'other')
                                                <td>{{ $ord->other_occasion }}</td>
                                                @endif
                                                @if($ord->size != 'other')
                                                <td>{{ $ord->size }}</td>
                                                @elseif($ord->size == 'other')
                                                <td>{{ $ord->other_size }}</td>
                                                @endif
                                                <td>{{ $ord->color }}</td>
                                                @if($ord->flavour != 'other')
                                                <td>{{ $ord->flavour }}</td>
                                                @elseif($ord->flavour == 'other')
                                                <td>{{ $ord->other_flavour }}</td>
                                                @endif
                                                @if($ord->filling != 'other')
                                                <td>{{ $ord->filling }}</td>
                                                @elseif($ord->filling == 'other')
                                                <td>{{ $ord->other_filling }}</td>
                                                @endif
                                                <td>{{ $ord->collection_date }}</td>
                                                <td>{{ $ord->collection_type }}</td>
                                                <td>{{ $ord->comment }}</td>
                                                <td>
                                                    @if($ord->status == 0)
                                                    <button class="btn btn-danger btn-sm">Pending</button>
                                                    @elseif($ord->status == 1)
                                                    <button class="btn btn-success btn-sm">Received</button>
                                                    @endif
                                                </td>
                                            </tr>
                                            @endforeach
                                            @endif

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </section>

                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection