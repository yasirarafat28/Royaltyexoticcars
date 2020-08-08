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
                <form id="wizard_with_validation" method="POST" action="{{url('admin/vehicles')}}" class="validateFormFor">
                    {{ csrf_field() }}
                    <h3>{{__('messages.general')}}</h3>
                    <fieldset>
                        <div class="body">
                            <div class="form-group">
                                <label for="name" class="control-label mb-1">{{__('messages.name')}}<span class="reqfield">*</span>
                                </label>
                                <input id="pro_name" name="name" value="<?= isset($data->name)?$data->name:""?>" type="text" class="form-control" aria-required="true" aria-invalid="false" placeholder="{{__('messages.name')}}">
                            </div>
                            <div class="form-group">
                                <label for="description" class="control-label mb-1">{{__('messages.description')}}<span class="reqfield">*</span>
                                </label>
                                <textarea name="description" id="description" class="editor"><?= isset($data->description)?$data->description:""?></textarea>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label for="category" class="control-label mb-1">{{__('messages.cate_gory')}}<span class="reqfield">*</span>
                                    </label>
                                    <select name="category_id" required id="catelogcategory" class="form-control" onchange="getsubcategory(this.value)">
                                        <option value="">{{__('messages.select')}} {{__('messages.cate_gory')}}</option>
                                        @foreach($category??array() as $ca)
                                            <option value="{{$ca->id}}" <?= isset($data->category)&&$data->category==$ca->id?"selected='selected'":""?> >{{$ca->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="subcategory" class="control-label mb-1">{{__('messages.sub_cat')}}<span class="reqfield">*</span>
                                    </label>
                                    <select name="sub_category_id" required id="subcategory" class="form-control" onchange="getbrand(this.value)">
                                        <option value="">{{__('messages.select')}} {{__('messages.sub_cat')}}</option>
                                        @if(isset($subcategory))
                                            @foreach($subcategory??array() as $sub)
                                                <option value="{{$sub->id}}" <?= isset($data->subcategory)&&$data->subcategory==$sub->id?"selected='selected'":""?>>{{$sub->name}}</option>
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
                                                <option value="{{$br->id}}" <?= isset($data->brand)&&$data->brand==$br->id?"selected='selected'":""?>>{{$br->name}}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                                <div class="form-group col-md-6" >
                                    <label for="brand" class="control-label mb-1">{{__('messages.tax_name')}}<span class="reqfield">*</span>
                                    </label>
                                    <select class="form-control" name="tax_id" id="texable" >
                                        <option value="">{{__('messages.select').' '.__('messages.tax_name')}}</option>
                                        @foreach($taxes??array() as $t)
                                            <option value="{{$t->id}}" <?= isset($data->tax_class)&&$data->tax_class==$t->id?"selected='selected'":""?>>{{$t->tax_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-6" >
                                    <label for="brand" class="control-label mb-1">{{__('messages.color_name')}}<span class="reqfield">*</span>
                                    </label>
                                    <input type="text" name="color" id="colorname"  value="<?= isset($data->color)?$data->color:""?>" class=" form-control" >
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
                                        <option value="yes" {{$data->four_hour=='yes'?'selected':''}} >Yes</option>
                                        <option value="no" {{$data->four_hour=='no'?'selected':''}} >No</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="name" class="control-label mb-1">{{__('messages.selling_price')}}<span class="reqfield">*</span>
                                    </label>
                                    <input name="four_hour_price" type="number" step="any" class="form-control" value="<?= isset($data->four_hour_price)?$data->four_hour_price:""?>" aria-invalid="false" placeholder="{{__('messages.selling_price')}}" required>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="name" class="control-label mb-1">{{__('messages.spe_price')}}</label>
                                    <input name="four_hour_discount" type="number" class="form-control" aria-invalid="false" value="<?= isset($data->special_price)?$data->special_price:""?>" placeholder="{{__('messages.spe_price')}}">
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-md-4" >
                                    <label for="name" class="control-label mb-1">8 hours price<span class="reqfield">*</span>
                                    </label>
                                    <select name="four_hour" id="" class="form-control">
                                        <option value="yes" {{$data->eight_hour=='yes'?'selected':''}} >Yes</option>
                                        <option value="no" {{$data->eight_hour=='no'?'selected':''}} >No</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="name" class="control-label mb-1">{{__('messages.selling_price')}}<span class="reqfield">*</span>
                                    </label>
                                    <input name="eight_hour_price" type="number" step="any" class="form-control" aria-required="true" value="<?= isset($data->eight_hour_price)?$data->eight_hour_price:""?>" aria-invalid="false" placeholder="{{__('messages.selling_price')}}" required>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="name" class="control-label mb-1">{{__('messages.spe_price')}}</label>
                                    <input name="eight_hour_discount" type="number" class="form-control" aria-invalid="false" value="<?= isset($data->eight_hour_discount)?$data->eight_hour_discount:""?>" placeholder="{{__('messages.spe_price')}}">
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-md-4" >
                                    <label for="name" class="control-label mb-1">Full day price<span class="reqfield">*</span>
                                    </label>
                                    <select name="full_day" id="" class="form-control">
                                        <option value="yes" {{$data->full_day=='yes'?'selected':''}} >Yes</option>
                                        <option value="no" {{$data->full_day=='no'?'selected':''}} >No</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="name" class="control-label mb-1">{{__('messages.selling_price')}}<span class="reqfield">*</span>
                                    </label>
                                    <input name="full_day_price" type="number" step="any" class="form-control" aria-required="true" value="<?= isset($data->full_day_price)?$data->full_day_price:""?>" aria-invalid="false" placeholder="{{__('messages.selling_price')}}" required>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="name" class="control-label mb-1">{{__('messages.spe_price')}}</label>
                                    <input name="full_day_discount" type="number" class="form-control" aria-invalid="false" value="<?= isset($data->full_day_discount)?$data->full_day_discount:""?>" placeholder="{{__('messages.spe_price')}}">
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    <h3>Stock Information</h3>
                    <fieldset>
                        <div class="body">
                            <div class="row">

                                <div class="form-group col-md-4">
                                    <label for="name" class="control-label mb-1">Stock Quantity</label>
                                    <input name="stock" type="number" class="form-control" aria-invalid="false" value="<?= isset($data->stock)?$data->stock:""?>" placeholder="Stock Quantity">
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="name" class="control-label mb-1">Availability {{__('messages.start')}}</label>
                                    <input id="spe_pri_start" name="available_from" type="text" class="form-control" aria-required="true" value="<?= isset($data->special_price_start)?$data->available_from:""?>" aria-invalid="false">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="name" class="control-label mb-1">Availability {{__('messages.to')}}</label>
                                    <input id="spe_pri_to" name="available_to" type="text" class="form-control" aria-required="true" value="<?= isset($data->special_price_to)?$data->available_to:""?>" aria-invalid="false">
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
                                            <input type="hidden" name="real_basic_img" id="real_basic_img" value="<?= isset($data->basic_image)?$data->basic_image:""?>"/>
                                            <?php
                                            if(isset($data->basic_image)){
                                                $path=asset('upload/product')."/".$data->basic_image;
                                            }
                                            else{
                                                $path=asset('admin-asset/images/imgplaceholder.png');
                                            }
                                            ?>
                                            <img src="{{$path}}" alt="..." class="img-thumbnail imgsize"  id="basic_img" >
                                        </button>
                                        <input type="hidden" name="basic_img" id="basic_img1"/>
                                        <input type="file" name="upload_image" id="upload_image" />
                                    </div>
                                </div>
                            </div>

                            <div class="mar20">
                                <h4 class="orderdiv">{{__('messages.add_img')}}</h4>

                                <div id="additional_image" class="fleft">
                                    <?php $i=0;?>
                                    @if(isset($data->additional_image))
                                        <?php $imagels=explode(",",$data->additional_image);;?>
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
                                    <input type="file" name="add_image" id="add_image" />
                                </div>
                            </div>
                            <input type="hidden" name="add_total_img" id="add_total_img" value="{{$i}}" />
                        </div>
                    </fieldset>


                    <h3>{{__('messages.attribute')}}</h3>
                    <fieldset>
                        <div class="body"><div class="mar20">

                            <div class="categories-accordion mrg30" uk-accordion="targets: > div > .category-wrap">
                                <div class="categories-sort-wrap uk-sortable uk-margin-top" uk-sortable="handle: .sort-categories" id="attributelist">
                                    <?php $i=0;?>
                                    @if(isset($data->attributels)&&count($data->attributels)>0)
                                        @foreach($data->attributels as $da)
                                            <div class="category-wrap" data-id="{{$i}}" id="mainattr{{$i}}">
                                                <h3 class="uk-accordion-title uk-background-secondary uk-light uk-padding-small">
                                                    <div class="uk-sortable-handle sort-categories uk-display-inline-block ti-layout-grid4-alt" ></div>
                                                    {{__('messages.New Attributes')}}
                                                </h3>
                                                <div class="uk-accordion-content categories-content " style="margin-top: 0px;padding:0px">
                                                    <table class="table table-striped table-bordered">
                                                        <tbody>
                                                        <tr>
                                                            <td>
                                                                <input type="text" required name="attributeset[{{$i}}][set]" class="form-control" value="{{$da->attributeset}}" placeholder="Enter Attribute Set">
                                                                <table class="table table-striped table-bordered cmr1">
                                                                    <thead>
                                                                    <tr>
                                                                        <th>Attribute</th>
                                                                        <th>Value</th>
                                                                        <th></th>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody id="morerow{{$i}}">
                                                                    <?php
                                                                    $label=explode(',',$da->attribute);
                                                                    $value=explode(",",$da->value);
                                                                    ?>
                                                                    <?php for($j=0;$j<count($label);$j++){
                                                                    $index=$j+1;
                                                                    ?>
                                                                    <tr id="attrrow{{$i.$index}}">
                                                                        <td><input required class="form-control" type="text" value="{{$label[$j]}}" name="attributeset[{{$i}}][label][]"></td>
                                                                        <td><input required class="form-control" type="text" value="{{$value[$j]}}" name="attributeset[{{$i}}][value][]"></td>
                                                                        <td><button onclick="removeattrrow({{$i}},{{$index}})" class="btn btn-danger"><i class="fa fa-trash f-s-25"></i></button></td>
                                                                    </tr>
                                                                    <?php }?>
                                                                    </tbody>
                                                                </table>
                                                                <input type="hidden" name="totalattr{{$i}}" id="totalattr{{$i}}" value="{{$j+1}}"/>
                                                                <button type="button" class="btn btn-primary fleft" onclick="addattrrow({{$i}})"><i class="fa fa-plus"></i>Add New Row</button>
                                                            </td>
                                                            <td>
                                                                <button onclick="removerowmain({{$i}})" class="btn btn-danger"><i class="fa fa-trash f-s-25"></i></button>
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <?php $i++;?>
                                        @endforeach
                                        <input type="hidden" name="totalrow" id="totalrow" value='<?= $i-1?>' />
                                    @else
                                        <div class="category-wrap" data-id="0" id="mainattr0">
                                            <h3 class="uk-accordion-title uk-background-secondary uk-light uk-padding-small">
                                                <div class="uk-sortable-handle sort-categories uk-display-inline-block ti-layout-grid4-alt" ></div>
                                                {{__('messages.New Attributes')}}
                                            </h3>
                                            <div class="uk-accordion-content categories-content " style="margin-top: 0px;padding:0px">
                                                <table class="table table-striped table-bordered">
                                                    <tbody>
                                                    <tr>
                                                        <td>
                                                            <label for="" class="form-label">Style</label>
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
                                                                    <td><input required class="form-control" type="text" name="model"></td>
                                                                </tr>
                                                                <tr id="attrrow01">
                                                                    <td>Color</td>
                                                                    <td><input required class="form-control" type="text" name="model"></td>
                                                                </tr>
                                                                <tr id="attrrow01">
                                                                    <td>Class</td>
                                                                    <td><input required class="form-control" type="text" name="model"></td>
                                                                </tr>
                                                                <tr id="attrrow01">
                                                                    <td>Body</td>
                                                                    <td><input required class="form-control" type="text" name="model"></td>
                                                                </tr>
                                                                <tr id="attrrow01">
                                                                    <td>Seat</td>
                                                                    <td><input required class="form-control" type="text" name="model"></td>
                                                                </tr>
                                                                <tr id="attrrow01">
                                                                    <td>Actual MSRP</td>
                                                                    <td><input required class="form-control" type="text" name="model"></td>
                                                                </tr>
                                                                </tbody>
                                                            </table>
                                                        </td>
                                                        <td>
                                                            <button onclick="removerowmain(0)" class="btn btn-danger"><i class="fa fa-trash f-s-25"></i></button>
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
                                                                    <td>Horse Power</td>
                                                                    <td><input required class="form-control" type="text" name="horse_power"></td>
                                                                </tr>
                                                                <tr id="attrrow01">
                                                                    <td>Torque</td>
                                                                    <td><input required class="form-control" type="text" name="torque"></td>
                                                                </tr>
                                                                <tr id="attrrow01">
                                                                    <td>Transmission</td>
                                                                    <td><input required class="form-control" type="text" name="transmission"></td>
                                                                </tr>
                                                                <tr id="attrrow01">
                                                                    <td>Suspension</td>
                                                                    <td><input required class="form-control" type="text" name="suspension"></td>
                                                                </tr>
                                                                <tr id="attrrow01">
                                                                    <td>Clearance</td>
                                                                    <td><input required class="form-control" type="text" name="clearance"></td>
                                                                </tr>
                                                                <tr id="attrrow01">
                                                                    <td>Differential</td>
                                                                    <td><input required class="form-control" type="text" name="differential"></td>
                                                                </tr>
                                                                <tr id="attrrow01">
                                                                    <td>Gear Ratio</td>
                                                                    <td><input required class="form-control" type="text" name="gear_ratio"></td>
                                                                </tr>
                                                                </tbody>
                                                            </table>
                                                        </td>
                                                        <td>
                                                            <button onclick="removerowmain(0)" class="btn btn-danger"><i class="fa fa-trash f-s-25"></i></button>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <input type="hidden" name="totalrow" id="totalrow" value='<?= $i?>' />
                                    @endif
                                </div>
                            </div>
                        </div>
                    </fieldset>
                </form>


               @if(Session::has('message'))
                    <div class="col-sm-12">
                        <div class="alert  {{ Session::get('alert-class', 'alert-info') }} alert-dismissible fade show" role="alert">{{ Session::get('message') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                    @endif
               <!--<div class="tab-content pl-3 p-1" id="myTabContent">
                  <div class="tab-pane fade active show" id="home" role="tabpanel" aria-labelledby="home-tab">
                     <div class="cmr1">
                        <div class="col-lg-12">
                           <div class="custom-tab">

                               <form action="{{url('admin/vehicles')}}" method="post">
                                   {{csrf_field()}}
                              <nav class="col-md-12 tabcatlog">
                                 <div class="nav nav-tabs tabdiv" id="nav-tab" role="tablist">
                                    <a class="nav-item nav-link <?= $tab==1?"active":"tabdiv" ?>" id="custom-nav-general-tab" data-toggle="tab" href="#custom-nav-general" role="tab" aria-controls="custom-nav-general" aria-selected="true">{{__('messages.general')}}</a>
                                    <a class="nav-item nav-link <?= $tab==2?"active":"tabdiv" ?>" id="custom-nav-price-tab" data-toggle="tab" href="#custom-nav-price" role="tab" aria-controls="custom-nav-price" aria-selected="false">{{__('messages.price')}}</a>
                                    <a class="nav-item nav-link <?= $tab==3?"active":"tabdiv" ?>" id="custom-nav-inventory-tab" data-toggle="tab" href="#custom-nav-inventory" role="tab" aria-controls="custom-nav-inventory" aria-selected="false">Stock Informaction</a>
                                    <a class="nav-item nav-link <?= $tab==4?"active":"tabdiv" ?>" id="custom-nav-imgls-tab" data-toggle="tab" href="#custom-nav-imgls" role="tab" aria-controls="custom-nav-imgls" aria-selected="false">{{__('messages.images')}}</a>
                                    <a class="nav-item nav-link <?= $tab==5?"active":"tabdiv" ?>" id="custom-nav-attribute-tab" data-toggle="tab" href="#custom-nav-attribute" role="tab" aria-controls="custom-nav-attribute" aria-selected="true">{{__('messages.attribute')}}</a>
                                 </div>
                              </nav>
                              <div class="tab-content col-md-12 p-0 " id="nav-tabContent">
                                 <div class="tab-pane fade <?= $tab==1?"show active":"" ?> pd10" id="custom-nav-general" role="tabpanel" aria-labelledby="custom-nav-general-tab" >
                                    <h3>{{__('messages.general')}}</h3>
                                    <div class="tabdivcatlog"></div>
                                       <div class="form-group">
                                          <label for="name" class="control-label mb-1">{{__('messages.name')}}<span class="reqfield">*</span>
                                          </label>
                                          <input id="pro_name" name="pro_name" value="<?= isset($data->name)?$data->name:""?>" type="text" class="form-control" aria-required="true" aria-invalid="false" placeholder="{{__('messages.name')}}">
                                       </div>
                                       <div class="form-group">
                                          <label for="description" class="control-label mb-1">{{__('messages.description')}}<span class="reqfield">*</span>
                                          </label>
                                          <textarea name="description" id="description" class="editor"><?= isset($data->description)?$data->description:""?></textarea>
                                       </div>
                                       <div class="row">
                                          <div class="form-group col-md-4">
                                             <label for="category" class="control-label mb-1">{{__('messages.cate_gory')}}<span class="reqfield">*</span>
                                             </label>
                                             <select name="category" required id="catelogcategory" class="form-control" onchange="getsubcategory(this.value)">
                                                <option value="">{{__('messages.select')}} {{__('messages.cate_gory')}}</option>
                                                @foreach($category??array() as $ca)
                                                <option value="{{$ca->id}}" <?= isset($data->category)&&$data->category==$ca->id?"selected='selected'":""?> >{{$ca->name}}</option>
                                                @endforeach
                                             </select>
                                          </div>
                                          <div class="form-group col-md-4">
                                             <label for="subcategory" class="control-label mb-1">{{__('messages.sub_cat')}}<span class="reqfield">*</span>
                                             </label>
                                             <select name="subcategory" required id="subcategory" class="form-control" onchange="getbrand(this.value)">
                                                <option value="">{{__('messages.select')}} {{__('messages.sub_cat')}}</option>
                                                 @if(isset($subcategory))
                                                   @foreach($subcategory??array() as $sub)
                                                      <option value="{{$sub->id}}" <?= isset($data->subcategory)&&$data->subcategory==$sub->id?"selected='selected'":""?>>{{$sub->name}}</option>
                                                   @endforeach
                                                 @endif
                                             </select>
                                          </div>
                                          <div class="form-group  col-md-4" >
                                             <label for="brand" class="control-label mb-1">{{__('messages.brands')}}<span class="reqfield">*</span>
                                             </label>
                                             <select name="brand" required id="brand" class="form-control">
                                                 <option value="">{{__('messages.select')}} {{__('messages.brands')}}</option>
                                                @if(isset($brand))
                                                  @foreach($brand??array() as $br)
                                                     <option value="{{$br->id}}" <?= isset($data->brand)&&$data->brand==$br->id?"selected='selected'":""?>>{{$br->name}}</option>
                                                  @endforeach
                                                @endif
                                             </select>
                                          </div>
                                          <div class="form-group col-md-6" >
                                             <label for="brand" class="control-label mb-1">{{__('messages.tax_name')}}<span class="reqfield">*</span>
                                             </label>
                                             <select class="form-control" name="texable" id="texable" >
                                                <option value="">{{__('messages.select').' '.__('messages.tax_name')}}</option>
                                                @foreach($taxes??array() as $t)
                                                   <option value="{{$t->id}}" <?= isset($data->tax_class)&&$data->tax_class==$t->id?"selected='selected'":""?>>{{$t->tax_name}}</option>
                                                @endforeach
                                             </select>
                                          </div>
                                          <div class="form-group col-md-6" >
                                             <label for="brand" class="control-label mb-1">{{__('messages.color_name')}}<span class="reqfield">*</span>
                                             </label>
                                             <input type="text" name="color" id="colorname"  value="<?= isset($data->color)?$data->color:""?>" class=" form-control" >
                                          </div>

                                          <div class="col-md-12 form-group rowset">

                                             <button class="btn btn-primary btn-flat m-b-30 m-t-30" type="submit">{{__('messages.save')}}</button>

                                          </div>
                                           </div>
                                     </div>
                                     <div class="tab-pane fade <?= $tab==2?"show active":"" ?> pd10" id="custom-nav-price" role="tabpanel" aria-labelledby="custom-nav-price-tab">
                                        <h3>{{__('messages.price')}}</h3>
                                        <div class="tabdivcatlog"></div>
                                        <form action="{{url('admin/saveprice')}}" method='post'>
                                            {{csrf_field()}}
                                           <div class="row">
                                              <div class="form-group col-md-4" >
                                                 <label for="name" class="control-label mb-1">4 hours price<span class="reqfield">*</span>
                                                 </label>
                                                  <select name="four_hour" id="" class="form-control">
                                                      <option value="yes">Yes</option>
                                                      <option value="no">No</option>
                                                  </select>
                                              </div>
                                              <div class="form-group col-md-4">
                                                 <label for="name" class="control-label mb-1">{{__('messages.selling_price')}}<span class="reqfield">*</span>
                                                 </label>
                                                 <input name="four_hour_price" type="number" step="any" class="form-control" aria-required="true" value="<?= isset($data->price)?$data->price:""?>" aria-invalid="false" placeholder="{{__('messages.selling_price')}}" required>
                                              </div>
                                              <div class="form-group col-md-4">
                                                 <label for="name" class="control-label mb-1">{{__('messages.spe_price')}}</label>
                                                 <input name="four_hour_discount" type="number" class="form-control" aria-invalid="false" value="<?= isset($data->special_price)?$data->special_price:""?>" placeholder="{{__('messages.spe_price')}}">
                                              </div>
                                           </div>

                                            <div class="row">
                                              <div class="form-group col-md-4" >
                                                 <label for="name" class="control-label mb-1">8 hours price<span class="reqfield">*</span>
                                                 </label>
                                                  <select name="four_hour" id="" class="form-control">
                                                      <option value="yes">Yes</option>
                                                      <option value="no">No</option>
                                                  </select>
                                              </div>
                                              <div class="form-group col-md-4">
                                                 <label for="name" class="control-label mb-1">{{__('messages.selling_price')}}<span class="reqfield">*</span>
                                                 </label>
                                                 <input name="four_hour_price" type="number" step="any" class="form-control" aria-required="true" value="<?= isset($data->price)?$data->price:""?>" aria-invalid="false" placeholder="{{__('messages.selling_price')}}" required>
                                              </div>
                                              <div class="form-group col-md-4">
                                                 <label for="name" class="control-label mb-1">{{__('messages.spe_price')}}</label>
                                                 <input name="four_hour_discount" type="number" class="form-control" aria-invalid="false" value="<?= isset($data->special_price)?$data->special_price:""?>" placeholder="{{__('messages.spe_price')}}">
                                              </div>
                                           </div>

                                            <div class="row">
                                              <div class="form-group col-md-4" >
                                                 <label for="name" class="control-label mb-1">Full day price<span class="reqfield">*</span>
                                                 </label>
                                                  <select name="four_hour" id="" class="form-control">
                                                      <option value="yes">Yes</option>
                                                      <option value="no">No</option>
                                                  </select>
                                              </div>
                                              <div class="form-group col-md-4">
                                                 <label for="name" class="control-label mb-1">{{__('messages.selling_price')}}<span class="reqfield">*</span>
                                                 </label>
                                                 <input name="full_day_price" type="number" step="any" class="form-control" aria-required="true" value="<?= isset($data->price)?$data->price:""?>" aria-invalid="false" placeholder="{{__('messages.selling_price')}}" required>
                                              </div>
                                              <div class="form-group col-md-4">
                                                 <label for="name" class="control-label mb-1">{{__('messages.spe_price')}}</label>
                                                 <input name="full_day_discount" type="number" class="form-control" aria-invalid="false" value="<?= isset($data->special_price)?$data->special_price:""?>" placeholder="{{__('messages.spe_price')}}">
                                              </div>
                                           </div>
                                           <div class="row form-group rowset">
                                              <button class="btn btn-primary btn-flat m-b-30 m-t-30" type="submit" >{{__('messages.save')}}</button>
                                           </div>
                                        </form>
                                     </div>
                                     <div class="tab-pane fade <?= $tab==3?"show active":"" ?> pd10" id="custom-nav-inventory" role="tabpanel" aria-labelledby="custom-nav-inventory-tab">
                                        <h3>{{__('messages.inventory')}}</h3>
                                        <div class="tabdivcatlog"></div>
                                        <form action="{{url('admin/saveinventory')}}" method='post'>
                                            {{csrf_field()}}
                                           <div class="row">

                                               <div class="form-group col-md-4">
                                                   <label for="name" class="control-label mb-1">Stock Quantity</label>
                                                   <input name="stock" type="number" class="form-control" aria-invalid="false" value="<?= isset($data->stock)?$data->stock:""?>" placeholder="Stock Quantity">
                                               </div>

                                               <div class="form-group col-md-4">
                                                   <label for="name" class="control-label mb-1">Availability {{__('messages.start')}}</label>
                                                   <input id="spe_pri_start" name="spe_pri_start" type="text" class="form-control" aria-required="true" value="<?= isset($data->special_price_start)?$data->available_from:""?>" aria-invalid="false">
                                               </div>
                                               <div class="form-group col-md-4">
                                                   <label for="name" class="control-label mb-1">Availability {{__('messages.to')}}</label>
                                                   <input id="spe_pri_to" name="spe_pri_to" type="text" class="form-control" aria-required="true" value="<?= isset($data->special_price_to)?$data->available_to:""?>" aria-invalid="false">
                                               </div>
                                               <div class="row form-group rowset">
                                           </div>
                                              <button class="btn btn-primary btn-flat m-b-30 m-t-30" type="submit">{{__('messages.save')}}</button>
                                           </div>
                                        </form>
                                     </div>
                                     <div class="tab-pane fade <?= $tab==4?"show active":"" ?> pd10" id="custom-nav-imgls" role="tabpanel" aria-labelledby="custom-nav-imgls-tab">
                                        <h3>{{__('messages.images')}}</h3>
                                        <div class="tabdivcatlog"></div>
                                        <form action="{{url('admin/saveproductimage')}}" method="post">
                                           {{csrf_field()}}
                                           <div class="mar20">
                                              <h4 class="orderdiv">{{__('messages.basic_img')}}</h4>
                                              <div id="uploaded_image">
                                                 <div class="upload-btn-wrapper">
                                                    <button class="btn imgcatlog">
                                                       <input type="hidden" name="real_basic_img" id="real_basic_img" value="<?= isset($data->basic_image)?$data->basic_image:""?>"/>
                                                       <?php
                                                             if(isset($data->basic_image)){
                                                                 $path=asset('upload/product')."/".$data->basic_image;
                                                             }
                                                             else{
                                                                 $path=asset('admin-asset/images/imgplaceholder.png');
                                                             }
                                                       ?>
                                                    <img src="{{$path}}" alt="..." class="img-thumbnail imgsize"  id="basic_img" >
                                                    </button>
                                                    <input type="hidden" name="basic_img" id="basic_img1"/>
                                                    <input type="file" name="upload_image" id="upload_image" />
                                                 </div>
                                              </div>
                                           </div>

                                        <div class="mar20">
                                           <h4 class="orderdiv">{{__('messages.add_img')}}</h4>

                                                 <div id="additional_image" class="fleft">
                                                    <?php $i=0;?>
                                                    @if(isset($data->additional_image))
                                                      <?php $imagels=explode(",",$data->additional_image);;?>
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
                                                          <input type="file" name="add_image" id="add_image" />
                                                       </div>
                                          </div>
                                        <input type="hidden" name="add_total_img" id="add_total_img" value="{{$i}}" />
                                        <div class="row form-group col-md-12" style="margin-top: 15px;margin-left: 10px;">
                                              <button class="btn btn-primary btn-flat m-b-30 m-t-30" type="submit">{{__('messages.save')}}</button>
                                        </div>
                                        </form>
                                     </div>
                                     <div class="tab-pane fade <?= $tab==5?"show active":"" ?>  pd10" id="custom-nav-attribute" role="tabpanel" aria-labelledby="custom-nav-attribute-tab">
                                        <h3>{{__('messages.attribute')}}</h3>
                                        <div class="tabdivcatlog"></div>
                                         <form action="{{url('admin/saveproductattibute')}}" method="post">
                                           {{csrf_field()}}
                                           <div class="categories-accordion mrg30" uk-accordion="targets: > div > .category-wrap">
                                              <div class="categories-sort-wrap uk-sortable uk-margin-top" uk-sortable="handle: .sort-categories" id="attributelist">
                                                 <?php $i=0;?>
                                                 @if(isset($data->attributels)&&count($data->attributels)>0)
                                                    @foreach($data->attributels as $da)
                                                      <div class="category-wrap" data-id="{{$i}}" id="mainattr{{$i}}">
                                                    <h3 class="uk-accordion-title uk-background-secondary uk-light uk-padding-small">
                                                       <div class="uk-sortable-handle sort-categories uk-display-inline-block ti-layout-grid4-alt" ></div>
                                                       {{__('messages.New Attributes')}}
                                                    </h3>
                                                    <div class="uk-accordion-content categories-content " style="margin-top: 0px;padding:0px">
                                                       <table class="table table-striped table-bordered">
                                                          <tbody>
                                                             <tr>
                                                                <td>
                                                                   <input type="text" required name="attributeset[{{$i}}][set]" class="form-control" value="{{$da->attributeset}}" placeholder="Enter Attribute Set">
                                                                   <table class="table table-striped table-bordered cmr1">
                                                                      <thead>
                                                                         <tr>
                                                                            <th>Attribute</th>
                                                                            <th>Value</th>
                                                                            <th></th>
                                                                         </tr>
                                                                      </thead>
                                                                      <tbody id="morerow{{$i}}">
                                                                         <?php
                                                                               $label=explode(',',$da->attribute);
                                                                               $value=explode(",",$da->value);
                                                                         ?>
                                                                         <?php for($j=0;$j<count($label);$j++){
                                                                                 $index=$j+1;
                                                                            ?>
                                                                         <tr id="attrrow{{$i.$index}}">
                                                                            <td><input required class="form-control" type="text" value="{{$label[$j]}}" name="attributeset[{{$i}}][label][]"></td>
                                                                            <td><input required class="form-control" type="text" value="{{$value[$j]}}" name="attributeset[{{$i}}][value][]"></td>
                                                                            <td><button onclick="removeattrrow({{$i}},{{$index}})" class="btn btn-danger"><i class="fa fa-trash f-s-25"></i></button></td>
                                                                         </tr>
                                                                         <?php }?>
                                                                      </tbody>
                                                                   </table>
                                                                   <input type="hidden" name="totalattr{{$i}}" id="totalattr{{$i}}" value="{{$j+1}}"/>
                                                                   <button type="button" class="btn btn-primary fleft" onclick="addattrrow({{$i}})"><i class="fa fa-plus"></i>Add New Row</button>
                                                                </td>
                                                                <td>
                                                                   <button onclick="removerowmain({{$i}})" class="btn btn-danger"><i class="fa fa-trash f-s-25"></i></button>
                                                                </td>
                                                             </tr>
                                                          </tbody>
                                                       </table>
                                                    </div>
                                                 </div>
                                                     <?php $i++;?>
                                                    @endforeach
                                                     <input type="hidden" name="totalrow" id="totalrow" value='<?= $i-1?>' />
                                                 @else
                                                 <div class="category-wrap" data-id="0" id="mainattr0">
                                                    <h3 class="uk-accordion-title uk-background-secondary uk-light uk-padding-small">
                                                       <div class="uk-sortable-handle sort-categories uk-display-inline-block ti-layout-grid4-alt" ></div>
                                                       {{__('messages.New Attributes')}}
                                                    </h3>
                                                    <div class="uk-accordion-content categories-content " style="margin-top: 0px;padding:0px">
                                                       <table class="table table-striped table-bordered">
                                                          <tbody>
                                                             <tr>
                                                                <td>
                                                                    <label for="" class="form-label">Style</label>
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
                                                                            <td><input required class="form-control" type="text" name="model"></td>
                                                                        </tr>
                                                                         <tr id="attrrow01">
                                                                            <td>Color</td>
                                                                            <td><input required class="form-control" type="text" name="model"></td>
                                                                        </tr>
                                                                         <tr id="attrrow01">
                                                                            <td>Class</td>
                                                                            <td><input required class="form-control" type="text" name="model"></td>
                                                                        </tr>
                                                                         <tr id="attrrow01">
                                                                            <td>Body</td>
                                                                            <td><input required class="form-control" type="text" name="model"></td>
                                                                        </tr>
                                                                         <tr id="attrrow01">
                                                                            <td>Seat</td>
                                                                            <td><input required class="form-control" type="text" name="model"></td>
                                                                        </tr>
                                                                         <tr id="attrrow01">
                                                                            <td>Actual MSRP</td>
                                                                            <td><input required class="form-control" type="text" name="model"></td>
                                                                        </tr>
                                                                      </tbody>
                                                                   </table>
                                                                </td>
                                                                <td>
                                                                   <button onclick="removerowmain(0)" class="btn btn-danger"><i class="fa fa-trash f-s-25"></i></button>
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
                                                                            <td>Horse Power</td>
                                                                            <td><input required class="form-control" type="text" name="horse_power"></td>
                                                                        </tr>
                                                                         <tr id="attrrow01">
                                                                            <td>Torque</td>
                                                                            <td><input required class="form-control" type="text" name="torque"></td>
                                                                        </tr>
                                                                         <tr id="attrrow01">
                                                                            <td>Transmission</td>
                                                                            <td><input required class="form-control" type="text" name="transmission"></td>
                                                                        </tr>
                                                                         <tr id="attrrow01">
                                                                            <td>Suspension</td>
                                                                            <td><input required class="form-control" type="text" name="suspension"></td>
                                                                        </tr>
                                                                         <tr id="attrrow01">
                                                                            <td>Clearance</td>
                                                                            <td><input required class="form-control" type="text" name="clearance"></td>
                                                                        </tr>
                                                                         <tr id="attrrow01">
                                                                            <td>Differential</td>
                                                                            <td><input required class="form-control" type="text" name="differential"></td>
                                                                        </tr>
                                                                         <tr id="attrrow01">
                                                                            <td>Gear Ratio</td>
                                                                            <td><input required class="form-control" type="text" name="gear_ratio"></td>
                                                                        </tr>
                                                                      </tbody>
                                                                   </table>
                                                                </td>
                                                                <td>
                                                                   <button onclick="removerowmain(0)" class="btn btn-danger"><i class="fa fa-trash f-s-25"></i></button>
                                                                </td>
                                                             </tr>
                                                          </tbody>
                                                       </table>
                                                    </div>
                                                 </div>
                                                  <input type="hidden" name="totalrow" id="totalrow" value='<?= $i?>' />
                                                 @endif
                                              </div>
                                           </div>

                                           <div id="container"></div>
                                           <div class="col-md-12 p-0">
                                              <button type="button" class="btn btn-outline-secondary fleft" onclick="addrow()">{{__('messages.add_new_row')}}</button>
                                              <button type="submit" class="btn btn-primary florig">{{__('messages.save')}}</button>
                                           </div>
                                        </form>
                                     </div>


                                  </div>
                               </form>
                           </div>
                        </div>
                     </div>
                  </div>
               </div> -->
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
<script type="text/javascript" src="{{asset('js/vehicle.js').'?v=wewe3'}}"></script>
<script src="/admin-asset/jquery-validation/jquery.validate.js"></script> <!-- Jquery Validation Plugin Css -->
<script src="/admin-asset/plugins/jquery-steps/jquery.steps.js"></script> <!-- JQuery Steps Plugin Js -->

<!--<script src="/admin/js/pages/forms/form-wizard.js"></script>-->

<script>
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

                $('#spe_pri_start, #spe_pri_to').datepicker({
                    showOn: "both",
                    beforeShow: customRange,
                    dateFormat: "M dd,yy",
                });



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
