@extends('layouts.admin')

@section('content')

    <section id="main-content" class="">
        <div class="wrapper main-wrapper row" style="">

            <div class="col-xs-12">
                <div class="page-title">

                    <div class="pull-left">
                        <!-- PAGE HEADING TAG - START -->
                        <h1 class="title">Website Report</h1>
                        <!-- PAGE HEADING TAG - END -->
                    </div>

                    <div class="pull-right hidden-xs">
                        <ol class="breadcrumb">
                            <li>
                                <a href="#"><i class="fa fa-home"></i>Home</a>
                            </li>
                            <li class="active">
                                <strong>Website Report</strong>
                            </li>
                        </ol>
                    </div>

                </div>
            </div>
            <div class="clearfix"></div>
            <!-- MAIN CONTENT AREA STARTS -->
            <div class="col-lg-12">


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
            </div>


            <div class="col-lg-12">
                <section class="box nobox marginBottom0">
                    <div class="content-body">

                        <div class="row">

                            <div class="col-md-12">
                                <form action="">

                                    <div class="row">
                                        <div class="col-md-4">
                                            <label for="">Date from</label>
                                            <input name="start_at" type="date" class="form-control" value="{{date('Y-m-d',strtotime($start_at))}}">
                                        </div>
                                        <div class="col-md-4">
                                            <label for="">Date To</label>
                                            <input name="end_at" type="date" class="form-control" value="{{date('Y-m-d',strtotime($end_at))}}">
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

                            <div class="col-lg-3 col-sm-6 col-xs-12">
                                <div class="statistics-box">
                                    <div class="mb-15">
                                        <i class="pull-left ico-icon icon-md icon-primary">
                                            <img src="/admin/crypto-dash/s3.png" class="ico-icon-o" alt="">
                                        </i>
                                        <div class="stats">
                                            <h3 class="boldy mb-5">{{$tilesData['ga:sessions']??0}}</h3>
                                            <span>Sessions</span>
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
                                            <h3 class="boldy mb-5">{{$tilesData['ga:users']??0}}</h3>
                                            <span>Visitors</span>
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
                                            <h3 class="boldy mb-5">{{$tilesData['ga:newUsers']??0}}</h3>
                                            <span>New Visitors</span>
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
                                            <h3 class="boldy mb-5">{{number_format($tilesData['ga:pageviewsPerSession']??0,2)}}</h3>
                                            <span>Page Views/Session</span>
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
                                            <h3 class="boldy mb-5">{{$tilesData['ga:pageviews']??0}}</h3>
                                            <span>Page Preview</span>
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
                                            <h3 class="boldy mb-5">{{number_format($tilesData['ga:bounceRate']??0,2)}}%</h3>
                                            <span>Bounce Rate</span>
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
                                            <h3 class="boldy mb-5">{{number_format($tilesData['ga:avgSessionDuration']??0,2)}} <small>Sec</small></h3>
                                            <span>Avg. Session Duration</span>
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
                                            <h3 class="boldy mb-5">{{number_format($tilesData['ga:sessionsPerUser']??0,2)}}</h3>
                                            <span>Sessions/Visitors</span>
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

            <div class="col-md-8">
                <section class="box ">
                    <header class="panel_header">
                        <h2 class="title pull-left">Visitor Statics</h2>
                        <div class="actions panel_actions pull-right">
                            <a class="box_toggle fa fa-chevron-down"></a>
                            <a class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></a>
                            <a class="box_close fa fa-times"></a>
                        </div>
                    </header>
                    <div class="content-body">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="div">
                                    <canvas id="visitor-chart" height="434" width="1307" style="width: 995px; height: 331px;"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div><div class="col-xs-12 col-md-4">
                <section class="box ">
                    <header class="panel_header">
                        <h2 class="title pull-left">Browser Sessions</h2>
                        <div class="actions panel_actions pull-right">
                            <a class="box_toggle fa fa-chevron-down"></a>
                            <a class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></a>
                            <a class="box_close fa fa-times"></a>
                        </div>
                    </header>
                    <div class="content-body pb10">
                        <div class="row">
                            <div class="col-xs-8 col-md-offset-2 col-sm-offset-2 col-xs-offset-2 mb-20">
                                <canvas id="browser-chart" width="400" height="400"></canvas>
                            </div>

                            @foreach($fetchTopBrowsers as $key=>$item)
                                <div class="col-md-6 col-xs-12">
                                    <div class="token-info">
                                        <div class="info-wrapper three">
                                            <div class="token-descr">
                                                <h3 class="bold mt-0 mb-0">{{$item['sessions']}}</h3>
                                                {{$item['browser']}}
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
        </div>
    </section>

@endsection

@section('script')

    <script>

        if($("#browser-chart").length){

            /* Donut Chart*/
            let colors = ['#E91E63','rgba(63,81,181,1)','#FFC107','rgba(103,58,183,1.0)','#E62C63','orange'];

            var doughnutData = [
                @foreach($fetchTopBrowsers as $key=>$item)
                    {
                    value: parseInt("{{$item['sessions']}}"),
                    color: colors[parseInt("{{$key}}")],
                    highlight: "rgba(250,133,100,0.8)",
                    label: "{{$item['browser']}}"
                },
                @endforeach

            ];

            var ctxd = document.getElementById("browser-chart").getContext("2d");
            window.myDoughnut = new Chart(ctxd).Doughnut(doughnutData, {
                responsive: true
            });
        }
        if($("#visitor-chart").length){
            var randomScalingFactor = function() {
                return Math.round(Math.random() * 100)
            };

            var ChartLabels = [];
            var ChartValues = [];
            @foreach($TotalVisitorAndPageViews as $item)
                ChartLabels.push("{{date('M, d',strtotime($item['date']))}}");
                ChartValues.push("{{$item['visitors']}}");
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

            }

            var ctx = document.getElementById("visitor-chart").getContext("2d");
            window.myLine = new Chart(ctx).Line(lineChartData, {
                responsive: true
            });

        }
    </script>
@endsection
