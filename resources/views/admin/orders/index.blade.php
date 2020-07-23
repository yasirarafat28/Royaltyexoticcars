@extends('layouts.admin')

@section('content')
    <section id="main-content" class=" ">
        <div class="wrapper main-wrapper row" style=''>

            <div class='col-xs-12'>
                <div class="page-title">

                    <div class="pull-left">
                        <!-- PAGE HEADING TAG - START -->
                        <h1 class="title">Order List</h1>
                        <!-- PAGE HEADING TAG - END -->
                    </div>

                    <div class="pull-right hidden-xs">
                        <ol class="breadcrumb">
                            <li>
                                <a href="/admin/dashboard"><i class="fa fa-home"></i>Home</a>
                            </li>
                            <li class="active">
                                <strong>Order List
                                </strong>
                            </li>
                        </ol>
                    </div>

                </div>
            </div>
            <div class="clearfix"></div>

            <div class="col-lg-12">
                <section class="box nobox marginBottom0">
                    <div class="content-body">
                        <div class="row">
                            <div class="col-md-6 col-xs-12">
                                <div class="statistics-box">
                                    <div class="mb-15">
                                        <i class="pull-left ico-icon icon-md icon-primary">
                                            <img src="/admin/crypto-dash/s2.png" class="ico-icon-o" alt="">
                                        </i>
                                        <div class="stats">
                                            <h3 class="boldy mb-5">£ {{number_format($totalAmount??0,2)}}</h3>
                                            <span>Total Orders</span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-6 col-xs-12">
                                <div class="statistics-box">
                                    <div class="mb-15">
                                        <i class="pull-left ico-icon icon-md icon-primary">
                                            <img src="/admin/crypto-dash/s4.png" class="ico-icon-o" alt="">
                                        </i>
                                        <div class="stats">
                                            <h3 class="boldy mb-5">{{number_format($orderCount??0)}}</h3>
                                            <span>Number of Order</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- End .row -->
                    </div>
                </section>
            </div>

            <div class="clearfix"></div>

            <div class="col-lg-12">
                <section class="box">

                    <header class="panel_header">
                        <h2 class="title pull-left">Order List</h2>
                        <div class="actions panel_actions pull-right">

                        </div>
                    </header>
                    <div class="content-body">
                        <div class="row">

                            <div class="col-md-12">
                                <form action="">

                                    <div class="row">
                                        <div class="col-md-2">
                                            <label for="">Status</label>
                                            <select name="status" class="form-control selectpicker">
                                                <option value="" data-select2-id="22">Select Option</option>
                                                <option {{isset($_GET['status']) && $_GET['status']=='pending'?'selected':''}} value="pending"> Pending</option>
                                                <option {{isset($_GET['status']) && $_GET['status']=='confirmed'?'selected':''}} value="confirmed"> Confirmed</option>
                                                <option {{isset($_GET['status']) && $_GET['status']=='shipping'?'selected':''}} value="shipping">Shipping</option>
                                                <option {{isset($_GET['status']) && $_GET['status']=='shipped'?'selected':''}} value="shipped">Shipped</option>
                                                <option {{isset($_GET['status']) && $_GET['status']=='cancelled'?'selected':''}} value="cancelled">Cancelled</option>
                                                <option {{isset($_GET['status']) && $_GET['status']=='rejected'?'selected':''}} value="rejected">Rejected</option>
                                                <option {{isset($_GET['status']) && $_GET['status']=='completed'?'selected':''}} value="completed">Completed</option>
                                            </select>
                                        </div>
                                        <div class="col-md-2">
                                            <label for="">Date from</label>
                                            <input name="date_from" type="date" class="form-control" value="{{isset($_GET['date_from']) && $_GET['date_from']?date('Y-m-d',strtotime($_GET['date_from'])):''}}">
                                        </div>
                                        <div class="col-md-2">
                                            <label for="">Date To</label>
                                            <input name="date_to" type="date" class="form-control" value="{{isset($_GET['date_to']) && $_GET['date_to']?date('Y-m-d',strtotime($_GET['date_to'])):''}}">
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
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-xs-12">

                                <div class="table-responsive" data-pattern="priority-columns">
                                    <table id="tech-companies-1" class="table vm trans table-small-font no-mb table-bordered table-striped">
                                        <thead>
                                        <tr>
                                            <th>Invoice</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Total</th>
                                            <th>Status</th>
                                            <th>Timestamp</th>
                                            <th  class="action-td" >Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        @forelse($records??array() as $item)
                                            <tr>
                                                <td>{{$item->invoice}}</td>
                                                <td>{{$item->first_name??''}} {{$item->last_name??'N/A'}}</td>
                                                <td>{{$item->email??'N/A'}}</td>
                                                <td>£ {{number_format($item->total,2)}}</td>
                                                <td>{{$item->status}}</td>
                                                <td>{{$item->created_at}}</td>
                                                <td id="action" class="action-td">
                                                    <a class="btn btn-primary" href="{{url('admin/orders/'.$item->id)}}" title="Edit Vehicle Order"><i class="fa fa-paperclip" aria-hidden="true"></i> Show</a>

                                                    @if(\Illuminate\Support\Facades\Auth::user()->roles->first()->name=='super_admin')
                                                    {!! Form::open([
                                                                       'method'=>'DELETE',
                                                                       'url' => ['admin/orders/'.$item->id],
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
                                        <tr>
                                            <td colspan="7" class="text-center">No record found!</td>
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
@endsection
