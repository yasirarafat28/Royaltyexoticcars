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

                  <div class="padding-30">
                      <form method="POST" action="{{ url('admin/vehicle-coupon/'.$item->id)}}" accept-charset="UTF-8" enctype="multipart/form-data">
                          {{csrf_field()}}
                          {{method_field('PATCH')}}
                          <div class="form-group col-md-6">
                              <label for="name" class="control-label">Title</label>
                              <input class="form-control" name="title" type="text" value="{{$item->title}}">
                          </div>
                          <div class="form-group col-md-6">
                              <label class="form-label">Code</label>
                              <div class="controls input-group">
                                  <input type="text" class="form-control" id="coupon_code_0" name="code" type="text" value="{{$item->code}}">
                                  <span class="input-group-addon" onclick="generate_code(0);" style="cursor: pointer"><i class="fa fa-magic"></i></span>
                              </div>
                          </div>
                          <div class="form-group  col-md-6">
                              <label for="name" class="control-label">Minimum Purchase Amount</label>
                              <input class="form-control" name="min_required_amount" type="number" id="name" step="amount"  value="{{$item->min_required_amount}}">

                          </div>

                          <div class="form-group  col-md-6">
                              <label for="name" class="control-label">Discount Type</label>
                              <select name="discount_type" class="form-control" id="type">
                                  <option value="flat" {{$item->discount_type=='flat'?'selected':''}}>Flat Amount</option>
                                  <option value="percent" {{$item->discount_type=='percent'?'selected':''}}>Percentage</option>
                              </select>
                          </div>
                          <div class="form-group  col-md-6">
                              <label for="name" class="control-label">Discount</label>
                              <input class="form-control" name="discount" type="number" id="name" value="{{$item->discount}}">
                          </div>


                          <div class="form-group  col-md-6">
                              <label for="name" class="control-label">Max. Discount <small>(Keep it blank if discount is unlimited)</small></label>
                              <input class="form-control" name="max_discount_amount" type="number" id="name" value="{{$item->max_discount_amount}}">
                          </div>



                          <div class="form-group  col-md-6">
                              <label for="name" class="control-label">Vehicles</label>
                              <select name="item_id" class="form-control" id="type">
                                  <option value="all">All</option>
                                  @foreach($vehicles??array() as $vehicle)
                                      <option {{$item->item_id==$vehicle->id?'selected':''}} value="{{$vehicle->id}}">{{$vehicle->name}}</option>
                                  @endforeach
                              </select>
                          </div>

                          <div class="form-group  col-md-6">
                              <label for="name" class="control-label">Start At</label>
                              <input class="form-control datetimepicker" name="start_at" type="text" value="{{date('Y-m-d H:i:s',strtotime($item->start_at))}}">

                          </div>

                          <div class="form-group  col-md-6">
                              <label for="name" class="control-label">End At</label>
                              <input class="form-control datetimepicker" name="end_at" type="text" value="{{date('Y-m-d H:i:s',strtotime($item->end_at))}}">

                          </div>
                          <div class="form-group  col-md-6">
                              <label for="name" class="control-label">Status</label>
                              <select name="status" class="form-control">
                                  <option value="active" {{$item->status=='active'?'selected':''}} >Active</option>
                                  <option value="inactive" {{$item->status=='inactive'?'selected':''}}>Inactive</option>
                              </select>
                          </div>
                          <div class="form-group  col-md-12">
                              <label for="name" class="control-label">Note</label>

                              <textarea name="note" class="form-control">{{$item->note}}</textarea>
                          </div>

                          <div class="form-group col-md-12 text-center">
                              <input class="btn btn-primary btn-corner col-md-4" type="submit" value="Update">
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
    <script type="text/javascript" src="/js/moment.min.js"></script>
    <script type="text/javascript" src="http://momentjs.com/downloads/moment-with-locales.min.js"></script>
    <script type="text/javascript" src="/js/bootstrap-material-datetimepicker.js"></script>

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


        $('.datetimepicker').bootstrapMaterialDatePicker({
            format: 'YYYY-MM-DD  HH:mm',
            clearButton: true,
            weekStart: 1
        });

        $('#dt').dataTable();
    </script>
@endsection
