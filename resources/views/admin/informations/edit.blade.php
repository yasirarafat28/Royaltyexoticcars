@extends('layouts.admin')

@section('content')
    <section id="main-content" class=" ">
        <div class="wrapper main-wrapper row" style=''>

            <div class='col-xs-12'>
                <div class="page-title">

                    <div class="pull-left">
                        <!-- PAGE HEADING TAG - START -->
                        <h1 class="title">Why us Post List</h1>
                        <!-- PAGE HEADING TAG - END -->
                    </div>

                    <div class="pull-right hidden-xs">
                        <ol class="breadcrumb">
                            <li>
                                <a href="/admin/dashboard"><i class="fa fa-home"></i>Home</a>
                            </li>
                            <li>
                                <a href="/admin/information/posts"><i class="fa fa-home"></i>Why us Post List</a>
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
                        <h2 class="title pull-left">Edit Post</h2>
                        <div class="actions panel_actions pull-right">
                            <div class="form-group no-mb">
                                <a class="box_close fa fa-times"></a>
                            </div>

                        </div>
                    </header>
                    <br>
                    <div class="content-body">

                        <form action="{{url('admin/information/posts/'.$item->id)}}" method="POST" class=" padding-30"  enctype="multipart/form-data">

                            {{csrf_field()}}
                            {{method_field('PATCH')}}

                            <div class="form-group">
                                <label class="form-label">Title</label>
                                <div class="controls name">
                                    <input type="text" class="form-control" name="title" value="{{$item->title}}" placeholder="Enter title">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label" for="input-zone">Category</label>

                                <select name="category_id" id="category_id" class="form-control selectpicker" >
                                    <option value=""> --- Please Select Category --- </option>
                                    <?php foreach ($categories??array() as $key => $category): ?>
                                    <option {{$item->category_id==$category->id?'selected':''}} value="{{$category->id}}">{{$category->name}}</option>

                                    <?php endforeach ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label class="form-label">Description</label>
                                <div class="controls name">
                                    <textarea name="description" id="summary-ckeditor" class="form-control">{{$item->description}}</textarea>
                                </div>
                            </div>




                            <div class="form-group">
                                <label for="">Status</label>
                                <select name="status" id="" class="form-control">
                                    <option value="">Select</option>
                                    <option {{$item->status=='active'?'selected':''}} value="active">Active</option>
                                    <option {{$item->status=='inactive'?'selected':''}} value="inactive">Pending</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label class="form-label">Feature Image</label>
                                <div class="controls name">
                                    <input type="file" class="form-control" name="feature_image" placeholder="Enter title">
                                </div>
                            </div>

                            <div class="form-group row text-center">
                                <button class="btn btn-primary btn-corner">Save</button>
                            </div>
                        </form>

                    </div>
                </section>

            </div>
        </div>
    </section>


    <!-- Edit Modal -->

@endsection
