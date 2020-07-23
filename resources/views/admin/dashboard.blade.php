@extends('layouts.admin')

@section('content')
    <section id="main-content" class=" ">
        <div class="wrapper main-wrapper row" style=''>

            <div class='col-xs-12'>
                <div class="page-title">

                    <div class="pull-left">
                        <h1 class="title">Dashboard</h1>
                    </div>

                </div>
            </div>
            <div class="col-lg-12">
                <section class="box nobox marginBottom0">
                    <div class="content-body">
                        <div class="row">

                            <div class="col-lg-3 col-sm-6 col-xs-12">
                                <div class="statistics-box">
                                    <div class="mb-15">
                                        <i class="pull-left ico-icon icon-md icon-primary">
                                            <img src="/admin/crypto-dash/s1.png" class="ico-icon-o" alt="">
                                        </i>
                                        <div class="stats">
                                            <h3 class="boldy mb-5">{{$customers??0}}</h3>
                                            <span>Customer</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-xs-12">
                                <div class="statistics-box">
                                    <div class="mb-15">
                                        <i class="pull-left ico-icon icon-md icon-primary">
                                            <img src="/admin/crypto-dash/s2.png" class="ico-icon-o" alt="">
                                        </i>
                                        <div class="stats">
                                            <h3 class="boldy mb-5">£ {{number_format($totalSales??0,2)}}</h3>
                                            <span>Total Sales</span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-xs-12">
                                <div class="statistics-box">
                                    <div class="mb-15">
                                        <i class="pull-left ico-icon icon-md icon-primary">
                                            <img src="/admin/crypto-dash/s2.png" class="ico-icon-o" alt="">
                                        </i>
                                        <div class="stats">
                                            <h3 class="boldy mb-5">£ {{number_format($totalDonations??0,2)}}</h3>
                                            <span>Total Donation</span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-xs-12">
                                <div class="statistics-box">
                                    <div class="mb-15">
                                        <i class="pull-left ico-icon icon-md icon-primary">
                                            <img src="/admin/crypto-dash/s4.png" class="ico-icon-o" alt="">
                                        </i>
                                        <div class="stats">
                                            <h3 class="boldy mb-5">{{number_format($orderCount)}}</h3>
                                            <span>Number of Sales</span>
                                        </div>
                                    </div>
                                </div>
                            </div>




                            <div class="col-lg-3 col-sm-6 col-xs-12">
                                <div class="statistics-box">
                                    <div class="mb-15">
                                        <i class="pull-left ico-icon icon-md icon-primary">
                                            <img src="/admin/crypto-dash/s3.png" class="ico-icon-o" alt="">
                                        </i>
                                        <div class="stats">
                                            <h3 class="boldy mb-5">{{$teamCount??0}}</h3>
                                            <span>Team Member</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-xs-12">
                                <div class="statistics-box">
                                    <div class="mb-15">
                                        <i class="pull-left ico-icon icon-md icon-primary">
                                            <img src="/admin/crypto-dash/s3.png" class="ico-icon-o" alt="">
                                        </i>
                                        <div class="stats">
                                            <h3 class="boldy mb-5">{{$newsletterCount??0}}</h3>
                                            <span>Newsletter</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-xs-12">
                                <div class="statistics-box">
                                    <div class="mb-15">
                                        <i class="pull-left ico-icon icon-md icon-primary">
                                            <img src="/admin/crypto-dash/s3.png" class="ico-icon-o" alt="">
                                        </i>
                                        <div class="stats">
                                            <h3 class="boldy mb-5">{{$betaCount??0}}</h3>
                                            <span>Beta Signup</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-xs-12">
                                <div class="statistics-box">
                                    <div class="mb-15">
                                        <i class="pull-left ico-icon icon-md icon-primary">
                                            <img src="/admin/crypto-dash/s3.png" class="ico-icon-o" alt="">
                                        </i>
                                        <div class="stats">
                                            <h3 class="boldy mb-5">{{$subscriptionCount??0}}</h3>
                                            <span>Subscriptions</span>
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

            <div class="col-lg-8">
                <section class="box" style="overflow:hidden">
                    <header class="panel_header">

                        <h2 class="title pull-left">Sales Statistics</h2>
                        <div class="actions panel_actions pull-right">
                            <a class="box_toggle fa fa-chevron-down"></a>
                            <a class="box_close fa fa-times"></a>
                        </div>
                    </header>
                    <div class="content-body">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="div">
                                    <canvas id="sales-chart" height="434" width="1307" style="width: 995px; height: 450px;"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>


            <div class="col-xs-12 col-md-4">
                <section class="box ">
                    <header class="panel_header">
                        <h2 class="title pull-left">Purchase Status</h2>
                        <div class="actions panel_actions pull-right">
                            <a class="box_toggle fa fa-chevron-down"></a>
                            <a class="box_close fa fa-times"></a>
                        </div>
                    </header>
                    <div class="content-body pb10">
                        <div class="row">
                            <div class="col-xs-8 col-md-offset-2 col-sm-offset-2 col-xs-offset-2 mb-20">
                                <canvas id="order-status-chart" width="250" height="250"></canvas>
                            </div>
                            @foreach($orderStatus as $key=>$item)
                                <div class="col-md-6 col-xs-12">
                                    <div class="token-info">
                                        <div class="info-wrapper three" style="padding: 5px 15px;">
                                            <div class="token-descr">
                                                <h3 class="bold mt-0 mb-0">{{$item->count}} <small>
                                                        {{ucfirst($item->status)}}</small></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </section>
            </div>


            <div class="clearfix"></div>

            <div class="col-lg-6">
                <section class="box">
                    <header class="panel_header">
                        <h2 class="title pull-left">Recent Orders</h2>
                        <div class="actions panel_actions pull-right">
                            <a class="box_toggle fa fa-chevron-down"></a>
                            <a class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></a>
                            <a class="box_close fa fa-times"></a>
                        </div>
                    </header>
                    <div class="content-body">
                        <div class="row">
                            <div class="col-xs-12">

                                <div class="table-responsive" data-pattern="priority-columns">
                                    <table id="tech-companies-1" class="table vm table-small-font no-mb table-bordered table-striped">
                                        <thead>
                                        <tr>
                                            <th  class="action-td" >Action</th>
                                            <th>Name</th>
                                            <th>Total</th>
                                            <th>Status</th>
                                            <th>Timestamp</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        @forelse($recentOrders??array() as $item)
                                            <tr>
                                                <td id="action" class="action-td">
                                                    <a class="btn btn-primary" href="{{url('admin/orders/'.$item->id)}}" title="show order"><i class="fa fa-paperclip" aria-hidden="true"></i></a>


                                                </td>
                                                <td>{{$item->first_name??''}} {{$item->last_name??'N/A'}}</td>
                                                <td class="text-success"><strong>£ {{number_format($item->total-$item->discount,2)}}</strong></td>
                                                <td><span class="badge  w-70 round-primary">{{$item->status}}</span></td>
                                                <td>{{$item->created_at}}</td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="7" class="text-center">Sorry! Found no records!</td>
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

            <div class="col-lg-6">
                <section class="box">
                    <header class="panel_header">
                        <h2 class="title pull-left">Donation History</h2>
                        <div class="actions panel_actions pull-right">
                            <a class="box_toggle fa fa-chevron-down"></a>
                            <a class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></a>
                            <a class="box_close fa fa-times"></a>
                        </div>
                    </header>
                    <div class="content-body">
                        <div class="row">
                            <div class="col-xs-12">

                                <div class="table-responsive" data-pattern="priority-columns">
                                    <table id="tech-companies-1" class="table vm trans table-small-font no-mb table-bordered table-striped">

                                        <thead>
                                        <tr>
                                            <th  class="action-td" >Action</th>
                                            <th>Name</th>
                                            <th>Amount</th>
                                            <th>Status</th>
                                            <th>Timestamp</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        @forelse($recentDonations??array() as $item)
                                            <tr>
                                                <td id="action" class="action-td">
                                                    <a class="btn btn-primary" href="{{url('admin/donations/'.$item->id)}}" title="Show Donation"><i class="fa fa-paperclip" aria-hidden="true"></i></a>

                                                </td>
                                                <td>
                                                    @if($item->donor_type=='unknown')
                                                        N/A
                                                    @else
                                                        {{$item->first_name??'N/A'}} {{$item->last_name}}
                                                    @endif
                                                </td>
                                                <td class="text-success"><strong>£ {{number_format($item->amount,2)}}</strong></td>
                                                <td><span class="badge  w-70 round-primary">{{$item->status}}</span></td>
                                                <td>{{$item->created_at}}</td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="7" class="text-center">
                                                    Sorry! Found no records

                                                </td>
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



            <div class="clearfix"></div>

            <!-- MAIN CONTENT AREA ENDS -->
        </div>
    </section>
