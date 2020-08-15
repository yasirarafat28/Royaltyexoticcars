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
                <div class="card-header mb-5">
                    <h2><strong>Invoice : # {{$order->txn_id}}</strong> </h2>

                </div>
                <div class="card-body">
                    <div class="container">

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
                        <div class="row">
                            <div class="col-md-6">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h6 class="panel-title"><i class="fa fa-shopping-cart"></i> Order Details</h6>
                                    </div>
                                    <table class="table table-sm">
                                        <tbody>
                                        <tr>
                                            <td class="text-right">
                                                Placed at:
                                            </td>
                                            <td>{{$order->created_at}}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-right">
                                                Order Status:
                                            </td>
                                            <td><span class="badge badge-danger">{{$order->status}}</span></td>
                                        </tr>
                                        <tr>
                                            <td class="text-right">
                                                Payment Status:
                                            </td>
                                            <td>
                                                <span class="badge badge-primary">
                                                    {{ucfirst($order->payment_status)}}
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-right">
                                                Expected Service Date:
                                            </td>
                                            <td><span class="badge badge-primary">{{$order->reservation_time}}</span></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h6 class="panel-title"><i class="fa fa-user"></i> Customer Details</h6>
                                    </div>
                                    <table class="table table-sm">
                                        <tbody><tr>
                                            <td>
                                                Name:
                                            </td>
                                            <td>
                                                {{$order->name}}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Email:
                                            </td>
                                            <td>
                                                {{$order->email}}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Address:
                                            </td>
                                            <td>
                                                {{$order->address}}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Phone:
                                            </td>
                                            <td>
                                                <a href="tel:{{$order->phone}}">{{$order->phone}}</a>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                            <div class="row pt-5">
                                <div class="col-md-6">
                                    <div class="panel-default">
                                        <div class="panel-header">
                                            <h6>
                                                Update Booking
                                            </h6>
                                            <hr>
                                        </div>
                                        <div class="panel-body">
                                            <form action="{{url('admin/orders',$order->id)}}" id="wizard_with_validation" class="row" method="POST" enctype="multipart/form-data">
                                                {{csrf_field()}}
                                                {{method_field('PATCH')}}

                                                <div class="col-md-6 form-group">
                                                    <label for="" class="form-label">Amount</label>
                                                    <input type="number" name="amount" step="any" id="amount" class="form-control" placeholder="Amount" value="{{$order->total}}">
                                                </div>

                                                <div class="col-md-6 form-group">
                                                    <label for="" class="form-label">Discount</label>
                                                    <input type="number" name="discount" step="any" class="form-control" placeholder="Discount" value="{{$order->discount}}">
                                                </div>

                                                <div class="col-md-12 form-group">
                                                    <label for="" class="form-label">Pickup Point</label>
                                                    <input type="text" name="pickup_point" id="pickup_point" class="form-control" placeholder="Pickup Point" value="{{$order->pickup_point}}">
                                                </div>

                                                <div class="col-md-12 form-group">
                                                    <label for="" class="form-label">Dropping Point</label>
                                                    <input type="text" name="destination_point" id="destination_point" class="form-control" placeholder="Dropping Point" value="{{$order->destination_point}}">
                                                </div>

                                                <div class="form-group col-md-6">
                                                    <label for="">Package<small> (required)</small></label>
                                                    <select class="form-control ms" name="package_id" id="package_id">
                                                        <option value="">-- Please select --</option>
                                                        @foreach($packages??array() as $item)
                                                            <option {{$item->id==$order->package_id?'selected':''}} value="{{$item->id}}" >{{$item->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>

                                                <div class="form-group col-md-6">
                                                    <label for="">Estimated Fare</label>
                                                    <h3><span style="color:darkorange" id="estimated_fare">{{$order->total}}</span> TK</h3>
                                                </div>


                                                <div class=" col-md-12">
                                                    <div class="form-group">
                                                        <label for="">Partner<small> (required)</small></label>
                                                        <select class="form-control ms" name="partner_id">
                                                            <option value="">-- Please select --</option>
                                                            @foreach($partners??array() as $item)
                                                                <option {{$item->id==$order->partner_id?'selected':''}} value="{{$item->id}}" >{{$item->business_name}} -- ({{$item->name}})</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>


                                                <div class=" col-md-12">
                                                    <div class="form-group">
                                                        <label for="">Driver<small> (required)</small></label>
                                                        <select class="form-control ms" name="driver_id">
                                                            <option value="">-- Please select --</option>
                                                            @foreach($drivers??array() as $item)
                                                                <option {{$item->id==$order->driver_id?'selected':''}} value="{{$item->id}}" >{{$item->name}} -- ({{$item->phone}})</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>


                                                <div class=" col-md-12">
                                                    <div class="form-group">
                                                        <label for="">Comment<small> (optional)</small></label>
                                                        <textarea name="comment" class="form-control" placeholder="Order Comment">{{$order->comment}}</textarea>
                                                    </div>
                                                </div>


                                                <div class="col-md-12 text-center">
                                                    <button class="btn btn-primary btn-round">Save Changes</button>
                                                </div>
                                            </form>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="panel-default">
                                        <div class="panel-header">
                                            <h6>
                                                Booking Information
                                            </h6>
                                            <hr>
                                        </div>
                                        <div class="panel-body">
                                            <table class="table table-striped table-sm">
                                                <tr>
                                                    <td class="text-right"><strong>Pickup Point:</strong></td>
                                                    <td>{{$order->pickup_point}}</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-right"><strong>Dropping Point:</strong></td>
                                                    <td>{{$order->destination_point}}</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-right"><strong>Trip Type:</strong></td>
                                                    <td>{{$order->trip_type??'Pick & Drop'}}</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-right"><strong>Distance:</strong></td>
                                                    <td>{{$order->distance_km}} KM</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-right"><strong>Duration:</strong></td>
                                                    <td>{{$order->duration_min}} Minutes</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-right"><strong>Pickup Date:</strong></td>
                                                    <td>{{$order->required_date}}</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-right"><strong>Return Date:</strong></td>
                                                    <td>{{$order->return_time}} (<small>Only for round trip</small>)</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-right"><strong>Full-filled By:</strong></td>
                                                    <td>
                                                        @if(isset($order->partner->business_name))
                                                            {{$order->partner->business_name}}  (<small>{{$order->partner->name}}</small>)
                                                        @else
                                                            Not assigned
                                                        @endif
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-right"><strong>Driving By:</strong></td>
                                                    <td>
                                                        @if(isset($order->driver->name))
                                                            {{$order->driver->name}}  (<small>{{$order->driver->phone}}</small>)
                                                        @else
                                                            Not assigned
                                                        @endif
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="text-right"><strong>Total Demand:</strong></td>
                                                    <td>{{number_format($order->total,2)}} TK</td>
                                                </tr>


                                                <tr>
                                                    <td class="text-right"><strong>Discount:</strong></td>
                                                    <td>{{number_format($order->discount-$order->voucher_discount,2)}} TK</td>
                                                </tr>


                                            </table>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        <div class="row mt-5">


                            <div class="col-md-6">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h6 class="panel-title float-left">
                                            Status History
                                        </h6>
                                        <div class="panel-title float-right">
                                            <a href="#UpdateOrderStatus" data-toggle="modal" class="btn btn-primary btn-sm"> Update Status</a>

                                        </div>
                                    </div>

                                    <div class="panel-body table-responsive">
                                        <table class="table table-striped">
                                            <thead>
                                            <tr class="">
                                                <td>Date</td>
                                                <td>Status</td>
                                                <td>Comment</td>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @forelse($order->stats??array() as $stat)
                                                <tr>
                                                    <td>{{$stat->created_at}}</td>
                                                    <td>{{$stat->status}}</td>
                                                    <td>{{$stat->note}}</td>
                                                </tr>
                                            @empty


                                                <tr>
                                                    <td colspan="3" class="text-center">No status yet!</td>
                                                </tr>
                                            @endforelse

                                            </tbody>

                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



<div class="modal" id="UpdateOrderStatus" role="dialog" aria-labelledby="myModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="title" id="">Make Payment</h6>
                <button type="button" class="close"
                        data-dismiss="modal"
                        aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('UpdateOrderStatus')}}" method="POST">
                    {{csrf_field()}}
                    <input type="hidden" name="order_id" value="{{$order->id}}">

                    <div class="form-group row">
                        <label for="name" class="col-md-4 control-label">Status</label>
                        <div class="col-md-8">
                            <select class="form-control" name="status">
                                <option value="pending"> Pending</option>
                                <option value="confirmed"> Confirmed</option>
                                <option value="on_trip">On Trip</option>
                                <option value="completed">Completed</option>
                            </select>
                        </div>
                    </div>


                    <div class="form-group row clearfix">
                        <label for="name" class="col-md-4 control-label">Note</label>
                        <div class="col-md-8">
                            <textarea name="note" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12 text-center">
                        <button class="btn btn-primary btn-round">Save Changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
