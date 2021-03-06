@extends('layout.app')
@section('title')
Dashboard || Cakeries
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
                        @elseif (date("H") >= 15  && date("H") < 24)</h1>
                        <h1 style="font-size: 20px;">Good evening <img src="../assets/img/evening.png">, {{ Auth::user()->profile->first()->fname }}</h1>
                        @endif
            </h3>
        </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
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
        <div class="row">
            <!-- Column -->
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <!-- Row -->
                        <div class="row">
                            <div class="col-8">
                                <h2>{{ $allorder }} </h2>
                                <h6>Order Received</h6>
                            </div>
                            <div class="col-4 align-self-center text-right  p-l-0">
                                <h2 class="m-b-0"><i class="mdi mdi-wallet text-purple"></i></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <!-- Row -->
                        <div class="row">
                            <div class="col-8">
                                <h2 class="">{{ $allproduct }} </h2>
                                <h6>All Product</h6>
                            </div>
                            <div class="col-4 align-self-center text-right p-l-0">
                                <h2 class="m-b-0"><i class="mdi mdi-wallet text-purple"></i></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <!-- Row -->
                        <div class="row">
                            <div class="col-8">
                                <h2>{{ $allcategory }} </h2>
                                <h6>All Categories</h6>
                            </div>
                            <div class="col-4 align-self-center text-right p-l-0">
                                <h2 class="m-b-0"><i class="mdi mdi-wallet text-purple"></i></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <!-- Row -->
                        <div class="row">
                            <div class="col-8">
                                <h2>{{ $allusers }}</h2>
                                <h6>Users</h6>
                            </div>
                            <div class="col-4 align-self-center text-right p-l-0">
                                <h2 class="m-b-0"><i class="mdi mdi-wallet text-purple"></i></h2>
                            </div>
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