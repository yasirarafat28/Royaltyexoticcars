@extends('layouts.admin')

@section('content')
    <section id="main-content" class=" ">
        <div class="wrapper main-wrapper row" style=''>

            <div class='col-xs-12'>
                <div class="page-title">

                    <div class="pull-left">
                        <!-- PAGE HEADING TAG - START -->
                        <h1 class="title">Product List</h1>
                        <!-- PAGE HEADING TAG - END -->
                    </div>

                    <div class="pull-right hidden-xs">
                        <ol class="breadcrumb">
                            <li>
                                <a href="/admin/dashboard"><i class="fa fa-home"></i>Home</a>
                            </li>
                            <li>
                                <a href="/admin/products"><i class="fa fa-home"></i>Product List</a>
                            </li>
                            <li class="active">
                                <strong>Edit
                                </strong>
                            </li>
                        </ol>
                    </div>

                </div>
            </div>
            <div class="clearfix"></div>

            <div class="col-md-12">
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

                    <header class="panel_header">
                        <h2 class="title pull-left">Edit Product</h2>
                        <div class="actions panel_actions pull-right">
                            <div class="form-group no-mb">
                                <a class="box_close fa fa-times"></a>
                            </div>

                        </div>
                    </header>
                    <hr>
                    <br>
                    <div class="content-body">
                        <div class="row">


                            <form action="{{url('admin/products/'.$product->id)}}" method="POST" class=" padding-30"  enctype="multipart/form-data">

                                {{csrf_field()}}
                                {{method_field('PATCH')}}

                                <div class="form-group col-md-12">
                                    <label for="" class="control-label">Product Name</label>
                                    <input type="text" name="name"  placeholder="Product name" class="form-control" value="{{$product->name}}">
                                </div>


                                <div class="form-group col-md-6">
                                    <label class="control-label" for="input-zone">Category</label>

                                    <select name="category_id" id="category_id" class="form-control selectpicker" >
                                        <option value=""> --- Please Select Category --- </option>
                                        <?php foreach ($categories??array() as $key => $item): ?>
                                        <option {{$item->id==$product->category_id?'selected':''}} value="{{$item->id}}">{{$item->name}}</option>

                                        <?php endforeach ?>
                                    </select>
                                </div>


                                <div class="form-group col-md-6">
                                    <label class="control-label" for="input-address-1">Model</label>
                                    <input type="text" name="model" placeholder="Model" class="form-control" value="{{$product->model}}">
                                </div>


                                <div class="form-group col-md-6">
                                    <label class="control-label" for="input-address-1">Size/Dimension</label>
                                    <input type="text" name="dimension" placeholder="Size/Dimension" class="form-control" value="{{$product->dimension}}">
                                </div>

                                <div class="form-group col-md-6">
                                    <label class="control-label" for="input-address-1">Weight</label>
                                    <div class="row">
                                        <div class="col-md-8">

                                            <input type="text" name="weight" placeholder="Weight" class="form-control" value="{{$product->weight}}">
                                        </div>
                                        <div class="col-md-4">

                                            <select name="weight_unit" id="" class="form-control col-md-4">
                                                <option {{$product->weight_unit=='gram'?'selected':''}} value="gram">Grams</option>
                                                <option {{$product->weight_unit=='pound'?'selected':''}} value="pound">Pounds</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>



                                <div class="form-group col-md-6">
                                    <label class="control-label" for="input-address-1">Materials</label>
                                    <input type="text" name="material" placeholder="Materials" class="form-control" value="{{$product->material}}">
                                </div>

                                <div class="form-group col-md-6">
                                    <label class="control-label" for="input-address-1">Purchase Price</label>
                                    <input type="text" name="purchase_price" placeholder="Purchase Price" class="form-control" value="{{$product->purchase_price}}">
                                </div>


                                <div class="form-group col-md-6">
                                    <label class="control-label" for="input-address-1">Product Price</label>
                                    <input type="text" name="price" placeholder="Product Price" class="form-control" value="{{$product->price}}">
                                </div>


                                <div class="form-group col-md-6">
                                    <label class="control-label" for="input-address-1">Discount Price</label>
                                    <input type="text" name="discount" placeholder="Discount Price" class="form-control" value="{{$product->discount}}">
                                </div>
                                <!--<div class="form-group col-md-6">
                                    <label class="control-label" for="input-address-1">Status</label>
                                    <select name="status" id="" class="form-control">
                                        <option {{$product->status=='active'?'selected':''}} value="active">Active</option>
                                        <option {{$product->status=='inactive'?'selected':''}} value="inactive">Inactive</option>
                                    </select>
                                </div>-->

                                <div class="form-group col-md-6">
                                    <label class="control-label" for="input-address-1">Package Feature Photo</label>
                                    <input type="file" name="feature_image" placeholder="Feature Image" class="form-control">

                                </div>
                                <div class="form-group  col-md-12">
                                    <label class="control-label" for="input-company">Description</label>
                                    <textarea name="description"  class="form-control">{{$product->description}}</textarea>
                                </div>
                                <div class="form-group  col-md-12">


                                    <div class="row text-center">
                                        <button class="btn btn-primary btn-corner">Submit</button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </section>

            </div>
        </div>
    </section>


    <!-- Edit Modal -->

@endsection
