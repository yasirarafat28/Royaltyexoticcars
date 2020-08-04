@extends('layouts.admin')
@section('style')

    <link href="{{asset('admin-asset/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css')}}" rel="stylesheet" />

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
                            <li class="active">
                                <strong>Coupon/Voucher List
                                </strong>
                            </li>
                        </ol>
                    </div>

                </div>
            </div>
            <div class="clearfix"></div>

            <div class="col-lg-12">
                <section class="box">

                    <header class="panel_header">
                        <h2 class="title pull-left">Coupon/Voucher List</h2>
                        <div class="actions panel_actions pull-right">
                            <div class="form-group no-mb">
                                <button  onclick="window.location='/admin/coupons/create';" class="btn btn-primary btn-corner "><i class="fa fa-plus"></i> New</button>

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

                            <div class="clearfix"></div>

                            <div class="col-xs-12">
                                <form action="">
                                    <div class="col-md-3">
                                        <label for="">Filter by</label>
                                        <select name="status" id="" class="form-control">
                                            <option value="">Select</option>
                                            <option value="active" {{isset($_GET['status']) && $_GET['status']=='active'?'selected':''}}>Active</option>
                                            <option value="inactive" {{isset($_GET['status']) && $_GET['status']=='inactive'?'selected':''}}>Inactive</option>
                                            <option value="expired" {{isset($_GET['status']) && $_GET['status']=='expired'?'selected':''}}>Expired</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="">Coupon/Voucher Code</label>
                                        <input name="q" type="text" class="form-control" value="{{$_GET['q']??''}}">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="" class="mb-1"></label>
                                        <button type="submit" class="btn btn-primary form-control">Search</button>
                                    </div>
                                    <div class="clearfix"></div>
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
                                            <th>Title</th>
                                            <th>Code</th>
                                            <th>Discount</th>
                                            <th>Status</th>
                                            <th>Expire At</th>
                                            <th  class="action-td" >Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        @forelse($records??array() as $item)
                                            <tr>
                                                <td>{{$item->title}}</td>
                                                <td>{{$item->code}}</td>
                                                <td>
                                                    @if($item->discount_type=='flat')
                                                        {{$item->discount}}
                                                    @else
                                                        {{$item->discount}} %
                                                    @endif
                                                </td>
                                                <td>
                                                    @if(date('Y-m-d H:i:s') > $item->end_at)
                                                        Expired
                                                    @else
                                                        {{ucfirst($item->status)}}
                                                    @endif
                                                </td>
                                                <td>{{$item->end_at}}</td>
                                                <td id="action" class="action-td">
                                                    <a class="btn btn-primary" href="{{url('admin/coupons/'.$item->id.'/edit')}}" title="Edit Coupon/Voucher"><i class="fa fa-eye" aria-hidden="true"></i> Edit</a>
                                                    <a class="btn btn-primary" data-toggle="modal" data-target="#modal-show{{$item->id}}" title="Show Coupon/Voucher"><i class="fa fa-eye" aria-hidden="true"></i> Show</a>

                                                    @if(\Illuminate\Support\Facades\Auth::user()->roles->first()->name=='super_admin')
                                                    {!! Form::open([
                                                                       'method'=>'DELETE',
                                                                       'url' => ['admin/coupons/'.$item->id],
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
                                            <tr class="text-center">
                                                <td colspan="7"><strong>Sorry!</strong> Found no records</td>
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
        @foreach($records??array() as $key=>$item)
            <!--Edit Modal -->
                <div class="modal fade" id="modal-show{{$item->id}}">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title">Show Coupon/Voucher</h4>
                            </div>
                            <div class="modal-body">



                                <table class="table">
                                    <tbody>
                                    <tr>
                                        <td>Title</td>
                                        <td>{{$item->title}}</td>
                                    </tr>
                                    <tr>
                                        <td>Code</td>
                                        <td>{{$item->code}}</td>
                                    </tr>
                                    <tr>
                                        <td>Discount</td>
                                        <td>
                                            @if($item->discount_type=='flat')
                                                Flat Amount
                                            @else
                                                Percentage
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Discount</td>
                                        <td>
                                            @if($item->discount_type=='flat')
                                                {{$item->discount}}
                                            @else
                                                {{$item->discount}} %
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Start At</td>
                                        <td>{{$item->start_at}}</td>
                                    </tr>
                                    <tr>
                                        <td>End At</td>
                                        <td>{{$item->end_at}}</td>
                                    </tr>
                                    <tr>
                                        <td>Note</td>
                                        <td>{{$item->note}}</td>
                                    </tr>
                                    <tr>
                                        <td>Status</td>
                                        <td>
                                            @if(date('Y-m-d H:i:s') > $item->end_at)
                                                Expired
                                            @else
                                                {{ucfirst($item->status)}}
                                            @endif
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </section>


    <!-- Create Modal -->

@endsection


@section('script')
    <script src="{{asset('admin-asset/plugins/momentjs/moment.js')}}"></script> <!-- Moment Plugin Js -->
    <script src="{{asset('admin-asset/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js')}}"></script>
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
            format: 'DD-MM-YYYY  HH:mm',
            clearButton: true,
            weekStart: 1
        });
    </script>
@endsection
