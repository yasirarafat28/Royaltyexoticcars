@extends('admin.index')
@section('style')

    <link rel="stylesheet" href="/css/bootstrap-material-datetimepicker.css" />
@endsection
@section('content')
    <div class="breadcrumbs">
        <div class="col-sm-4 float-right-1">
            <div class="page-header float-left float-right-1">
                <div class="page-title">
                    <h1>Vehicle Orders</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8 float-left-1">
            <div class="page-header float-right float-left-1">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li class="active">Vehicle Orders</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="content mt-3">
        <div class="col-12">
            <div class="card">
                <div class="card-header" style="display: flex;">
                    <h2 class="mr-5"><strong>Orders</strong> </h2>
                    <!--<a class="btn btn-primary" data-toggle="modal" data-target="#modal-create"><i class="fa fa-plus" aria-hidden="true"></i> Create Vehicle Orders</a>-->
                </div>
                <div class="card-body table-responsive">


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
                    <form action="">

                        <div class="row">
                            <div class="col-md-2">
                                <label for="">Status</label>
                                <select name="status" id="" class="form-control">
                                    <option value="">Select Option</option>
                                    <option {{isset($_GET['status'])   &&  $_GET['status'] =='pending'?'selected':''}} value="pending"> Pending</option>
                                    <option {{isset($_GET['status'])   &&  $_GET['status'] =='confirmed'?'selected':''}} value="confirmed">Confirmed</option>
                                    <option {{isset($_GET['status'])   &&  $_GET['status'] =='on_trip'?'selected':''}} value="on_trip">On Trip</option>
                                    <option {{isset($_GET['status'])   &&  $_GET['status'] =='completed'?'selected':''}} value="completed">Completed</option>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <label for="">Date from</label>
                                <input name="date_from" type="date" class="form-control" value="{{$_GET['date_from']??''}}">
                            </div>
                            <div class="col-md-2">
                                <label for="">Date To</label>
                                <input name="date_to" type="date" class="form-control" value="{{$_GET['date_to']??''}}">
                            </div>
                            <div class="col-md-2">
                                <label for="">Action</label>
                                <div class="row">
                                    <button type="submit" class="btn btn-primary btn-sm col-md-12">Find</button>

                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </form>
                    <br>
                    <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                        <thead>
                        <tr>
                            <th>Invoice</th>
                            <th>Name</th>
                            <th>Vehicle</th>
                            <th>Total</th>
                            <th>Reservation Time</th>
                            <th>Status</th>
                            <th>Timestamp</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($records??array() as $key=>$item)
                                <tr>
                                    <td>{{$item->txn_id}}</td>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->vehicle->name??'Unknown'}}</td>
                                    <td>{{$item->grand_total??'n/a'}}</td>
                                    <td>{{$item->reservation_time}}</td>
                                    <td>{{ucwords(str_replace('_',' ',$item->status))}}</td>
                                    <td>{{$item->created_at??'n/a'}}</td>
                                    <td>
                                        <a href="{{url('admin/vehicle-orders/'.$item->id)}}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>

                                        {!! Form::open([
                                                       'method'=>'DELETE',
                                                       'url' => ['/admin/vehicle-orders', $item->id],
                                                       'style' => 'display:inline'
                                                    ]) !!}
                                        {!! Form::button('<i class="fa fa-trash"></i>', array(
                                             'type' => 'submit',
                                             'onclick' => 'return confirm("Are you sure? ");',
                                             'class' => 'btn btn-danger btn-sm',
                                                'data-type'=>'confirm',
                                             )) !!}
                                        {!! Form::close() !!}

                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
