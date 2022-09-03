@extends('layout.app1')
@section('title')
Orders || Cakeries
@endsection
@section('content')

<!-- ============================================================== -->
<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-themecolor">
                @if (date("H") < 12) <h1 style="font-size: 20px;">Good morning <img src="../assets/img/morning1.png">, {{ Auth::user()->profile->first()->fname }}</h1>
                    @elseif (date("H") >= 12 && date("H") < 16) <h1 style="font-size: 20px;">Good afternoon <img src="../assets/img/afternoon.png">, {{ Auth::user()->profile->first()->fname }}</h1>
                        @elseif (date("H") >= 15 && date("H") < 24)</h1> <h1 style="font-size: 20px;">Good evening <img src="../assets/img/evening.png">, {{ Auth::user()->profile->first()->fname }}</h1>
                            @endif
            </h3>
        </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Orders</li>
            </ol>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">

        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        @include('include.success')
        @include('include.warning')
        @include('include.error')
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Order List</h4>

                        <div class="table-responsive m-t-40">
                            <table id="myTable" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>S/N</th>
                                        <th>Name</th>
<<<<<<< HEAD
                                        <th>Contact</th>
                                        <th>Product</th>
                                        <th>Occasion</th>
                                        <th>Size</th>
                                        <th>color</th>
                                        <th>Flavour</th>
                                        <th>Fillings</th>
                                        <th>collection</th>
=======
                                        <th>Product</th>
                                        <th>Occasion</th>
                                        <th>Others specified</th>
                                        <th>Size</th>
                                        <th>color</th>
                                        <th>collection_date</th>
                                        <th>collection_Type</th>
>>>>>>> 77078cc7ac9e761d2a0be84f29240d41d2685202
                                        <th>Additional Note</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $number = 1; ?>
                                    @foreach($allorder as $order)
                                    <tr>
                                        <td>{{ $number }}</td>
                                        <td>{{ $order->user->profile->first()->fname }} {{ $order->user->profile->first()->lname }}</td>
<<<<<<< HEAD
                                        <td>{{ $order->user->email }} <br> {{ $order->user->profile->first()->phone }}</td>
                                        <td>{{ $order->product->name }}</td>
                                        @if($order->occasion != 'other')
                                        <td>{{ $order->occasion }}</td>
                                        @elseif($order->occasion == 'other')
                                        <td>{{ $order->other_occasion }}</td>
                                        @endif
                                        @if($order->size != 'other')
                                        <td>{{ $order->size }}</td>
                                        @elseif($order->size == 'other')
                                        <td>{{ $order->other_size }}</td>
                                        @endif
                                        <td>{{ $order->color }}</td>
                                        @if($order->flavour != 'other')
                                        <td>{{ $order->flavour }}</td>
                                        @elseif($order->flavour == 'other')
                                        <td>{{ $order->other_flavour }}</td>
                                        @endif
                                        @if($order->filling != 'other')
                                        <td>{{ $order->filling }}</td>
                                        @elseif($order->filling == 'other')
                                        <td>{{ $order->other_filling }}</td>
                                        @endif
                                        <td>{{ $order->collection_date }} <br> {{ $order->collection_type }}</td>
=======
                                        <td>{{ $order->product->name }}</td>
                                        <td>{{ $order->occasion }}</td>
                                        <td>{{ $order->others }}</td>
                                        <td>{{ $order->size }}</td>
                                        <td>{{ $order->color }}</td>
                                        <td>{{ $order->collection_date }}</td>
                                        <td>{{ $order->collection_type }}</td>
>>>>>>> 77078cc7ac9e761d2a0be84f29240d41d2685202
                                        <td>{{ $order->comment }}</td>
                                        <td>
                                            @if($order->status == 0 )
                                            <button class="btn btn-outline-danger btn-sm">Pending</button>
                                            @elseif($order->status == 1 )
                                            <button class="btn btn-outline-success btn-sm">Accepted</button>
                                            @endif
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown">
<<<<<<< HEAD
                                                    Action
=======
                                                     Action
>>>>>>> 77078cc7ac9e761d2a0be84f29240d41d2685202
                                                </button>
                                                <div class="dropdown-menu">
                                                    @if($order->status == 0 )
                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#accept{{ $order->id }}">Accept Order</a>
                                                    @elseif($order->status == 1)
                                                    @endif
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete{{ $order->id }}">Delete Order</a>
                                                </div>
                                            </div>
                                        </td>
                                        <!-- modal content -->
                                        <div id="accept{{ $order->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title" id="myModalLabel">Accept Order</h4>
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <h4><strong>Confirm Activation</strong></h4>
                                                        <p>Are you sure you want to accept order from {{ $order->user->profile->first()->fname }} {{ $order->user->profile->first()->lname }}</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                                        <a href="{{ route('acceptorder',$order->id) }}" class="btn btn-success btn-sm waves-effect waves-light">Accept Order</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.modal -->
                                        <!-- modal content -->
                                        <div id="delete{{ $order->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title" id="myModalLabel">Delete Order</h4>
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <h4><strong>Confirm Deletion</strong></h4>
                                                        <p>Are you sure you want to Delete this order </p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                                        <a href="{{ route('deleteorder',$order->id) }}" class="btn btn-danger btn-sm waves-effect waves-light">Delete Order</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.modal -->
                                    </tr>
                                    <?php $number++; ?>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ============================================================== -->
        <!-- End PAge Content -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->

    @endsection