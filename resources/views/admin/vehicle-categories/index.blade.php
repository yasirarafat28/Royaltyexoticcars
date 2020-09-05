@extends('admin.index') @section('content')
<div class="breadcrumbs">
     <div class="col-sm-4 float-right-1">
      <div class="page-header float-left float-right-1">
            <div class="page-title">
                <h1>{{__('messages.category')}}</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8 float-left-1">
      <div class="page-header float-right float-left-1">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li class="active">{{__('messages.category')}}</li>
                </ol>
            </div>
        </div>
</div>
</div>

<div class="content mt-3">
        <div class="col-12">
            <div class="pb-4">
                @if($level <4)
                    <a class="btn btn-primary"  data-toggle="modal" data-target="#modal-create" ><i class="fa fa-plus" aria-hidden="true"></i> Create Category</a>
                @endif

                <div class="modal fade" id="modal-create">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title">Create New Category</h4>
                            </div>
                            <div class="modal-body">
                                <form method="POST" action="{{ url('admin/vehiclecategory/store') }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                                    {!! csrf_field() !!}

                                    <input type="hidden" name="level" value="{{$level}}" >
                                    <input type="hidden" name="parent_id" value="{{$parent_id}}">

                                    <div class="form-group ">
                                        <label for="name" class="control-label">Name</label>
                                        <input class="form-control" name="name" type="text" id="name">

                                    </div>

                                    <div class="form-group ">
                                        <label for="name" class="control-label">Priority</label>
                                        <input class="form-control" name="priority" type="integer" id="priority">
                                    </div>

                                    <div class="form-group ">
                                        <label for="name" class="control-label">Description</label>
                                        <textarea name="description"   class="form-control"></textarea>

                                    </div>
                                    <div class="form-group ">
                                        <label for="email" class="control-label">Image</label>
                                        <input class="form-control" name="image" type="file" id="image">

                                    </div>
                                    <div class="form-group">
                                        <label for="phone" class="control-label">Status</label>
                                        <select class="form-control" name="status">
                                            <option>Select an option</option>
                                            <option value="active">Active</option>
                                            <option value="inactive">Inactive</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-offset-4 col-md-4">
                                            <input class="btn btn-primary btnusercreate btnper" type="submit" value="Create">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
            </div>

            <h4>Level {{$level}} Category</h4>



            <table class="table table-striped table-hover" id="example">
                <thead>
                <tr>
                    @if($level== 1)
                        <th>Image</th>
                    @endif
                    <th>Name</th>
                    <th>Category</th>
                    <th>Status</th>
                    <th>Timestamp</th>
                    <th  class="action-td" >Action</th>
                </tr>
                </thead>
                <tbody>

                @foreach($categories as $item)
                    <tr>

                        @if($level== 1)
                            <td><img src="{{asset($item->photo)}}" height="42" width="42"></td>
                        @endif
                        <td>{{$item->name}}</td>
                        <td>{{$item->priority}}</td>
                        <td>{{$item->status}}</td>
                        <td>{{$item->created_at}}</td>
                        <td id="action" class="action-td">
                            <a class="m-1" data-toggle="modal" data-target="#modal-edit{{$item->id}}" title="Edit Product Category"><i class="fa fa-pencil" aria-hidden="true" style="margin-right: 10px;font-size: x-large;color:black"></i></a>
                            @if($level <3)
                                <a class="m-1" href="{{url('admin/vehiclecategory/l'.($level+1).'/'.$item->id)}}" title="View sub Categories Product Category"><i class="fa fa-code-fork f-s-25" style="margin-right: 10px;font-size: x-large;color:black"></i></a>
                            @endif
                            <a class="m-1" title="Delete Review" onclick="return confirm('Confirm delete?')" href="{{url('admin/vehiclecategory_entry/delete/'.$item->id)}}"><i class="fa fa-trash f-s-25" style="margin-right: 10px;font-size: x-large;color:black"></i>

                            </a>

                            <!--Edit Modal -->
                            <div class="modal fade" id="modal-edit{{$item->id}}">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title">Update Product Category</h4>
                                        </div>
                                        <div class="modal-body">
                                            <div class="panel">
                                                <form method="POST" class="form-horizontal modal-update-form" action="{{ url('admin/vehiclecategory/update') }}"  accept-charset="UTF-8" enctype="multipart/form-data" >

                                                    {!! csrf_field() !!}
                                                    <input type="hidden" name="id" value="{{$item->id}}">
                                                    <div class="form-group">
                                                        <label for="name" class="control-label">Name</label>
                                                        <input class="form-control" name="name" type="text" value="{{$item->name}}"  id="edit-name">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="name" class="control-label">Priority</label>
                                                        <input class="form-control" name="priority" type="integer" value="{{$item->priority}}"  id="edit-priority">
                                                    </div>

                                                    <div class="form-group ">
                                                        <label for="name" class="control-label">Description</label>
                                                        <textarea name="description"   class="form-control"></textarea>

                                                    </div>
                                                    <input type="hidden" name="parent_id" value="{{$parent_id}}">

                                                    <div class="form-group">
                                                        <label for="email" class="control-label">Image</label>
                                                        <input class="form-control" name="image" type="file" id="edit-image">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="phone" class="control-label">Status</label>
                                                        <select class="form-control" name="status">
                                                            <option>Select an option</option>
                                                            <option value="active" {{$item->status=='active'?'selected':''}} >Active</option>
                                                            <option value="inactive" {{$item->status=='inactive'?'selected':''}} >Inactive</option>
                                                        </select>
                                                    </div>

                                                    <div class="form-group">
                                                        <div class="col-md-offset-4 col-md-4">
                                                            <input id="update" class="btn btn-primary btnper" type="submit" value="Update">
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </td>
                    </tr>
                @endforeach
                </tbody>

                <tfoot>
                <tr>
                    @if($level== 1)
                        <th>Image</th>
                    @endif
                    <th>Name</th>
                    <th>Status</th>
                    <th>Timestamp</th>
                    <th  class="action-td" >Action</th>
                </tr>
                </tfoot>
            </table>

        </div>

</div>

@stop
