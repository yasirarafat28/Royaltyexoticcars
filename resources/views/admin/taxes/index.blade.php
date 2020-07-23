@extends('layouts.admin')

@section('content')
    <section id="main-content" class=" ">
        <div class="wrapper main-wrapper row" style=''>

            <div class='col-xs-12'>
                <div class="page-title">

                    <div class="pull-left">
                        <!-- PAGE HEADING TAG - START -->
                        <h1 class="title">Tax</h1>
                        <!-- PAGE HEADING TAG - END -->
                    </div>

                    <div class="pull-right hidden-xs">
                        <ol class="breadcrumb">
                            <li>
                                <a href="/admin/dashboard"><i class="fa fa-home"></i>Home</a>
                            </li>
                            <li class="active">
                                <strong>Tax
                                </strong>
                            </li>
                        </ol>
                    </div>

                </div>
            </div>
            <div class="clearfix"></div>

            <div class="col-md-offset-4 col-md-4">
                <section class="box">

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

                    <div class="clearfix"></div>

                    <header class="panel_header" style="border-bottom:1px solid #eee">
                        <h2 class="title pull-left">Tax Rate</h2>
                        <div class="actions panel_actions pull-right">
                            <div class="form-group no-mb">
                                <a class="box_close fa fa-times"></a>
                            </div>

                        </div>
                    </header>
                    <br>
                    <div class="content-body">

                        <form action="{{url('admin/taxes')}}" method="POST" class=" padding-30"  enctype="multipart/form-data">

                            {{csrf_field()}}
                            <div class="form-group">
                                <label class="form-label">Tax Rate (%)</label>
                                <div class="controls email">
                                    <input type="number" value="{{$tax->value??0}}" step="any" class="form-control" max="100" min="0" name="value" placeholder="Tax Rate (%)">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">Status</label>
                                <select name="status" id="" class="form-control">
                                    <option value="">Select</option>
                                    <option value="active" {{isset($tax->status) && $tax->status=='active'?'selected':''}} >Active</option>
                                    <option value="inactive" {{isset($tax->status) && $tax->status=='inactive'?'selected':''}}>Inactive</option>
                                </select>
                            </div>
                            <div class="form-group row text-center">
                                <button class="btn btn-primary btn-corner">Save</button>
                            </div>
                        </form>

                    </div>
                </section>

            </div>
        </div>
    </section>


    <!-- Create Modal -->

@endsection
