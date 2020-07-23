@extends('layouts.admin')

@section('content')
    <section id="main-content" class=" ">
        <div class="wrapper main-wrapper row" style=''>

            <div class='col-xs-12'>
                <div class="page-title">

                    <div class="pull-left">
                        <!-- PAGE HEADING TAG - START -->
                        <h1 class="title">Customer List</h1>
                        <!-- PAGE HEADING TAG - END -->
                    </div>

                    <div class="pull-right hidden-xs">
                        <ol class="breadcrumb">
                            <li>
                                <a href="/admin/dashboard"><i class="fa fa-home"></i>Home</a>
                            </li>
                            <li>
                                <a href="/admin/customers"><i class="fa fa-home"></i>Customer List</a>
                            </li>
                            <li class="active">
                                <strong>Show
                                </strong>
                            </li>
                        </ol>
                    </div>

                </div>
            </div>
            <div class="clearfix"></div>

            <div class="col-md-offset-2 col-md-8">
                <section class="box">

                    <div class="col-lg-12">


                        @if(session()->has('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        @if($errors->any())
                            <div class="alert alert-danger">
                                {{ $errors->first() }}
                            </div>
                        @endif
                    </div>

                    <div class="clearfix"></div>

                    <header class="panel_header" style="border-bottom:1px solid #eee">
                        <h2 class="title pull-left">Show Product</h2>
                        <div class="actions panel_actions pull-right">
                            <div class="form-group no-mb">
                                <a class="box_close fa fa-times"></a>
                            </div>

                        </div>
                    </header>
                    <br>
                    <div class="content-body">
                        <table class="table table-striped">
                            <tbody>

                            <tr>
                                <td colspan="2">
                                    <div class="uprofile-image mt-30">
                                        <img  class="img-responsive"  src="{{url($product->feature_image??'')}}" onerror="this.src='{{asset('/admin/crypto-dash/profile.png')}}'">

                                    </div>
                                </td>
                                <td>
                                </td>
                            </tr>
                            <tr>
                                <td>Name</td>
                                <td>{{$product->name}}</td>
                            </tr>
                            <tr>
                                <td>Category</td>
                                <td>{{$product->category->name??'N/A'}}</td>
                            </tr>
                            <tr>
                                <td>Model</td>
                                <td>{{$product->model}}</td>
                            </tr>
                            <tr>
                                <td>Dimension</td>
                                <td>{{$product->dimension}}</td>
                            </tr>
                            <tr>
                                <td>Weight</td>
                                <td>{{$product->weight}} {{strtoupper($product->weight_unit)}}</td>
                            </tr>
                            <tr>
                                <td>Material</td>
                                <td>{{$product->material}}</td>
                            </tr>
                            <tr>
                                <td>Purchase Price</td>
                                <td>£ {{$product->purchase_price}}</td>
                            </tr>
                            <tr>
                                <td>Price</td>
                                <td>
                                    @if($product->discount)
                                        <small><s>{{number_format($product->price,2)}}</s></small>
                                    @endif

                                        £ {{number_format($product->price-$product->discount,2)}}
                                </td>
                            </tr>
                            <tr>
                                <td>Description</td>
                                <td>{{$product->description??'N/A'}}</td>
                            </tr>
                            <!--<tr>
                                <td>Status</td>
                                <td>{{$product->status??'N/A'}}</td>
                            </tr>-->
                            </tbody>

                        </table>
                    </div>
                </section>

            </div>
        </div>
    </section>


    <!-- Create Modal -->

@endsection
