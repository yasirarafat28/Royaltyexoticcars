@extends('admin.index')

@section('style')
    <link rel="stylesheet" href="/admin-asset/plugins/jquery-steps/jquery.steps.css">
    <style>
        .wizard > .content {
            width: 100%;
            margin-bottom: 40px;
            overflow-y: auto;
        }
        .wizard > .actions {
            position: absolute;
            bottom: 0px;
            right: 10px;
        }
        .wizard > .steps .disabled a, .wizard > .steps .disabled a:hover, .wizard > .steps .disabled a:active {
             background: #aaa;
             color: #fff;
             cursor: default;
         }
    </style>
@endsection
@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}" />
<div class="breadcrumbs">
   <div class="col-sm-4 float-right-1">
      <div class="page-header float-left float-right-1">
         <div class="page-title">
            <h1>{{__('messages.vehicle')}}</h1>
         </div>
      </div>
   </div>
   <div class="col-sm-8 float-left-1">
      <div class="page-header float-right float-left-1">
         <div class="page-title">
            <ol class="breadcrumb text-right">
               <li><a href="{{url('admin/product')}}">{{__('messages.vehicle')}}</a></li>
               <li class="active">{{__('messages.save')}} {{__('messages.vehicle')}}</li>
            </ol>
         </div>
      </div>
   </div>
