@extends('admin.index')
@section('style')

    <link rel="stylesheet" href="/css/bootstrap-material-datetimepicker.css" />
@endsection
@section('content')
<div class="breadcrumbs">
     <div class="col-sm-4 float-right-1">
      <div class="page-header float-left float-right-1">
            <div class="page-title">
                <h1>Sliders</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8 float-left-1">
      <div class="page-header float-right float-left-1">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li class="active">Sliders</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<div class="content mt-3">
    <div class="col-12">

        <div class="card">
            <div class="card-body">
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

                <div class="pb-4 table-responsive">
                    <a class="btn btn-primary"  data-toggle="modal" data-target="#modal-create" ><i class="fa fa-plus" aria-hidden="true"></i> Create Sliders</a>


                    <div class="modal fade" id="modal-create">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Create Sliders</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span></button>
                                </div>
                                <div class="modal-body">
                                    <form method="POST" action="{{ url('admin/slider') }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                                        {!! csrf_field() !!}


                                        <div class="form-group ">
                                            <label for="name" class="control-label">Title</label>
                                            <input class="form-control" name="title" placeholder="Title" type="text" id="name">
                                        </div>
                                        <div class="form-group ">
                                            <label for="name" class="control-label">Description</label>
                                            <textarea name="description" id="description" class="editor form-control"></textarea>

                                        </div>

                                        <div class="form-group ">
                                            <label for="name" class="control-label">Photo</label>
                                            <input class="form-control" required name="photo" placeholder="Title" type="file" id="name">
                                        </div>
                                        <div class="form-group">
                                            <label for="phone" class="control-label">Type</label>
                                            <select class="form-control" name="type" required>
                                                <option>rental</option>
                                                <option>shop</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="phone" class="control-label">Status</label>
                                            <select class="form-control" name="status" required>
                                                <option>Select an option</option>
                                                <option value="active"  >Active</option>
                                                <option value="inactive"  >Inactive</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-md-offset-4 col-md-4">
                                                <button class="btn btn-primary btnusercreate btnper" type="submit" >Save </button>
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

                <h4>Sliders</h4>



                <table class="table table-striped table-hover" id="dt">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Photo</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>Timestamp</th>
                        <th  class="action-td" >Action</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($records??array() as $item)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>
                                <img src="{{url($item->photo??'/')}}" width="50px" alt="">
                            </td>
                            <td>{{$item->title}}</td>
                            <td>{{$item->description}}</td>
                            <td>{{$item->type}}</td>
                            <td>{{$item->status}}</td>
                            <td>{{$item->created_at}}</td>
                            <td id="action" class="action-td">
                                <a class="m-1" data-toggle="modal" data-target="#modal-edit{{$item->id}}" title="Edit Sliders"><i class="fa fa-pencil" aria-hidden="true" style="margin-right: 10px;font-size: x-large;color:black"></i></a>


                            {!! Form::open([
                                               'method'=>'DELETE',
                                               'url' => ['/admin/slider', $item->id],
                                               'style' => 'display:inline'
                                            ]) !!}
                            {!! Form::button('<i class="fa fa-trash f-s-25"></i>', array(
                                 'type' => 'submit',
                                 'onclick' => 'return confirm("Are you sure? ");',
                                 'class' => 'm-1 btn',
                                    'data-type'=>'confirm',
                                 )) !!}
                            {!! Form::close() !!}

                            <!--Edit Modal -->
                                <div class="modal fade" id="modal-edit{{$item->id}}">
                                    <div class="modal-dialog modal-md">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Update Sliders</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="panel">
                                                    <form method="POST" action="{{ url('admin/slider/'.$item->id) }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                                                        {!! csrf_field() !!}
                                                        {{method_field('PATCH')}}



                                                        <div class="form-group ">
                                                            <label for="name" class="control-label">Title</label>
                                                            <input class="form-control" value="{{$item->title}}" name="title" placeholder="Title" type="text" id="name">
                                                        </div>

                                                        <div class="form-group ">
                                                            <label for="name" class="control-label">Photo</label>
                                                            <input class="form-control" name="photo" placeholder="Title" type="file" id="name">
                                                        </div>
                                                        <div class="form-group ">
                                                            <label for="name" class="control-label">Description</label>
                                                            <textarea name="description"  class="form-control">{{$item->content}}</textarea>

                                                        </div>
                                                        <div class="form-group">
                                                            <label for="phone" class="control-label">Type</label>
                                                            <select class="form-control" name="type" required>
                                                                <option>Select an option</option>
                                                                <option {{$item->type=='rental'?'selected':''}}>rental</option>
                                                                <option {{$item->type=='shop'?'selected':''}}>shop</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="phone" class="control-label">Status</label>
                                                            <select class="form-control" name="status" required>
                                                                <option>Select an option</option>
                                                                <option {{$item->status=='active'?'selected':''}} value="active"  >Active</option>
                                                                <option {{$item->status=='inactive'?'selected':''}} value="inactive"  >Inactive</option>
                                                            </select>
                                                        </div>

                                                        <div class="form-group">
                                                            <div class="col-md-offset-4 col-md-4">
                                                                <button class="btn btn-primary btnusercreate btnper" type="submit" >Update </button>
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
                </table>
            </div>
        </div>

    </div>

</div>

@stop
@section('footer')
    <script type="text/javascript" src="/js/moment.min.js"></script>
    <script type="text/javascript" src="http://momentjs.com/downloads/moment-with-locales.min.js"></script>
    <script type="text/javascript" src="/js/bootstrap-material-datetimepicker.js"></script>
    <script>

        $('.start_time').bootstrapMaterialDatePicker
        ({
            format: 'HH:mm',
            clearButton: true,
            date: false
        });

        $('#dt').dataTable();
    </script>
@endsection
