@extends('admin.index') @section('content')
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
                
                <button onclick="addcoupon()" class="btn btn-primary btn-flat m-b-30 m-t-30"><a href="{{ url('admin/vehicle-coupon/create') }}">{{__('messages.add_coupon')}}</a></button>
                <div class="table-responsive dtdiv">
                    <table id="dt" class="table table-striped table-bordered dttablewidth">
                        <thead>
                            <tr>
                                <th>{{__('messages.id')}}</th>
                                <th>{{__('messages.name')}}</th>
                                <th>{{__('messages.code')}}</th>
                                <th>{{__('messages.date')}}</th>
                                <th>{{__('messages.value')}}</th>
                                <th>{{__('messages.action')}}</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($records??array() as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>{{$item->name}}</td>
                                <td>{{$item->code}}</td>
                                <td>{{$item->start_date}} to {{$item->end_date}}</td>
                                <td>{{$item->value}}</td>
                                <td id="action" class="action-td">
                                    <a class="m-1" data-toggle="modal" data-target="#modal-edit{{$item->id}}" title="Edit Vehicle Schedules"><i class="fa fa-pencil" aria-hidden="true" style="margin-right: 10px;font-size: x-large;color:black"></i></a>


                                {!! Form::open([
                                                'method'=>'DELETE',
                                                'url' => ['/admin/vehicle-schedules', $item->id],
                                                'style' => 'display:inline'
                                                ]) !!}
                                {!! Form::button('<i class="fa fa-trash f-s-25"></i>', array(
                                    'type' => 'submit',
                                    'onclick' => 'return confirm("Are you sure? ");',
                                    'class' => 'm-1 btn',
                                        'data-type'=>'confirm',
                                    )) !!}
                                {!! Form::close() !!}

                                </td>
                            </tr>
                        @endforeach
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