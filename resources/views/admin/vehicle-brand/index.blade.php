@extends('admin.index') @section('content')
    <div class="breadcrumbs">
        <div class="col-sm-4 float-right-1">
            <div class="page-header float-left float-right-1">
                <div class="page-title">
                    <h1>{{__('messages.brands')}}</h1>
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
                            <div class="alert  {{ Session::get('alert-class', 'alert-info') }} alert-dismissible fade show" role="alert">
                                {{ Session::get('message') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                    @endif
                    <button class="btn btn-primary btn-flat m-b-30 m-t-30" data-toggle="modal" data-target="#addsubcategorymodal">
                        {{__('messages.add_brands')}}
                    </button>
                    <div class="table-responsive dtdiv">
                        <table id="" class="table table-striped table-bordered dttablewidth">
                            <thead>
                            <tr>
                                <th>{{__('messages.id')}}</th>
                                <th>Image</th>
                                <th>{{__('messages.name')}}</th>
                                <th>Priority</th>
                                <th>{{__('messages.action')}}</th>
                            </tr>
                            </thead>
                            <tbody>

                            @forelse($brands??array() as $item)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>
                                    <img src="{{asset($item->photo)}}" height="42" width="42"></td>
                                <td>{{$item->name}}</td>
                                <td>{{$item->priority}}</td>
                                <td>
                                    <a class="btn btn-primary"  data-toggle="modal" data-target="#editBrand{{$item->id}}" href="#" title="Edit Service"><i class="fa fa-pencil" aria-hidden="true"></i> Edit</a>


 {!! Form::open([
                                       'method'=>'DELETE',
                                       'url' => ['/admin/vehicle-brand', $item->id],
                                       'style' => 'display:inline'
                                    ]) !!}
                                    {!! Form::button('<i class="fa fa-trash" aria-hidden="true"></i> Delete ', array(
                                         'type' => 'submit',
                                         'class' => 'btn btn-danger btn-xs btnper',
                                        'title' => 'Delete user',
                                        'onclick'=>'return confirm("Confirm delete?")'
                                         )) !!}
                                    {!! Form::close() !!}

                                    <div class="modal fade" id="editBrand{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-sm" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="smallmodalLabel">{{__('messages.edit_brand')}}</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <form action="{{url('admin/vehicle-brand/'.$item->id)}}" method="post" enctype="multipart/form-data">
                                                    {{csrf_field()}}
                                                    {{method_field('PATCH')}}
                                                    <div class="modal-body">
                                                        <div class="form-group">
                                                            <label for="cc-payment" class="control-label mb-1">{{__('messages.brand_name')}}</label>
                                                            <input id="edit_brand" name="name" type="text" class="form-control" aria-required="true" aria-invalid="false" value="{{$item->name}}" placeholder="{{__('messages.brand_name')}}" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="cc-payment" class="control-label mb-1">Priority</label>
                                                            <input id="edit_priority" name="priority" type="integer" class="form-control" aria-required="true" aria-invalid="false" value="{{$item->priority}}" placeholder="{{__('messages.brand_name')}}" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="cc-payment" class="control-label mb-1">
                                                                Photo
                                                            </label>
                                                            <input id="name" name="photo" type="file" class="form-control"  value="" placeholder="{{__('messages.brand_name')}}">
                                                        </div>


                                                        <div class="form-group">
                                                            <label for="cc-payment" class="control-label mb-1">
                                                                Status
                                                            </label>

                                                            <select class="form-control" name="status">
                                                                <option>Select an option</option>
                                                                <option value="active" {{$item->status=='active'?'selected':''}} >Active</option>
                                                                <option value="inactive" {{$item->status=='inactive'?'selected':''}} >Inactive</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                                            {{__('messages.cancel')}}
                                                        </button>

                                                        <button type="submit" class="btn btn-primary">
                                                            {{__('messages.update')}}
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                </td>
                            </tr>
                            @empty
                                <tr>
                                    <td class="text-center" colspan="4">    Sorry! No record found</td>
                                </tr>
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="modal fade" id="addsubcategorymodal" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="smallmodalLabel">
                        {{__('messages.add_brands')}}
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{url('admin/vehicle-brand')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="cc-payment" class="control-label mb-1">
                                {{__('messages.brand_name')}}
                            </label>
                            <input id="name" name="name" type="text" class="form-control" aria-required="true" aria-invalid="false" value="" placeholder="{{__('messages.brand_name')}}" required="">
                        </div>
                        <div class="form-group">
                            <label for="cc-payment" class="control-label mb-1">
                                Priority
                            </label>
                            <input id="priority" name="priority" type="integer" class="form-control" aria-required="true" aria-invalid="false" value="" placeholder="priority" required="">
                        </div>
                        <div class="form-group">
                            <label for="cc-payment" class="control-label mb-1">
                                Photo
                            </label>
                            <input id="name" name="photo" type="file" class="form-control" placeholder="{{__('messages.brand_name')}}">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">
                            {{__('messages.cancel')}}
                        </button>
                        @if(Session::get("is_demo")=='1')
                            <button type="button" onclick="return alert('This function is currently disable as it is only a demo website, in your admin it will work perfect')" class="btn btn-primary">
                                {{__('messages.submit')}}
                            </button>
                        @else
                            <button type="submit" class="btn btn-primary">
                                {{__('messages.submit')}}
                            </button>
                        @endif
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop
