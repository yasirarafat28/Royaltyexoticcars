@extends('admin.index')
@section('style')

    <link rel="stylesheet" href="/css/bootstrap-material-datetimepicker.css" />
@endsection
@section('content')
    <div class="breadcrumbs">
        <div class="col-sm-4 float-right-1">
            <div class="page-header float-left float-right-1">
                <div class="page-title">
                    <h1>Gift Card Orders</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8 float-left-1">
            <div class="page-header float-right float-left-1">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li class="active">Gift Card Orders</li>
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
                            <th>Ref ID</th>
                            <th>Customer</th>
                            <th>Card</th>
                            <th>Amount</th>
                            <th>Status</th>
                            <th>Timestamp</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($records??array() as $key=>$item)
                                <tr>
                                    <td>{{$item->txn_id}}</td>
                                    <td>
                                        <p>Name: {{$item->user->first_name??''}} {{$item->user->last_name??''}}</p>
                                        <p>Email: <a href="mailto:{{$item->user->email??''}}">{{$item->user->email??''}}</a></p>
                                    </td>
                                    <td>{{$item->package->name??'Unknown'}}</td>
                                    <td>{{$item->amount??'n/a'}} USD</td>
                                    <td>{{ucwords(str_replace('_',' ',$item->status))}}</td>
                                    <td>{{$item->created_at??'n/a'}}</td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
