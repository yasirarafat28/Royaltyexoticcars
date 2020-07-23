@extends('layouts.admin')

@section('content')
    <section id="main-content" class=" ">
        <div class="wrapper main-wrapper row" style=''>

            <div class='col-xs-12'>
                <div class="page-title">

                    <div class="pull-left">
                        <!-- PAGE HEADING TAG - START -->
                        <h1 class="title">Category List</h1>
                        <!-- PAGE HEADING TAG - END -->
                    </div>

                    <div class="pull-right hidden-xs">
                        <ol class="breadcrumb">
                            <li>
                                <a href="/admin/dashboard"><i class="fa fa-home"></i>Home</a>
                            </li>
                            <li class="active">
                                <strong>Category List
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
                        <h2 class="title pull-left">Category List</h2>
                        <div class="actions panel_actions pull-right">
                            <div class="form-group no-mb">
                                <button data-toggle="modal" data-target="#CreateModal" type="submit" class="btn btn-primary btn-corner "><i class="fa fa-plus"></i> New</button>

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
                                            <th>Icon</th>
                                            <th>Photo</th>
                                            <th>Name</th>
                                            <th>Slug</th>
                                            <th>Status</th>
                                            <th>Timestamp</th>
                                            <th  class="action-td" >Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                            @forelse($records??array() as $item)
                                                <tr>
                                                    <td style="width: 10%;"><img src="{{asset($item->icon??'')}}" height="42" width="42"></td>
                                                    <td style="width: 10%;"><img src="{{asset($item->photo??'')}}" height="42" width="42"></td>
                                                    <td>{{$item->name}}</td>
                                                    <td>{{$item->slug}}</td>
                                                    <td>{{$item->status}}</td>
                                                    <td>{{$item->created_at}}</td>
                                                    <td id="action" class="action-td">
                                                        <a class="btn btn-primary" data-toggle="modal" data-target="#modal-edit{{$item->id}}" title="Edit Category"><i class="fa fa-pencil" aria-hidden="true"></i> Edit</a>

                                                        @if(\Illuminate\Support\Facades\Auth::user()->roles->first()->name=='super_admin')
                                                        {!! Form::open([
                                                                           'method'=>'DELETE',
                                                                           'url' => ['admin/categories/'.$item->id],
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
                                                    <td colspan="7"><strong>Sorry!</strong> Found no records</td>
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
            <div class="modal fade" id="CreateModal" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="btn btn-danger btn-corner pull-right" data-dismiss="modal">CLOSE</button>
                            <h4 class="title pull-left" id="">Create Category</h4>
                        </div>
                        <div class="clearfix"></div>
                        <div class="modal-body">
                            <form method="POST" action="{{ url('admin/categories')}}" accept-charset="UTF-8" enctype="multipart/form-data">
                                {{csrf_field()}}

                                <div class="form-group row clearfix">
                                    <label for="name" class="col-md-4 control-label">Name</label>
                                    <div class="col-md-8">
                                        <input class="form-control" name="name" type="text">
                                    </div>
                                </div>
                                <div class="form-group row clearfix">
                                    <label for="email" class="col-md-4 control-label">Photo</label>
                                    <div class="col-md-8">
                                        <input class="form-control" name="photo" type="file" id="edit-image">
                                    </div>
                                </div>
                                <div class="form-group row clearfix">
                                    <label for="email" class="col-md-4 control-label">Icon</label>
                                    <div class="col-md-8">
                                        <input class="form-control" name="icon" type="file" id="edit-image">
                                    </div>
                                </div>
                                <div class="form-group row text-center">
                                    <button class="btn btn-primary btn-corner col-md-offset-4 col-md-4">Save Changes</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>


            @foreach($records??array() as $key=>$item)
            <!--Edit Modal -->
                <div class="modal fade" id="modal-edit{{$item->id}}">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title">Update Category</h4>
                            </div>
                            <div class="modal-body">
                                <form method="POST" action="{{ url('admin/categories/'.$item->id) }}"  accept-charset="UTF-8" enctype="multipart/form-data" >

                                    {!! csrf_field() !!}
                                    {!! method_field('PATCH') !!}
                                    <div class="form-group row clearfix">
                                        <label for="name" class="col-md-4 control-label">Name</label>
                                        <div class="col-md-8">
                                            <input class="form-control" name="name" type="text" value="{{$item->name}}"  id="edit-name">
                                        </div>
                                    </div>
                                    <div class="form-group row clearfix">
                                        <label for="email" class="col-md-4 control-label">Image</label>
                                        <div class="col-md-8">
                                            <input class="form-control" name="photo" type="file" id="edit-image">
                                        </div>
                                    </div>
                                    <div class="form-group row clearfix">
                                        <label for="email" class="col-md-4 control-label">Icon</label>
                                        <div class="col-md-8">
                                            <input class="form-control" name="icon" type="file" id="edit-image">
                                        </div>
                                    </div>

                                    <div class="form-group row clearfix">
                                        <label for="phone" class="col-md-4 control-label">Status</label>
                                        <div class="col-md-8">
                                            <select class="form-control ms" name="status">
                                                <option>Select an option</option>
                                                <option value="active" {{$item->status=='active'?'selected':''}} >Active</option>
                                                <option value="inactive" {{$item->status=='inactive'?'selected':''}} >Inactive</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row text-center">
                                        <input class="btn btn-primary btn-corner col-md-4" type="submit" value="Update">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </section>


    <!-- Create Modal -->

@endsection
