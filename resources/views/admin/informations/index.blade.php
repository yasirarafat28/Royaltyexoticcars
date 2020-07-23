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
                            <li class="active">
                                <strong>Why us Post List
                                </strong>
                            </li>
                        </ol>
                    </div>

                </div>
            </div>
            <div class="clearfix"></div>

            <div class="col-lg-12">
                <section class="box">

                    <header class="panel_header" style="border-bottom:1px solid #eee">
                        <h2 class="title pull-left">Why us Post List</h2>
                        <div class="actions panel_actions pull-right">
                            <div class="form-group no-mb">
                                <a href="/admin/information/posts/create" class="btn btn-primary color-white btn-corner "><i class="fa fa-plus"></i> New Post</a>

                            </div>

                        </div>
                    </header>
                    <div class="content-body">
                        <div class="row">
                            <div class="col-xs-12">

                                <div class="table-responsive" data-pattern="priority-columns">
                                    <table id="tech-companies-1" class="table vm trans table-small-font no-mb table-bordered table-striped">
                                        <thead>
                                        <tr>
                                            <th>Image</th>
                                            <th>Title</th>
                                            <th>Category</th>
                                            <th>Status</th>
                                            <th>Timestamp</th>
                                            <th  class="action-td" >Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                            @forelse($records??array() as $item)
                                                <tr>
                                                    <td style="width: 10%;"><img src="{{asset($item->feature_image??'')}}" height="42" width="42"></td>
                                                    <td>{{$item->title}}</td>
                                                    <td>{{$item->category->name??''}}</td>
                                                    <td>{{ucfirst($item->status)}}</td>
                                                    <td>{{$item->created_at}}</td>
                                                    <td id="action" class="action-td">
                                                        <a class="btn btn-primary" href="{{url('admin/information/posts/'.$item->id.'/edit')}}"  title="Edit Post"><i class="fa fa-pencil" aria-hidden="true"></i> Edit</a>
                                                        <a class="btn btn-primary" href="{{url('admin/information/posts/'.$item->id)}}"  title="Edit Post"><i class="fa fa-eye" aria-hidden="true"></i> Show</a>

                                                        @if(\Illuminate\Support\Facades\Auth::user()->roles->first()->name=='super_admin')
                                                        {!! Form::open([
                                                                           'method'=>'DELETE',
                                                                           'url' => ['admin/information/posts/'.$item->id],
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
                                                    <td colspan="8"><strong>Sorry!</strong> Found no records</td>
                                                </tr>
                                            @endforelse
                                        </tbody>
                                    </table>

                                    {!! $records->appends(\Illuminate\Support\Facades\Request::except('page'))->links() !!}

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
