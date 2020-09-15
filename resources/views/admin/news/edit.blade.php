@extends('admin.index')

@section('style')

    <link rel="stylesheet" href="/css/bootstrap-material-datetimepicker.css" />
@endsection

@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}" />
<div class="breadcrumbs">
   <div class="col-sm-4">
      <div class="page-header float-left">
         <div class="page-title">
            <h1>{{__('messages.coupon')}}</h1>
         </div>
      </div>
   </div>
   <div class="col-sm-8">
      <div class="page-header float-right">
         <div class="page-title">
            <ol class="breadcrumb text-right">
               <li><a href="{{url('admin/coupon')}}">{{__('messages.coupon')}}</a></li>
               <li class="active">Edit Vehicle Coupon</li>
            </ol>
         </div>
      </div>
   </div>
</div>
<div class="content mt-3">
    <div class="rowset">
        <div class="col-lg-9">
           <div class="card">
              <div class="card-header">
                 <h4>Edit Vehicle Coupon</h4>
              </div>
              <div class="card-body">

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

                  <div class="col-md-12">
                    <form action="{{url('admin/news/'.$row->id)}}" id="form" accept-charset="UTF-8" enctype="multipart/form-data" method="POST">
                        {{csrf_field()}}
                        {{method_field('PATCH')}}

                        <div class="row clearfix">

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for=""><small>{{__('Title')}} </small></label>
                                    <input type="text" class="form-control" placeholder="Title" name="title"  value="{{$row->title}} ">
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for=""><small>{{__('Description')}} </small></label>
                                    <textarea  name="description" id="description"  class="form-control editor">{{$row->description}} </textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for=""><small>{{__('Feature Image')}} </small></label>
                                    <input type="file" class="form-control" name="feature_image">
                                    <small class="text-info">Image file format: jpg, .jpeg, .png or .gif</small>
                                </div>
                            </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for=""><small>{{__('Status')}} </small></label>
                                    <select name="" id="" class="form-control  ">
                                        <option value="active"   {{$row->status=='active'?'selected':''}} >Active</option>
                                        <option value="inactive" {{$row->status=='inactive'?'selected':''}} >Inactive</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12 text-center">
                                <button data-loading-text="Processing..." class="btn btn-primary btn-round" type="submit">{{__('Save Changes')}} </button>
                            </div>
                        </div>
                    </form>

                  </div>
              </div>
           </div>
        </div>
    </div>
</div>

@stop

@section('footer')
    <script>

        CKEDITOR.replace('description');
    </script>
@endsection
