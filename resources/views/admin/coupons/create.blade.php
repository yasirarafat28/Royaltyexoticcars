@extends('layouts.admin')
@section('style')

    <link href="https://fonts.googleapis.com/css?family=Material+Icons" rel="stylesheet">

    <link href="{{asset('admin/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css')}}" rel="stylesheet" />

@endsection

@section('content')
    <section id="main-content" class=" ">
        <div class="wrapper main-wrapper row" style=''>

            <div class='col-xs-12'>
                <div class="page-title">

                    <div class="pull-left">
                        <!-- PAGE HEADING TAG - START -->
                        <h1 class="title">Coupon/Voucher List</h1>
                        <!-- PAGE HEADING TAG - END -->
                    </div>

                    <div class="pull-right hidden-xs">
                        <ol class="breadcrumb">
                            <li>
                                <a href="/admin/dashboard"><i class="fa fa-home"></i>Home</a>
                            </li>
                            <li>
                                <a href="/admin/Coupon/Voucher"><i class="fa fa-home"></i>Coupon/Voucher List</a>
                            </li>
                            <li class="active">
                                <strong>Create
                                </strong>
                            </li>
                        </ol>
                    </div>

                </div>
            </div>
            <div class="clearfix"></div>

            <div class="col-md-offset-2 col-lg-8">
                <section class="box">

                    <header class="panel_header">
                        <h2 class="title pull-left">Create Coupon/Voucher</h2>
                        <div class="actions panel_actions pull-right">
                            <div class="form-group no-mb">
                                <a class="box_close fa fa-times"></a>
                            </div>

                        </div>
                    </header>
                    <div class="content-body">

                        <div class="row">

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

                        </div>
                        <div class="padding-30">
                            <form method="POST" action="{{ url('admin/coupons')}}" accept-charset="UTF-8" enctype="multipart/form-data">
                                {{csrf_field()}}

                                <div class="form-group col-md-6">
                                    <label for="name" class="control-label">Title</label>
                                    <input class="form-control" name="title" type="text">
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="form-label">Code</label>
                                    <div class="controls input-group">
                                        <input type="text" class="form-control" id="coupon_code_0" name="code">
                                        <span class="input-group-addon" onclick="generate_code(0);" style="cursor: pointer"><i class="fa fa-magic"></i></span>
                                    </div>
                                </div>
                                <div class="form-group  col-md-6">
                                    <label for="name" class="control-label">Minimum Purchase Amount</label>
                                    <input class="form-control" name="min_required_amount" type="number" id="name" step="amount">

                                </div>

                                <div class="form-group  col-md-6">
                                    <label for="name" class="control-label">Discount Type</label>
                                    <select name="discount_type" class="form-control" id="type">
                                        <option value="flat">Flat Amount</option>
                                        <option value="percent">Percentage</option>
                                    </select>
                                </div>
                                <div class="form-group  col-md-6">
                                    <label for="name" class="control-label">Discount</label>
                                    <input class="form-control" name="discount" type="number" id="name">
                                </div>


                                <div class="form-group  col-md-6">
                                    <label for="name" class="control-label">Max. Discount <small>(Keep it blank if discount is unlimited)</small></label>
                                    <input class="form-control" name="max_discount_amount" type="number" id="name">
                                </div>



                                <div class="form-group  col-md-6">
                                    <label for="name" class="control-label">Coupon/Vouchers</label>
                                    <select name="item_id" class="form-control" id="type">
                                        <option value="all">All</option>
                                        @foreach($products??array() as $product)
                                            <option value="{{$product->id}}">{{$product->name}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group  col-md-6">
                                    <label for="name" class="control-label">Start At</label>
                                    <input class="form-control datetimepicker" name="start_at" type="text">

                                </div>

                                <div class="form-group  col-md-6">
                                    <label for="name" class="control-label">End At</label>
                                    <input class="form-control datetimepicker" name="end_at" type="text">

                                </div>
                                <div class="form-group  col-md-6">
                                    <label for="name" class="control-label">Status</label>
                                    <select name="status" class="form-control">
                                        <option value="active">Active</option>
                                        <option value="inactive">Inactive</option>
                                    </select>
                                </div>
                                <div class="form-group  col-md-12">
                                    <label for="name" class="control-label">Note</label>

                                    <textarea name="note" class="form-control"></textarea>
                                </div>
                                <div class="form-group row text-center">
                                    <button class="btn btn-primary btn-corner col-md-offset-4 col-md-4">Save Changes</button>
                                </div>

                            </form>

                        </div>
                    </div>
                </section>

            </div>
        </div>
    </section>


    <!-- Create Modal -->

@endsection


@section('script')
    <script src="{{asset('admin/plugins/momentjs/moment.js')}}"></script> <!-- Moment Plugin Js -->
    <script src="{{asset('admin/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js')}}"></script>
    <script>
        function generate_code(id) {
            var result           = 'G';
            var length           = 8;
            var characters       = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
            var charactersLength = characters.length;
            for ( var i = 0; i < length; i++ ) {
                result += characters.charAt(Math.floor(Math.random() * charactersLength));
            }

            $('#coupon_code_'+id).val(result);
        }

    </script>
    <script>
        $('.datetimepicker').bootstrapMaterialDatePicker({
            format: 'YYYY-MM-DD  HH:mm',
            clearButton: true,
            weekStart: 1
        });
    </script>
@endsection
