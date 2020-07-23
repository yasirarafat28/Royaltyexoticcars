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
                            <li class="active">
                                <strong>Product List
                                </strong>
                            </li>
                        </ol>
                    </div>

                </div>
            </div>
            <div class="clearfix"></div>

            <div class="col-lg-12">
                <section class="box">

                    <header class="panel_header">
                        <h2 class="title pull-left">Product List</h2>
                        <div class="actions panel_actions pull-right">
                            <div class="form-group no-mb">
                                <a href="/admin/products/create" class="btn btn-primary color-white btn-corner "><i class="fa fa-plus"></i> New</a>

                            </div>

                        </div>
                    </header>
                    <div class="content-body">
                        <div class="row">
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
                            <div class="col-xs-12">

                                <div class="table-responsive" data-pattern="priority-columns">
                                    <table id="tech-companies-1" class="table vm trans table-small-font no-mb table-bordered table-striped">
                                        <thead>
                                        <tr>
                                            <th>Image</th>
                                            <th>Name</th>
                                            <th>Model</th>
                                            <th>Price</th>
                                            <!--<th>Status</th>-->
                                            <th>Timestamp</th>
                                            <th  class="action-td" >Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                            @forelse($records??array() as $item)
                                                <tr>
                                                    <td style="width: 10%;"><img src="{{asset($item->feature_image??'')}}" height="42" width="42"></td>
                                                    <td>{{$item->name}}</td>
                                                    <td>{{$item->model}}</td>
                                                    <td>{{$item->price}}</td>
                                                    <!--<td>{{$item->status}}</td>-->
                                                    <td>{{$item->created_at}}</td>
                                                    <td id="action" class="action-td">
                                                        <a class="btn btn-primary" href="{{url('admin/products/'.$item->id.'/edit')}}"  title="Edit Product"><i class="fa fa-pencil" aria-hidden="true"></i> Edit</a>
                                                        <a class="btn btn-primary" href="{{url('admin/products/'.$item->id)}}"  title="Edit Product"><i class="fa fa-eye" aria-hidden="true"></i> Show</a>

                                                        @if($item->created_at)
                                                            {!! Form::open([
                                                                               'method'=>'DELETE',
                                                                               'url' => ['admin/products/'.$item->id],
                                                                               'style' => 'display:inline'
                                                                            ]) !!}
                                                            {!! Form::button('Delete', array(
                                                                 'type' => 'submit',
                                                                 'onclick' => 'return confirm("Are you sure? ");',
                                                                 'class' => 'btn btn-danger',
                                                                    'data-type'=>'confirm',
                                                                 )) !!}
                                                            {!! Form::close() !!}
                                                        @endif

                                                    </td>
                                                </tr>
                                            @empty
                                                <tr class="text-center">
                                                    <td colspan="6"><strong>Sorry!</strong> Found no records</td>
                                                </tr>
                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </section>

            </div>
        </div>
    </section>


    <!-- Create Modal -->

@endsection
