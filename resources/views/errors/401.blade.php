

@extends('layouts.dashboard')


@section('title', 'Greenlab Tech | Orders')
@section('content')


<!-- ============================================================== -->
<div class="page-wrapper">
  <!-- ============================================================== -->
  <!-- Bread crumb and right sidebar toggle -->
  <!-- ============================================================== -->
  <div class="row page-titles">
    <div class="col-md-5 align-self-center">
      <h5 class="text-themecolor">All Orders</h5>
    </div>
     
      <div class="col-md-7 align-self-center">
      <ol class="breadcrumb">

        <li class="breadcrumb-item"><a href="{{route('home')}}">My sales</a></li>
        <li class="breadcrumb-item active">Orders</li> 
      </ol>
    </div>
    <div class="">
      <button class="right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>
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
                <!-- Row -->
                
                
    <div class="row"> @include("layouts.head") </div>

                    <div class="row">
                        <div class="col-7" style="margin: 0 auto; /* Added */
                                                        float: none; /* Added */
                                                        margin-bottom: 10px; /* Added */">
                            <div class="card" >
                                <div class="card-body">
                                    <div class="alert alert-warning">

                                            <h2 class="text-warning"><i class="fa fa-exclamation-triangle"></i> Attention!</h2> This customer has a pending order from another merchant. Please use the back button. <a href="{{route('order.index')}}" class="btn btn-sm btn-outline-success" data-toggle="tooltip" data-placement="top" title="GO! back" > Go back! <i class="mdi mdi-recycle" ></i></a>
                                </div>

                            </div>
                    </div>
                </div>
            </div>
        </div>
                
             

@endsection