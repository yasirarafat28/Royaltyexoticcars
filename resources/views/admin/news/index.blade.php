@extends('admin.index')
@section('content')
<div class="breadcrumbs">
    <div class="col-sm-4 float-right-1">
      <div class="page-header float-left float-right-1">
            <div class="page-title">
                <h1>{{__('News')}}</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8 float-left-1">
      <div class="page-header float-right float-left-1">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li class="active">{{__('News')}}</li>
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


                <a class="btn btn-primary btn-flat m-b-30 m-t-30" href="{{ url('admin/news/create') }}">{{__('Add News')}}</a>
                <div class="table-responsive dtdiv">
                    <table id="dt" class="table table-striped table-bordered dttablewidth">
                        <thead>
                        <tr>
                            <th>Image</th>
                            <th>Title</th>
                            <th>Status</th>
                            <th>Timestamp</th>
                            <th  class="action-td" >Action</th>
                        </tr>
                        </thead>
                        <tbody>

                        @forelse($records??array() as $item)
                            <tr>
                                <td>
                                <img src="{{url($item->image??'')}}" width="50px" alt="">
                                </td>
                                <td>{{$item->title}}</td>

                                <td>

                                    {{ucfirst($item->status)}}
                                </td>
                                <td>{{$item->created_at}}</td>
                                <td id="action" class="action-td">
                                    <a class="btn btn-primary" href="{{url('admin/news/'.$item->id.'/edit')}}" title="Edit Coupon/Voucher"><i class="fa fa-eye" aria-hidden="true"></i> Edit</a>
                                    <a class="btn btn-primary" data-toggle="modal" data-target="#modal-show{{$item->id}}" title="Show Coupon/Voucher"><i class="fa fa-eye" aria-hidden="true"></i> Show</a>
                                    {!! Form::open([
                                                                                               'method'=>'DELETE',
                                                                                               'url' => ['admin/news/'.$item->id],
                                                                                               'style' => 'display:inline'
                                                                                            ]) !!}
                                    {!! Form::button('Delete', array(
                                         'type' => 'submit',
                                         'onclick' => 'return confirm("Are you sure? ");',
                                         'class' => 'btn btn-danger',
                                            'data-type'=>'confirm',
                                         )) !!}
                                    {!! Form::close() !!}

                                    <div class="modal fade" id="modal-show{{$item->id}}">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span></button>
                                                    <h4 class="modal-title">Show News</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="panel">
                                                        <table class="table table-striped">
                                                            <tbody>


                                                            <tr>
                                                                <td>{{__('Title')}} </td>
                                                                <td>{{ucfirst($item->title??'')}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>{{__('Slug')}} </td>
                                                                <td>{{ucfirst($item->slug??'')}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>{{__('Description')}} </td>
                                                                <td>{!!$item->description??''!!}</td>
                                                            </tr>

                                                            <tr>
                                                                <td>{{__('Since')}} </td>
                                                                <td>{{$item->created_at??'N/A'}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>{{__('Status')}} </td>
                                                                <td>{{ucfirst($item->status??'N/A')}}</td>
                                                            </tr>
                                                            </tbody>

                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

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