@endsection
@section('script')
    <script>

        /*Line Chart*/
        if($("#sales-chart").length){
            var randomScalingFactor = function() {
                return Math.round(Math.random() * 100)
            };
            var ChartLabels = [];
            var ChartValues = [];

            @foreach($salesData as $item)
                ChartLabels.push("{{date('M, d',strtotime($item->date))}}");
                ChartValues.push("{{$item->total}}");
            @endforeach

            var lineChartData = {
                    labels: ChartLabels,
                    datasets: [{
                        label: "My First dataset",
                        fillColor: "rgba(63,81,181,0.5)",
                        strokeColor: "rgba(63,81,181,1)",
                        pointColor: "rgba(63,81,181,1)",
                        pointStrokeColor: "#fff",
                        pointHighlightFill: "#fff",
                        pointHighlightStroke: "rgba(63,81,181,1)",
                        data: ChartValues
                    }],

                };

            var ctx = document.getElementById("sales-chart").getContext("2d");
            window.myLine = new Chart(ctx).Line(lineChartData, {
                responsive: true
            });

        }


        if($("#order-status-chart").length){

            /* Donut Chart*/
            let colors = ['#E91E63','rgba(63,81,181,1)','#FFC107','rgba(103,58,183,1.0)','#E62C63','orange'];

            var doughnutData = [

                @foreach($orderStatus as $key=>$item)
                {
                    value: parseFloat("{{$item->count}}"),
                    color: colors[parseInt("{{$key}}")],
                    highlight: "rgba(250,133,100,0.8)",
                    label: "{{ucfirst($item->status)}}"
                },
                @endforeach

            ];

            var ctxd = document.getElementById("order-status-chart").getContext("2d");
            window.myDoughnut = new Chart(ctxd).Doughnut(doughnutData, {
                responsive: true
            });
        }
    </script>
@endsection
