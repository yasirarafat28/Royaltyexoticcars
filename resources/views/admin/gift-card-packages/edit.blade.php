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
            <h1>{{__('Gift Card Package')}}</h1>
         </div>
      </div>
   </div>
   <div class="col-sm-8">
      <div class="page-header float-right">
         <div class="page-title">
            <ol class="breadcrumb text-right">
               <li><a href="{{url('admin/coupon')}}">{{__('Gift Card Package')}}</a></li>
            <li class="active">{{$item->name}}</li>
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
                 <h4>{{__('Edit Package')}}</h4>
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
                      <form method="POST" action="{{ url('admin/gift-card/packages/'.$item->id)}}" accept-charset="UTF-8" enctype="multipart/form-data">
                          {{csrf_field()}}
                        @method('PATCH')

                          <div class="form-group col-md-6">
                              <label for="name" class="control-label">Name</label>
                              <input class="form-control" value="{{$item->name}}" name="name" type="text">
                          </div>
                          <div class="form-group col-md-6">
                              <label class="form-label">Code</label>
                              <div class="controls input-group">
                                  <input type="text" value="{{$item->code}}" class="form-control" id="coupon_code_0" name="code">
                                  <span class="input-group-addon" onclick="generate_code(0);" style="cursor: pointer"><i class="fa fa-magic"></i></span>
                              </div>
                          </div>
                          <div class="form-group  col-md-6">
                              <label for="name" class="control-label">Price</label>
                              <input class="form-control" value="{{$item->price}}" name="price" type="number" id="price" step="amount">

                          </div>

                          <div class="form-group  col-md-6">
                              <label for="name" class="control-label">Equivalent Amount</label>
                              <input class="form-control" value="{{$item->equivalend_amount}}" name="equivalent_amount" type="number" id="equivalent_amount">
                          </div>


                          <div class="form-group  col-md-6">
                              <label for="name" class="control-label">Start At</label>
                              <input class="form-control datetimepicker" value="{{$item->start_at}}" name="start_at" type="text">

                          </div>

                          <div class="form-group  col-md-6">
                              <label for="name" class="control-label">End At</label>
                              <input class="form-control datetimepicker" value="{{$item->end_at}}" name="end_at" type="text">

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
                          <div class="form-group   col-md-12 text-center">
                              <button class="btn btn-primary btn-corner col-md-offset-4 col-md-4">Save Changes</button>
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
