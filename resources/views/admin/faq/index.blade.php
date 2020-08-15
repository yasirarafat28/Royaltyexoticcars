@extends('layouts.admin')

@section('content')
    <section id="main-content" class=" ">
        <div class="wrapper main-wrapper row" style=''>

            <div class='col-xs-12'>
                <div class="page-title">

                    <div class="pull-left">
                        <!-- PAGE HEADING TAG - START -->
                        <h1 class="title">FAQ List</h1>
                        <!-- PAGE HEADING TAG - END -->
                    </div>

                    <div class="pull-right hidden-xs">
                        <ol class="breadcrumb">
                            <li>
                                <a href="/admin/dashboard"><i class="fa fa-home"></i>Home</a>
                            </li>
                            <li class="active">
                                <strong>FAQ List
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
                        <h2 class="title pull-left">Faq List</h2>
                        <div class="actions panel_actions pull-right">
                            <div class="form-group no-mb">

                                <a href="#CreateModal" data-toggle="modal" class="btn btn-primary btn-corner "><i class="fa fa-plus"></i> New</a>



                                <div aria-hidden="true" role="dialog" tabindex="-1" id="CreateModal" class="modal fade">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="btn btn-danger btn-corner pull-right" data-dismiss="modal">CLOSE</button>
                                                <h4 class="modal-title">Create Faq</h4>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">

                                                    <div class="col-md-12">
                                                        <form method="POST" action="{{url('admin/faq')}}" enctype="multipart/form-data">
                                                            {{csrf_field()}}

                                                            <div class="form-group ">
                                                                <label class="form-label">Question</label>
                                                                <div class="controls name">
                                                                    <input type="text" class="form-control" name="title" placeholder="Enter title">
                                                                </div>
                                                            </div>
                                                            <div class="form-group ">
                                                                <label class="form-label">Answer</label>
                                                                <div class="controls name">
                                                                    <textarea name="description" class="form-control"></textarea>
                                                                </div>
                                                            </div>

                                                            <div class="form-group row" style="text-align: center;">

                                                                <button id="2fa-submit-btn" type="submit" class="btn btn-info"> Submit </button>
                                                            </div>
                                                        </form>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </div>
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
                            <div class="col-xs-12">

                                <div class="table-responsive" data-pattern="priority-columns">
                                    <table id="tech-companies-1" class="table vm trans table-small-font no-mb table-bordered table-striped">
                                        <thead>
                                        <tr>
                                            <th>Question</th>
                                            <th>Answer</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($records??array() as $item)
                                            <tr>
                                                <td>{{$item->title}}</td>
                                                <td>{{$item->description}}</td>
                                                <td><span class=" w-70 ">{{ucfirst($item->status)}}</span></td>
                                                <td class="btn-group">
                                                    <a href="#editModal_{{$item->id}}" data-toggle="modal" class="btn btn-primary btn-sm">
                                                        <i class="fa fa-pencil"></i>
                                                    </a>


                                                    <div aria-hidden="true" role="dialog" tabindex="-1" id="editModal_{{$item->id}}" class="modal fade">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                                                                    <h4 class="modal-title">Update  Faq</h4>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <div class="row">

                                                                        <div class="col-md-12">
                                                                            <form method="POST" action="{{url('admin/faq/'.$item->id)}}" enctype="multipart/form-data">
                                                                                {{csrf_field()}}
                                                                                {{method_field('PATCH')}}

                                                                                <div class="form-group ">
                                                                                    <label class="form-label">Question</label>
                                                                                    <div class="controls name">
                                                                                        <input type="text" class="form-control" name="title" placeholder="Enter title" value="{{$item->title}}">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group ">
                                                                                    <label class="form-label">Answer</label>
                                                                                    <div class="controls name">
                                                                                        <textarea name="description" class="form-control">{{$item->description}}</textarea>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group ">
                                                                                    <label class="form-label">Answer</label>
                                                                                    <div class="controls name">
                                                                                        <select name="status" class="form-control">
                                                                                            <option {{$item->status=='active'?'selected':''}} value="active"> Active</option>
                                                                                            <option {{$item->status=='inactive'?'selected':''}} value="inactive"> Inactive</option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>

                                                                                <div class="form-group row" style="text-align: center;">

                                                                                    <button type="submit" class="btn btn-info"> Update </button>
                                                                                </div>
                                                                            </form>

                                                                        </div>

                                                                    </div>

                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    @if(\Illuminate\Support\Facades\Auth::user()->roles->first()->name=='super_admin')
                                                        {!! Form::open([
                                                                       'method'=>'DELETE',
                                                                       'url' => ['/admin/faq', $item->id],
                                                                       'style' => 'display:inline'
                                                                    ]) !!}
                                                        {!! Form::button('<i class="fa fa-trash"></i>', array(
                                                             'type' => 'submit',
                                                             'onclick' => 'return confirm("Are you sure? ");',
                                                             'class' => 'btn btn-danger btn-sm',
                                                                'data-type'=>'confirm',
                                                             )) !!}
                                                        {!! Form::close() !!}
                                                    @endif
                                                </td>
                                            </tr>
                                        @endforeach
                                        @if(sizeof($records)<1)
                                            <tr>
                                                <td colspan="4" class="text-center">Sorry! No data found</td>
                                            </tr>
                                        @endif

                                        </tbody>
                                    </table>

                                    {{$records->links()}}
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
