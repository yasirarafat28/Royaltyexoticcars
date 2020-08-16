@extends('admin.index') 
@section('content')
<div class="breadcrumbs">
    <div class="col-sm-4 float-right-1">
      <div class="page-header float-left float-right-1">
            <div class="page-title">
                <h1>{{__('messages.coupon')}}</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8 float-left-1">
      <div class="page-header float-right float-left-1">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li class="active">{{__('messages.coupon')}}</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="content mt-3">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                @if(Session::has('message'))
                <div class="col-sm-12">
                    <div class="alert  {{ Session::get('alert-class', 'alert-info') }} alert-dismissible fade show" role="alert">{{ Session::get('message') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
                @endif


                <a class="btn btn-primary btn-flat m-b-30 m-t-30" href="{{ url('admin/vehicle-coupon/create') }}">{{__('messages.add_coupon')}}</a>
                <div class="table-responsive dtdiv">
                    <table id="dt" class="table table-striped table-bordered dttablewidth">
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
                                    <a class="btn btn-primary" href="{{url('admin/vehicle-coupon/'.$item->id.'/edit')}}" title="Edit Coupon/Voucher"><i class="fa fa-eye" aria-hidden="true"></i> Edit</a>
                                    <a class="btn btn-primary" data-toggle="modal" data-target="#modal-show{{$item->id}}" title="Show Coupon/Voucher"><i class="fa fa-eye" aria-hidden="true"></i> Show</a>
                                    {!! Form::open([
                                                                                               'method'=>'DELETE',
                                                                                               'url' => ['admin/vehicle-coupon/'.$item->id],
                                                                                               'style' => 'display:inline'
                                                                                            ]) !!}
                                    {!! Form::button('Delete', array(
                                         'type' => 'submit', 
                                         'onclick' => 'return confirm("Are you sure? ");',
                                         'class' => 'btn btn-danger',
                                            'data-type'=>'confirm',
                                         )) !!}
                                    {!! Form::close() !!}

                                </td>
                            </tr>
                        @empty
                            <tr class="text-center">
                                <td colspan="7"><strong>Sorry!</strong> Found no records</td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@stop


@section('footer')
    <script>

        $('#dt').dataTable();
    </script>
@endsection