</div>
<div class="content mt-3 ">
   <div class="rowset">
      <div class="col-lg-10 orderdiv">
         <div class="card">
            <div class="card-header">
               <h4>{{__('messages.save')}} {{__('messages.vehicle')}}</h4>
            </div>
            <div class="card-body">



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



                @if(Session::has('message'))
                    <div class="col-sm-12">
                        <div class="alert  {{ Session::get('alert-class', 'alert-info') }} alert-dismissible fade show" role="alert">{{ Session::get('message') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                @endif
                <form id="wizard_with_validation" method="POST" action="{{url('admin/vehicles')}}" class="validateFormFor" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <h3>{{__('messages.general')}}</h3>
                    <fieldset>
                        <div class="body">
                            <div class="form-group">
                                <label for="category" class="control-label mb-1">{{__('Type')}}<span class="reqfield">*</span>
                                </label>
                                <select name="type" required  class="form-control" >
                                    <option value="SUVs"> SUVs</option>
                                    <option value="Autocycle"> Autocycle</option>
                                    <option value="Coupe"> Coupe</option>
                                    <option value="Sedan"> Sedan</option>
                                    <option value="Convertible"> Convertible</option>
                                    <option value="Truck"> Truck</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="name" class="control-label mb-1">{{__('messages.name')}}<span class="reqfield">*</span>
                                </label>
                                <input id="pro_name" name="name"  type="text" class="form-control" aria-required="true" required aria-invalid="false" placeholder="{{__('messages.name')}}">
                            </div>
                            <div class="form-group">
                                <label for="description" class="control-label mb-1">{{__('messages.description')}}<span class="reqfield">*</span>
                                </label>
                                <textarea name="description" id="description" class="editor" required></textarea>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label for="category" class="control-label mb-1">{{__('messages.cate_gory')}}<span class="reqfield">*</span>
                                    </label>
                                    <select name="category_id" required id="catelogcategory" class="form-control" onchange="getsubcategory(this.value)">
                                        <option value="">{{__('messages.select')}} {{__('messages.cate_gory')}}</option>
                                        @foreach($category??array() as $ca)
                                            <option value="{{$ca->id}}" >{{$ca->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="subcategory" class="control-label mb-1">{{__('messages.sub_cat')}}<span class="reqfield">*</span>
                                    </label>
                                    <!--<select name="sub_category_id" required id="subcategory" class="form-control" onchange="getbrand(this.value)">-->
                                    <select name="sub_category_id" required id="subcategory" class="form-control">
                                        <option value="">{{__('messages.select')}} {{__('messages.sub_cat')}}</option>
                                        @if(isset($subcategory))
                                            @foreach($subcategory??array() as $sub)
                                                <option value="{{$sub->id}}" >{{$sub->name}}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                                <div class="form-group  col-md-4" >
                                    <label for="brand" class="control-label mb-1">{{__('messages.brands')}}<span class="reqfield">*</span>
                                    </label>
                                    <select name="brand_id" required id="brand" class="form-control">
                                        <option value="">{{__('messages.select')}} {{__('messages.brands')}}</option>
                                        @if(isset($brand))
                                            @foreach($brand??array() as $br)
                                                <option value="{{$br->id}}" >{{$br->name}}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                                <div class="form-group col-md-6" >
                                    <label for="brand" class="control-label mb-1">{{__('messages.tax_name')}} <span class="reqfield">*</span>
                                    </label>
                                    <select class="form-control" name="tax_id" id="texable" required >
                                        <option value="0">{{__('messages.select').' '.__('messages.tax_name')}}</option>
                                        @foreach($taxes??array() as $t)
                                            <option value="{{$t->id}}" >{{$t->tax_name}} ({{$t->rate}}%)</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    <h3>{{__('messages.price')}}</h3>
                    <fieldset>
                        <div class="body">
                            <div class="row">
                                <div class="form-group col-md-4" >
                                    <label for="name" class="control-label mb-1">4 hours price<span class="reqfield">*</span>
                                    </label>
                                    <select name="four_hour" id="" class="form-control">
                                        <option value="yes" >Yes</option>
                                        <option value="no" >No</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="name" class="control-label mb-1">{{__('messages.selling_price')}}<span class="reqfield">*</span>
                                    </label>
                                    <input name="four_hour_price" type="number" step="any" class="form-control" aria-invalid="false" placeholder="{{__('messages.selling_price')}}">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="name" class="control-label mb-1">{{__('messages.spe_price')}}</label>
                                    <input name="four_hour_discount" type="number" class="form-control" aria-invalid="false" placeholder="{{__('messages.spe_price')}}">
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-md-4" >
                                    <label for="name" class="control-label mb-1">6 hours price<span class="reqfield">*</span>
                                    </label>
                                    <select name="six_hour" id="" class="form-control">
                                        <option value="yes" >Yes</option>
                                        <option value="no" >No</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="name" class="control-label mb-1">Selling Price<span class="reqfield">*</span>
                                    </label>
                                    <input name="six_hour_price" type="number" step="any" class="form-control" aria-required="true" aria-invalid="false" placeholder="selling price">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="name" class="control-label mb-1">Special Price</label>
                                    <input name="six_hour_discount" type="number" class="form-control" aria-invalid="false" placeholder="special price">
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-md-4" >
                                    <label for="name" class="control-label mb-1">8 hours price<span class="reqfield">*</span>
                                    </label>
                                    <select name="eight_hour" id="" class="form-control">
                                        <option value="yes" >Yes</option>
                                        <option value="no" >No</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="name" class="control-label mb-1">{{__('messages.selling_price')}}<span class="reqfield">*</span>
                                    </label>
                                    <input name="eight_hour_price" type="number" step="any" class="form-control" aria-required="true" aria-invalid="false" placeholder="{{__('messages.selling_price')}}">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="name" class="control-label mb-1">{{__('messages.spe_price')}}</label>
                                    <input name="eight_hour_discount" type="number" class="form-control" aria-invalid="false" placeholder="{{__('messages.spe_price')}}">
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-md-4" >
                                    <label for="name" class="control-label mb-1">12 hours price<span class="reqfield">*</span>
                                    </label>
                                    <select name="twelve_hour" id="" class="form-control">
                                        <option value="yes" >Yes</option>
                                        <option value="no" >No</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="name" class="control-label mb-1">Selling Price<span class="reqfield">*</span>
                                    </label>
                                    <input name="twelve_hour_price" type="number" step="any" class="form-control" aria-required="true" aria-invalid="false" placeholder="selling price">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="name" class="control-label mb-1">Special Price</label>
                                    <input name="twelve_hour_discount" type="number" class="form-control" aria-invalid="false" placeholder="special price">
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-md-4" >
                                    <label for="name" class="control-label mb-1">Full day price<span class="reqfield">*</span>
                                    </label>
                                    <select name="full_day" id="" class="form-control">
                                        <option value="yes" >Yes</option>
                                        <option value="no" >No</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="name" class="control-label mb-1">{{__('messages.selling_price')}}<span class="reqfield">*</span>
                                    </label>
                                    <input name="full_day_price" type="number" step="any" class="form-control" aria-required="true" aria-invalid="false" placeholder="{{__('messages.selling_price')}}">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="name" class="control-label mb-1">{{__('messages.spe_price')}}</label>
                                    <input name="full_day_discount" type="number" class="form-control" aria-invalid="false" placeholder="{{__('messages.spe_price')}}">
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    <h3>Stock</h3>
                    <fieldset>
                        <div class="body">
                            <div class="row">

                                <div class="form-group col-md-4">
                                    <label for="name" class="control-label mb-1">Stock Quantity</label>
                                    <input name="stock" type="number" class="form-control" aria-invalid="false" placeholder="Stock Quantity">
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="name" class="control-label mb-1">Availability {{__('messages.start')}}</label>
                                    <input name="available_from" type="date" class="form-control" aria-required="true" aria-invalid="false">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="name" class="control-label mb-1">Availability {{__('messages.to')}}</label>
                                    <input name="available_to" type="date" class="form-control" aria-required="true" aria-invalid="false">
                                </div>

                            </div>
                        </div>
                    </fieldset>


                    <h3>{{__('messages.images')}}</h3>
                    <fieldset>
                        <div class="body"><div class="mar20">
                                <h4 class="orderdiv">{{__('messages.basic_img')}}</h4>
                                <div id="uploaded_image">
                                    <div class="upload-btn-wrapper">
                                        <button class="btn imgcatlog">
                                            <input type="hidden" name="feature_imagse" id="real_basic_img" />
                                            <?php
                                            if(isset($vehicle->feature_image)){
                                                $path=asset($vehicle->feature_image??'');
                                            }
                                            else{
                                                $path=asset('admin-asset/images/imgplaceholder.png');
                                            }
                                            ?>
                                            <img src="{{$path}}" alt="..." class="img-thumbnail imgsize"  id="basic_img" >
                                        </button>
                                        <input type="hidden" name="basic_img" id="basic_img1"/>
                                        <input type="file" name="feature_image" id="upload_image" onchange="featureImageUpload(this)" />
                                    </div>
                                </div>
                            </div>

                            <div class="mar20">
                                <h4 class="orderdiv">{{__('messages.add_img')}}</h4>

                                <div id="additional_image" class="fleft">
                                    <?php $i=0;?>
                                    @if(isset($vehicle->additional_image))
                                        <?php $imagels=explode(",",$vehicle->additional_image);;?>
                                        @foreach($imagels as $imls)
                                            <div id="imgid{{$i}}" class="add-img">
                                                <input type="hidden" name="add_real_img[]" value="{{$imls}}"/>
                                                <img src="{{asset('upload/product').'/'.$imls}}" class="img-thumbnail imgsize" id="additional_img{{$i}}" name="arrimg[]" />
                                                <div class="add-box">
                                                    <input type="hidden" id="additionalimg{{$i}}" name="additional_img[]" value="{{asset('upload/product').'/'.$imls}}"/>
                                                    <input type="button" id="removeImage1" value="x" class="btn-rmv1" onclick="removeimg('{{$i}}')" />
                                                </div>
                                            </div>
                                            <?php $i++;?>
                                        @endforeach
                                    @endif
                                </div>
                                <div class="upload-btn-wrapper">
                                    <button class="btn imgcatlog">
                                        <img src="{{asset('admin-asset/images/add_image.png')}}" alt="..." class="img-thumbnail imgsize">
                                    </button>
                                    <input type="file" name="add_image" id="add_image" onchange="additionalImageUpload(this)" />
                                    <input type="hidden" id="add_total_img" value="0">
                                </div>
                            </div>
                        </div>
                    </fieldset>


                    <h3>{{__('messages.attribute')}}</h3>
                    <fieldset>
                        <div class="body">
                            <table class="table table-striped table-bordered">
                                <tbody>
                                <tr>
                                    <td>
                                        <label for="" class="form-label">About</label>
                                        <table class="table table-striped table-bordered cmr1">
                                            <thead>
                                            <tr>
                                                <th>Attribute</th>
                                                <th>Value</th>
                                            </tr>
                                            </thead>
                                            <tbody id="morerow0">
                                            <tr id="attrrow01">
                                                <td>Model</td>
                                                <td><input  class="form-control" type="text" name="model"></td>
                                            </tr>
                                            <tr id="attrrow01">
                                                <td>Model Image</td>
                                                <td><input  class="form-control" type="file" name="model_image"></td>
                                            </tr>
                                            <tr id="attrrow01">
                                                <td>Color</td>
                                                <td><input  class="form-control" type="text" name="color"></td>
                                            </tr>
                                            <!--<tr id="attrrow01">
                                                <td>Class</td>
                                                <td><input  class="form-control" type="text" name="vehicle_class"></td>
                                            </tr>
                                            <tr id="attrrow01">
                                                <td>Body</td>
                                                <td><input  class="form-control" type="text" name="body"></td>
                                            </tr>-->
                                            <tr id="attrrow01">
                                                <td>Seat</td>
                                                <td><input  class="form-control" type="text" name="seat"></td>
                                            </tr>
                                            <!--<tr id="attrrow01">
                                                <td>Actual MSRP</td>
                                                <td><input  class="form-control" type="text" name="actual_msrp"></td>
                                            </tr>-->
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label for="" class="form-label">Performance</label>
                                        <table class="table table-striped table-bordered cmr1">
                                            <thead>
                                            <tr>
                                                <th>Attribute</th>
                                                <th>Value</th>
                                            </tr>
                                            </thead>
                                            <tbody id="morerow0">
                                            <tr id="attrrow01">
                                                <td>Engine</td>
                                                <td><input  class="form-control" type="text" name="engine"></td>
                                            </tr>
                                            <tr id="attrrow01">
                                                <td>Cylinders</td>
                                                <td><input  class="form-control" type="text" name="cylinders"></td>
                                            </tr>
                                            <tr id="attrrow01">
                                                <td>Fuel type</td>
                                                <td><input  class="form-control" type="text" name="fuel_type"></td>
                                            </tr>
                                            <tr id="attrrow01">
                                                <td>Highway MPG</td>
                                                <td><input  class="form-control" type="text" name="highway_mpg"></td>
                                            </tr>
                                            <tr id="attrrow01">
                                                <td>City MPG</td>
                                                <td><input  class="form-control" type="text" name="city_mpg"></td>
                                            </tr>
                                            <tr id="attrrow01">
                                                <td>Horse Power</td>
                                                <td><input  class="form-control" type="text" name="horse_power"></td>
                                            </tr>
                                            <tr id="attrrow01">
                                                <td>Torque</td>
                                                <td><input  class="form-control" type="text" name="torque"></td>
                                            </tr>
                                            <tr id="attrrow01">
                                                <td>Transmission</td>
                                                <td><input  class="form-control" type="text" name="transmission"></td>
                                            </tr>
                                            <tr id="attrrow01">
                                                <td>Suspension</td>
                                                <td><input  class="form-control" type="text" name="suspension"></td>
                                            </tr>
                                            <!--<tr id="attrrow01">
                                                <td>Clearance</td>
                                                <td><input  class="form-control" type="text" name="clearance"></td>
                                            </tr>
                                            <tr id="attrrow01">
                                                <td>Differential</td>
                                                <td><input  class="form-control" type="text" name="differential"></td>
                                            </tr>
                                            <tr id="attrrow01">
                                                <td>Gear Ratio</td>
                                                <td><input class="form-control" type="text" name="gear_ratio"></td>
                                            </tr>-->
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </fieldset>
                </form>
            </div>
         </div>
      </div>
   </div>
</div>
<input type="hidden" id="msgtype" value="{{__('messages.type')}}">
<input type="hidden" id="check_price" value="{{__('messages.check_price')}}">
<input type="hidden" id="special_price_check" value="{{__('messages.special_price_check')}}">
<input type="hidden" id="sepical_price_vaildate" value="{{__('messages_error_success.sepical_price_vaildate')}}">
<input type="hidden" id="selling_mrp_vaildate" value="{{__('messages_error_success.selling_mrp_vaildate')}}">
<input type="hidden" id="up_pro" value="0" />
<input type="hidden" id="cross_pro" value="0" />
<input type="hidden" id="sku_already" value="{{__('messages_error_success.sku_already')}}">
@stop
@section('footer')
<script type="text/javascript" src="{{asset('js/vehicle.js')}}"></script>
<script src="/admin-asset/jquery-validation/jquery.validate.js"></script> <!-- Jquery Validation Plugin Css -->
<script src="/admin-asset/plugins/jquery-steps/jquery.steps.js"></script> <!-- JQuery Steps Plugin Js -->


<script>

    function additionalImageUpload(abc){
        var add_total_img=$("#add_total_img").val();
        var txt='<div id="imgid'+add_total_img+'" class="add-img"><input type="hidden" name="add_real_img[]"/><img class="img-thumbnail" id="additional_img'+add_total_img+'" name="arrimg[]" style="width: 150px;height: 150px;" /><div class="add-box"><input type="hidden" id="additionalimg'+add_total_img+'" name="additional_img[]"/><input type="button" id="removeImage1" value="x" class="btn-rmv1" onclick="removeimg('+add_total_img+')"/></div></div>';
        $("#additional_image").append(txt);
        readaddURL(abc,add_total_img);
        var newtotal=parseInt(add_total_img)+1;
        $("#add_total_img").val(newtotal);
    }

    function featureImageUpload(abc){

        readURL(abc,"basic_img");
    }
    $(function () {

        //Advanced form with validation
        var form = $('#wizard_with_validation');
        form.steps({
            headerTag: 'h3',
            bodyTag: 'fieldset',
            transitionEffect: 'slideLeft',
            onInit: function (event, currentIndex) {
                //Set tab width
                var $tab = $(event.currentTarget).find('ul[role="tablist"] li');
                var tabCount = $tab.length;
                $tab.css('width', (100 / tabCount) + '%');
                CKEDITOR.replace('description');



            },
            onStepChanging: function (event, currentIndex, newIndex) {
                if (currentIndex > newIndex) { return true; }

                if (currentIndex < newIndex) {
                    form.find('.body:eq(' + newIndex + ') label.error').remove();
                    form.find('.body:eq(' + newIndex + ') .error').removeClass('error');
                }

                form.validate().settings.ignore = ':disabled,:hidden';
                return form.valid();
            },
            onStepChanged: function (event, currentIndex, priorIndex) {
            },
            onFinishing: function (event, currentIndex) {
                form.validate().settings.ignore = ':disabled';
                return form.valid();
            },
            onFinished: function (event, currentIndex) {
                //swal("Good job!", "Submitted!", "success");
                form.submit();
            }
        });

        form.validate({
            highlight: function (input) {
                $(input).parents('.form-line').addClass('error');
            },
            unhighlight: function (input) {
                $(input).parents('.form-line').removeClass('error');
            },
            errorPlacement: function (error, element) {
                $(element).parents('.form-group').append(error);
            },
            rules: {
                'confirm': {
                    equalTo: '#password'
                }
            }
        });
    });
</script>
@stop
