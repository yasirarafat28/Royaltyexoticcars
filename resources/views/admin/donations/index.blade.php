@extends('layouts.admin')

@section('content')
    <section id="main-content" class=" ">
        <div class="wrapper main-wrapper row" style=''>

            <div class='col-xs-12'>
                <div class="page-title">

                    <div class="pull-left">
                        <!-- PAGE HEADING TAG - START -->
                        <h1 class="title">Donation List</h1>
                        <!-- PAGE HEADING TAG - END -->
                    </div>

                    <div class="pull-right hidden-xs">
                        <ol class="breadcrumb">
                            <li>
                                <a href="/admin/dashboard"><i class="fa fa-home"></i>Home</a>
                            </li>
                            <li class="active">
                                <strong>Donation List
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
                                            <h3 class="boldy mb-5">£ {{number_format($totalDonation??0,2)}}</h3>
                                            <span>Total Donations</span>
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
                                            <h3 class="boldy mb-5">{{number_format($donationCount??0)}}</h3>
                                            <span>Number of Donation</span>
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
                        <h2 class="title pull-left">Donation List</h2>
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
                                                <option {{isset($_GET['status']) && $_GET['status']=='active'?'selected':''}} value="active"> Active</option>
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
                                            <th>Ref</th>
                                            <th>Bonus</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Amount</th>
                                            <th>Status</th>
                                            <th>Timestamp</th>
                                            <th  class="action-td" >Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        @foreach($records??array() as $item)
                                            <tr>
                                                <td>{{$item->ref}}</td>
                                                <td>
                                                    @if($item->donor_type=='unknown')
                                                        No
                                                    @else
                                                        Yes
                                                    @endif
                                                </td>
                                                <td>
                                                    @if($item->donor_type=='unknown')
                                                        {{$item->customer->first_name??'N/A'}} {{$item->customer->last_name}}
                                                    @else
                                                        {{$item->first_name??'N/A'}} {{$item->last_name}}
                                                    @endif
                                                </td>
                                                <td>

                                                    @if($item->donor_type=='unknown')
                                                        {{$item->customer->email??'N/A'}}
                                                    @else
                                                        {{$item->email}}
                                                    @endif
                                                </td>
                                                <td class="text-success"><strong>£ {{number_format($item->amount,2)}}</strong></td>
                                                <td>{{$item->status}}</td>
                                                <td>{{$item->created_at}}</td>
                                                <td id="action" class="action-td">
                                                    <a class="btn btn-primary" href="{{url('admin/donations/'.$item->id)}}" title="Show Donation"><i class="fa fa-paperclip" aria-hidden="true"></i> Show</a>

                                                    @if(\Illuminate\Support\Facades\Auth::user()->roles->first()->name=='super_admin')
                                                        {!! Form::open([
                                                                           'method'=>'DELETE',
                                                                           'url' => ['admin/donations/'.$item->id],
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
                                        @endforeach


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
