@extends('layout.master1')
@section('title')
Cart || Cakeries
@endsection
@section('content')

<!--================End Main Header Area =================-->
<section class="banner_area p_20">
    <div class="container">
        <div class="banner_text">
            <h3>Cart</h3>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Cakes</a></li>
            </ul>
        </div>
    </div>
</section>
<!--================End Main Header Area =================-->
<!--================Cart Table Area =================-->
<section class="cart_table_area p_100">
    <div class="container">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Preview</th>
                        <th scope="col">Product</th>
                        <th scope="col">Category</th>
                        <th scope="col">Description</th>
                        <th scope="col">Remove Item</th>
                    </tr>
                </thead>
                <tbody>
                    @if (request()->session()->has('cart'))
                    @foreach($products->items as $product)
                    <tr>
                        <td>
                            <img class="img-thumbnail" src="../upload/{{ $product['item']['image']->first()->source  }}" alt="" width="70px" height="60px">
                        </td>
                        <td>{{ $product['item']['name'] }}</td>
                        <td>{{ $product['item']['category']['name'] }}</td>
                        <td>
                            {{ $product['item']['description'] }}
                        </td>
                        <td>
                            <a href="{{ route('deleteitem',$product['id']) }}"><i class="fa fa-times"></i></a>
                        </td>
                    </tr>
                    @endforeach
                    @elseif (!request()->session()->has('cart'))
                    <tr>
                        <td colspan="5">NO ITEM</td>
                    </tr>
                    @endif
                    <tr>
                        <td></td>
                        <td></td>
                        <td>
                        <a class="btn btn-success" href="http://wa.me/447956798250" target="_blank"><i class="fa fa-whatsapp"> Order by Whatsapp</i> </a>
                        </td>
                        <td>
                        <a class="btn btn-primary" href="tel:+447956798250"><i class="fa fa-phone"></i> Call to Order</a>
                        </td>
                        <td>
                        <a class="btn btn-default colo" href="{{ url('/user/place-order') }}"><i class="fa fa-globe"></i> Order by Web</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>
<!--================End Cart Table Area =================-->

@endsection