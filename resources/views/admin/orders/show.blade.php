@extends('layouts.admin')

@section('style')
    <style>
        .panel-heading{
            padding: 10px 20px;
        }
    </style>
@endsection
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
                            <li>
                                <a href="/admin/products"><i class="fa fa-home"></i>Order List</a>
                            </li>
                            <li class="active">
                                <strong>Show
                                </strong>
                            </li>
                        </ol>
                    </div>

                </div>
            </div>
            <div class="clearfix"></div>

            <div class="col-md-12">
                <section class="box">

                    <header class="panel_header">
                        <h2 class="title pull-left">Order Information</h2>
                        <div class="actions panel_actions pull-right">
                            <div class="form-group no-mb">
                                <a class="box_close fa fa-times"></a>
                            </div>

                        </div>
                    </header>
                    <hr>
                    <br>
                    <div class="content-body">

                        <div class="col-md-12">

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
                                                <td class="text-right"> Invoice no:
                                                </td>
                                                <td>
                                                    <strong class="text-info">{{$order->invoice}}</strong>
                                                </td>
                                            </tr>
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
                                                <td><span class="badge @if($order->status=='pending')badge-info@elseif($order->status=='completed' || $order->status=='shipped')badge-success @else badge-danger @endif">{{$order->status}}</span></td>
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
                                                    Grand Total:
                                                </td>
                                                <td>
                                                    <strong class="text-success">£ {{number_format($order->total-$order->discount??'0',2)}}</strong>
                                                </td>
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
                                                    {{$order->first_name}} {{$order->last_name}}
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
                                                    #{{$order->house_no?$order->house_no.',':''}}
                                                    {{$order->address?$order->address.',':''}}
                                                    {{$order->city?$order->city.',':''}}
                                                    {{$order->country->name?$order->country->name.',':''}}
                                                    {{$order->zip_code?$order->zip_code:''}}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Country:
                                                </td>
                                                <td>
                                                    {{$order->country->name??'N/A'}}
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

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="panel panel-default">
                                            <div class="panel-heading clearfix">
                                                <h6 class="panel-title float-left">
                                                    Order Items
                                                </h6>
                                            </div>

                                            <div class="panel-body table-responsive">
                                                <table class="table table-striped">
                                                    <thead class="bg-primary">
                                                    <tr>
                                                        <td class="text-center">Photo</td>
                                                        <td class="text-left">Title</td>
                                                        <td class="text-right">Unit Price</td>
                                                        <td class="text-left">Quantity</td>
                                                        <td class="text-right">Total</td>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @forelse($order->items??array() as $item)

                                                        <tr>
                                                            <td class="text-center">
                                                                <a href="#">
                                                                    <img src="{{asset($item->image??'')}}" alt="{{$item->name}}" style="width: 50px;">
                                                                </a>
                                                            </td>
                                                            <td class="text-left">{{$item->name}} ({{ucwords($item->color)}})</td>
                                                            <td class="text-right">£ <span>{{$item->price}}</span></td>
                                                            <td class="text-right">
                                                                {{$item->quantity}}

                                                            </td>
                                                            <td class="text-right">£ <span>{{$item->price*$item->quantity}}</span></td>
                                                        </tr>
                                                    @empty
                                                        <tr>
                                                            <td colspan="5" class="text-center">Found no items!</td>
                                                        </tr>
                                                    @endforelse

                                                    @if(sizeof($order->items)>0)

                                                        <tr>
                                                            <td colspan="3"></td>
                                                            <td class="text-right"><strong>Sub-Total:</strong></td>
                                                            <td class="text-right">
                                                                £ {{number_format($order->total,2)}}</td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="3"></td>
                                                            <td class="text-right"><strong>Discount:</strong></td>
                                                            <td class="text-right">
                                                                £ {{number_format($order->discount??'0',2)}}</td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="3"></td>
                                                            <td class="text-right"><strong>Total:</strong></td>
                                                            <td class="text-right text-success">
                                                                <strong>£ {{number_format($order->total-$order->discount??'0',2)}}</strong>
                                                            </td>
                                                        </tr>
                                                    @endif
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>

                                    </div>
                                </div>


                            <div class="row mt-5">

                                <div class="col-md-12">
                                    <div class="panel panel-default">
                                        <div class="panel-heading clearfix">
                                            <h6 class="panel-title pull-left">
                                                Status History
                                            </h6>
                                            <div class="pull-right">
                                                <a href="#UpdateOrderStatus" data-toggle="modal" class="btn btn-primary btn-corner btn-sm"> Update Status</a>

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
                </section>

            </div>
        </div>
    </section>


    <div class="modal fade in" id="UpdateOrderStatus" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn btn-danger btn-corner pull-right" data-dismiss="modal">CLOSE</button>
                    <h4 class="title pull-left" id="">Update order status</h4>
                </div>
                <div class="clearfix"></div>
                <div class="modal-body">
                    <form action="{{route('UpdateOrderStatus')}}" method="POST">
                        {{csrf_field()}}
                        <input type="hidden" name="order_id" value="{{$order->id}}">

                        <div class="form-group row">
                            <label for="name" class="col-md-4 control-label">Status</label>
                            <div class="col-md-8">
                                <select class="form-control" name="status"><option value="" data-select2-id="22">Select Option</option>
                                    <option {{$order->status=='pending'?'selected':''}} value="pending"> Pending</option>
                                    <option {{$order->status=='confirmed'?'selected':''}} value="confirmed"> Confirmed</option>
                                    <option {{$order->status=='shipping'?'selected':''}} value="shipping">Shipping</option>
                                    <option {{$order->status=='shipped'?'selected':''}} value="shipped">Shipped</option>
                                    <!--<option {{$order->status=='cancelled'?'selected':''}} value="cancelled">Cancelled</option>
                                    <option {{$order->status=='rejected'?'selected':''}} value="rejected">Rejected</option>-->
                                    <option {{$order->status=='completed'?'selected':''}} value="completed">Completed</option>

                                </select>
                            </div>
                        </div>


                        <div class="form-group row clearfix">
                            <label for="name" class="col-md-4 control-label">Note</label>
                            <div class="col-md-8">
                                <textarea name="note" class="form-control"></textarea>
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

@endsection
