@extends('admin.index')
@section('style')

    <link rel="stylesheet" href="/css/bootstrap-material-datetimepicker.css" />
@endsection
@section('content')
<div class="breadcrumbs">
     <div class="col-sm-4 float-right-1">
      <div class="page-header float-left float-right-1">
            <div class="page-title">
                <h1>Vehicle Schedules</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8 float-left-1">
      <div class="page-header float-right float-left-1">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li class="active">Vehicle Schedules</li>
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
                    <a class="btn btn-primary"  data-toggle="modal" data-target="#modal-create" ><i class="fa fa-plus" aria-hidden="true"></i> Create Vehicle Schedules</a>


                    <div class="modal fade" id="modal-create">
                        <div class="modal-dialog modal-md">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Create Schedule</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span></button>
                                </div>
                                <div class="modal-body">
                                    <form method="POST" action="{{ url('admin/vehicle-schedules') }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                                        {!! csrf_field() !!}
                                        @if(isset($_GET['vehicle_id']) && $_GET['vehicle_id'])
                                            <input type="hidden" name="vehicle_id" value="{{$_GET['vehicle_id']}}">
                                        @else
                                            <div class="form-group">
                                                <label for="phone" class="control-label">Vehicle</label>
                                                <select class="form-control" name="vehicle_id">
                                                    <option>Select an option</option>
                                                    @foreach($vehicles??array() as $vehicle)
                                                        <option value="{{$vehicle->id}}"  >{{$vehicle->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        @endif




                                        <div class="form-group ">
                                            <label for="name" class="control-label">Register Number</label>
                                            <input class="form-control" name="register_number" placeholder="Register Number" type="text" id="name">
                                        </div>
                                        <div class="form-group ">
                                            <label for="name" class="control-label">Color</label>
                                            <input class="form-control" name="color" type="text" placeholder="Color" id="name">
                                        </div>



                                        <div class="form-group ">
                                            <label for="name" class="control-label">Start Time</label>
                                            <input class="form-control start_time" name="start_time" type="text" placeholder="Start Time" id="start_time">
                                        </div>
                                        <div class="form-group">
                                            <label for="phone" class="control-label">Four Hour</label>
                                            <select class="form-control" name="four_hour">
                                                <option value="yes"  >Yes</option>
                                                <option value="no"  >No</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="phone" class="control-label">Six Hour</label>
                                            <select class="form-control" name="six_hour">
                                                <option value="yes"  >Yes</option>
                                                <option value="no"  >No</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="phone" class="control-label">Eight Hour</label>
                                            <select class="form-control" name="eight_hour">
                                                <option value="yes"  >Yes</option>
                                                <option value="no"  >No</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="phone" class="control-label">Twelve Hour</label>
                                            <select class="form-control" name="twelve_hour">
                                                <option value="yes"  >Yes</option>
                                                <option value="no"  >No</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="phone" class="control-label">Full Day</label>
                                            <select class="form-control" name="full_day">
                                                <option value="yes"  >Yes</option>
                                                <option value="no"  >No</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="phone" class="control-label">Status</label>
                                            <select class="form-control" name="status">
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

                <h4>Vehicle Schedules</h4>



                <table class="table table-striped table-hover" id="dt">
                    <thead>
                    <tr>
                        <th>Vehicle</th>
                        <th>Offer Type</th>
                        <th>Register No</th>
                        <th>Color</th>
                        <th>Time</th>
                        <th>Status</th>
                        <th>Timestamp</th>
                        <th  class="action-td" >Action</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($records??array() as $item)
                        <tr>
                            <td>{{$item->vehicle->name}}</td>
                            <td>
                                @if($item->four_hour=='yes')
                                    4Hr Offer Available<br>
                                @endif
                                @if($item->six_hour=='yes')
                                    6Hr Offer  Available<br>
                                @endif
                                @if($item->eight_hour=='yes')
                                    8Hr Offer  Available<br>
                                @endif
                                @if($item->twelve_hour=='yes')
                                    12Hr Offer  Available<br>
                                @endif
                                @if($item->full_day=='yes')
                                    24Hr Offer  Available<br>
                                @endif
                            </td>
                            <td>{{$item->register_number}}</td>
                            <td>{{$item->color}}</td>
                            <td>{{date('h:i a',strtotime($item->start_time))}}</td>
                            <td>{{$item->status}}</td>
                            <td>{{$item->created_at}}</td>
                            <td id="action" class="action-td">
                                <a class="m-1" data-toggle="modal" data-target="#modal-edit{{$item->id}}" title="Edit Vehicle Schedules"><i class="fa fa-pencil" aria-hidden="true" style="margin-right: 10px;font-size: x-large;color:black"></i></a>


                            {!! Form::open([
                                               'method'=>'DELETE',
                                               'url' => ['/admin/vehicle-schedules', $item->id],
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
                                                <h4 class="modal-title">Update Vehicle Schedules</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="panel">
                                                    <form method="POST" action="{{ url('admin/vehicle-schedules/'.$item->id) }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                                                        {!! csrf_field() !!}
                                                        {{method_field('PATCH')}}
                                                        <div class="form-group ">
                                                            <label for="name" class="control-label">Register Number</label>
                                                            <input class="form-control" value="{{$item->register_number}}" name="register_number" placeholder="Register Number" type="text" id="name">
                                                        </div>
                                                        <div class="form-group ">
                                                            <label for="name" class="control-label">Color</label>
                                                            <input class="form-control" name="color" type="text" placeholder="Color" id="name">
                                                        </div>



                                                        <div class="form-group ">
                                                            <label for="name" class="control-label">Start Time</label>
                                                            <input class="form-control start_time" value="{{date('H:i',strtotime($item->start_time))}}" name="start_time" type="text" placeholder="Start Time" id="start_time">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="phone" class="control-label">Four Hour</label>
                                                            <select class="form-control" name="four_hour">
                                                                <option value="yes" {{$item->four_hour=='yes'?'selected':''}}  >Yes</option>
                                                                <option value="no" {{$item->four_hour=='no'?'selected':''}}  >No</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="phone" class="control-label">Six Hour</label>
                                                            <select class="form-control" name="six_hour">
                                                                <option value="yes" {{$item->six_hour=='yes'?'selected':''}}  >Yes</option>
                                                                <option value="no" {{$item->six_hour=='no'?'selected':''}}  >No</option>
                                                            </select>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="phone" class="control-label">Eight Hour</label>
                                                            <select class="form-control" name="eight_hour">
                                                                <option value="yes" {{$item->eight_hour=='yes'?'selected':''}}  >Yes</option>
                                                                <option value="no" {{$item->eight_hour=='no'?'selected':''}}  >No</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="phone" class="control-label">Twelve Hour</label>
                                                            <select class="form-control" name="twelve_hour">
                                                                <option value="yes" {{$item->twelve_hour=='yes'?'selected':''}}  >Yes</option>
                                                                <option value="no" {{$item->twelve_hour=='no'?'selected':''}}  >No</option>
                                                            </select>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="phone" class="control-label">Full Day</label>
                                                            <select class="form-control" name="full_day">
                                                                <option value="yes" {{$item->full_day=='yes'?'selected':''}}  >Yes</option>
                                                                <option value="no" {{$item->full_day=='no'?'selected':''}}  >No</option>
                                                            </select>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="phone" class="control-label">Status</label>
                                                            <select class="form-control" name="status">
                                                                <option>Select an option</option>
                                                                <option value="active" {{$item->status=='active'?'selected':''}}  >Active</option>
                                                                <option value="inactive" {{$item->status=='inactive'?'selected':''}}  >Inactive</option>
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
