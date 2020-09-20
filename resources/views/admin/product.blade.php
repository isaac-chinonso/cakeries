@extends('layout.app1')
@section('title')
Products || Cakeries
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
                <li class="breadcrumb-item active">Product</li>
                <li class="breadcrumb-item active"><button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#responsive-modal">Add Product</button></li>
            </ol>
        </div>
        <!-- modal content -->
        <div id="responsive-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel">Add Product</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label class="control-label">Category Name:</label>
                                <select class="form-control" name="">
                                    <option selected disabled>Select Category</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Product Name:</label>
                                <input type="text" class="form-control" name="">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Product Description:</label>
                                <textarea class="form-control" name=""></textarea>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Product Image:</label>
                                <input type="file" class="form-control" name="">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary btn-sm waves-effect waves-light">Add Product</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.modal -->
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
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Product List</h4>

                        <div class="table-responsive m-t-40">
                            <table id="myTable" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Category</th>
                                        <th>Name</th>
                                        <th>Description</th>
                                        <th>status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>Tiger Nixon</td>
                                        <td>Tiger Nixon</td>
                                        <td><button class="btn btn-outline-danger btn-sm">Deactivated</button></td>
                                        <td> 
                                            <button class="btn btn-danger btn-sm">
                                                <i class="fa fa-times"></i> Delete
                                            </button>
                                        </td>
                                    </tr>
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