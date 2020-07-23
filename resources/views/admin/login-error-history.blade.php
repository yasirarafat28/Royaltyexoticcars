@extends('layouts.admin')

@section('content')

    <section id="main-content" class="">
        <div class="wrapper main-wrapper row" style="">

            <div class="col-xs-12">
                <div class="page-title">

                    <div class="pull-left">
                        <!-- PAGE HEADING TAG - START -->
                        <h1 class="title">Login Errors</h1>
                        <!-- PAGE HEADING TAG - END -->
                    </div>

                    <div class="pull-right hidden-xs">
                        <ol class="breadcrumb">
                            <li>
                                <a href="#"><i class="fa fa-home"></i>Home</a>
                            </li>
                            <li class="active">
                                <strong>Login Errors</strong>
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
                <section class="box">
                    <header class="panel_header">
                        <div class="pull-left panel_actions">
                            <h2 class="title">Login Errors</h2>
                        </div>
                        <div class="actions panel_actions pull-right">
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
                                            <th>Email</th>
                                            <th>IP</th>
                                            <th>Device</th>
                                            <th>Browser</th>
                                            <th>City</th>
                                            <th>Country</th>
                                            <th>TimeStamp</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($records??array() as $item)
                                            <tr>

                                                <td>{{$item->email??''}}</td>
                                                <td>{{$item->ip}}</td>
                                                <td>{{$item->device}}</td>
                                                <td>{{$item->browser}}</td>
                                                <td>{{$item->city}}</td>
                                                <td>{{$item->country}}</td>
                                                <td>{{$item->time}}</td>
                                            </tr>
                                        @endforeach
                                        @if(sizeof($records)<1)
                                            <tr>
                                                <td colspan="7" class="text-center">Sorry! No data found</td>
                                            </tr>
                                        @endif

                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </section>

            </div>
        </div>
    </section>

@endsection

@section('script')
@endsection
