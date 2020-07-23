@extends('layouts.admin')

@section('content')
    <section id="main-content" class=" ">
        <div class="wrapper main-wrapper row" style=''>

            <div class='col-xs-12'>
                <div class="page-title">

                    <div class="pull-left">
                        <!-- PAGE HEADING TAG - START -->
                        <h1 class="title">Progress Block Setting</h1>
                        <!-- PAGE HEADING TAG - END -->
                    </div>

                    <div class="pull-right hidden-xs">
                        <ol class="breadcrumb">
                            <li>
                                <a href="/admin/dashboard"><i class="fa fa-home"></i>Home</a>
                            </li>
                            <li class="active">
                                <strong>Progress Block Setting
                                </strong>
                            </li>
                        </ol>
                    </div>

                </div>
            </div>
            <div class="clearfix"></div>


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

            @foreach($variables as $item)
                <div class="col-md-4">
                <section class="box">
                    <div class="clearfix"></div>

                    <header class="panel_header" style="border-bottom:1px solid #eee">
                        <h2 class="title pull-left">{{ucwords(str_replace('_',' ',$item->name))}}</h2>
                        <div class="actions panel_actions pull-right">
                            <div class="form-group no-mb">
                                <a class="box_close fa fa-times"></a>
                            </div>

                        </div>
                    </header>
                    <br>
                    <div class="content-body">
                        <form action="{{url('admin/progress-block/'.$item->id)}}" method="POST" class=" padding-30"  enctype="multipart/form-data">

                            {{csrf_field()}}
                            {{method_field('PATCH')}}
                            <div class="form-group">
                                <label for="">Step</label>
                                <select name="value" id="" class="form-control">
                                    <option value="">Select</option>
                                    <option {{$item->value==1?'selected':''}} value="1">1st Step</option>
                                    <option {{$item->value==2?'selected':''}} value="2">2nd Step</option>
                                    <option {{$item->value==3?'selected':''}} value="3">3rd Step</option>
                                    <option {{$item->value==4?'selected':''}} value="4">4th Step</option>
                                </select>
                            </div>
                            <div class="form-group row text-center">
                                <button class="btn btn-primary btn-corner">Save</button>
                            </div>
                        </form>

                    </div>
                </section>

            </div>
            @endforeach

            @foreach($number_variables as $item)
                <div class="col-md-4">
                <section class="box">
                    <div class="clearfix"></div>

                    <header class="panel_header" style="border-bottom:1px solid #eee">
                        <h2 class="title pull-left">{{ucwords(str_replace('_',' ',$item->name))}}</h2>
                        <div class="actions panel_actions pull-right">
                            <div class="form-group no-mb">
                                <a class="box_close fa fa-times"></a>
                            </div>

                        </div>
                    </header>
                    <br>
                    <div class="content-body">
                        <form action="{{url('admin/progress-block/'.$item->id)}}" method="POST" class=" padding-30"  enctype="multipart/form-data">

                            {{csrf_field()}}
                            {{method_field('PATCH')}}
                            <div class="form-group">
                                <label for="">Value</label>
                                <input type="text" name="value" value="{{$item->value}}" class="form-control">
                            </div>
                            <div class="form-group row text-center">
                                <button class="btn btn-primary btn-corner">Save</button>
                            </div>
                        </form>

                    </div>
                </section>

            </div>
            @endforeach
        </div>
    </section>


    <!-- Create Modal -->

@endsection
