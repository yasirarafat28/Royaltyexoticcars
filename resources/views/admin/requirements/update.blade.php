@extends('admin.index')

@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}" />
<div class="breadcrumbs">
   <div class="col-sm-4">
      <div class="page-header float-left">
         <div class="page-title">
            Vehicle Requirements
         </div>
      </div>
   </div>
   <div class="col-sm-8">
      <div class="page-header float-right">
         <div class="page-title">
            <ol class="breadcrumb text-right">
               <li><a href="{{url('admin/vehicle_requirements')}}">Vehicle Requirements</a></li>
               <li class="active">Edit Vehicle Requirements</li>
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
                 <h4>Edit Vehicle Requirements</h4>
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
                      <form method="POST" action="{{ url('admin/vehicle_requirements/'.$require->id)}}" accept-charset="UTF-8" enctype="multipart/form-data">
                          {{csrf_field()}}
                          {{method_field('PATCH')}}
                          <div class="form-group col-md-6">
                              <label for="name" class="control-label">Type</label>
                              <select name="category_id" id="" class="form-control">
                                  <option value="">Select an option</option>
                                  @foreach($categories??array() as $category)
                                      <option {{$require->category_id==$category->id?'selected':''}} value="{{$category->id}}">{{$category->name}}</option>
                                  @endforeach
                              </select>
                          </div>
                          <div class="form-group col-md-6">
                              <label for="name" class="control-label">Title</label>
                              <input class="form-control" name="type" type="text" value="{{$require->type?$require->type:$require->category->name}}">
                          </div>
                          <!--<div class="form-group col-md-6">
                              <label for="name" class="control-label">Category ID</label>
                              <input class="form-control" name="category_id" type="integer" value="{{$require->category_id}}">
                          </div>-->
                          <div class="form-group col-md-6">
                              <label for="name" class="control-label">Local Age</label>
                              <input class="form-control" name="local_age" type="text" value="{{$require->local_age}}">
                          </div>
                          <div class="form-group col-md-6">
                              <label for="name" class="control-label">local driving license</label>
                              <input class="form-control" name="local_driving_licence" type="text" value="{{$require->local_driving_licence}}">
                          </div>
                          <!--<div class="form-group col-md-6">
                              <label for="name" class="control-label">local insurance</label>
                              <input class="form-control" name="local_insurance" type="text" value="{{$require->local_insurance}}">
                          </div>
                          <div class="form-group col-md-6">
                              <label for="name" class="control-label">local liability insurance</label>
                              <input class="form-control" name="local_liability_insurance" type="text" value="{{$require->local_liability_insurance}}">
                          </div>-->
                          <div class="form-group col-md-6">
                              <label for="name" class="control-label">local property damage waiver</label>
                              <input class="form-control" name="local_property_damage_waiver" type="text" value="{{$require->local_property_damage_waiver}}">
                          </div>
                          <div class="form-group col-md-6">
                              <label for="name" class="control-label">local tire protection</label>
                              <input class="form-control" name="local_tire_protection" type="text" value="{{$require->local_tire_protection}}">
                          </div>
                          <div class="form-group col-md-6">
                              <label for="name" class="control-label">local mechanical breakdown coverage</label>
                              <input class="form-control" name="local_mechanical_breakdown_coverage" type="text" value="{{$require->local_mechanical_breakdown_coverage}}">
                          </div>
                          <div class="form-group col-md-6">
                              <label for="name" class="control-label">local fuel credit</label>
                              <input class="form-control" name="local_fuel_credit" type="text" value="{{$require->local_fuel_credit}}">
                          </div>
                          <div class="form-group col-md-6">
                              <label for="name" class="control-label">international age</label>
                              <input class="form-control" name="international_age" type="text" value="{{$require->international_age}}">
                          </div>
                          <div class="form-group col-md-6">
                              <label for="name" class="control-label">internationl driving license</label>
                              <input class="form-control" name="international_driving_licence" type="text" value="{{$require->international_driving_licence}}">
                          </div>
                          <!--<div class="form-group col-md-6">
                              <label for="name" class="control-label">international insurance</label>
                              <input class="form-control" name="international_insurance" type="text" value="{{$require->international_insurance}}">
                          </div>
                          <div class="form-group col-md-6">
                              <label for="name" class="control-label">international full coverage insurance d1</label>
                              <input class="form-control" name="international_full_coverage_insurance_d1" type="text" value="{{$require->international_full_coverage_insurance_d1}}">
                          </div>
                          <div class="form-group col-md-6">
                              <label for="name" class="control-label">international full coverage insurance d2</label>
                              <input class="form-control" name="international_full_coverage_insurance_d2" type="text" value="{{$require->international_full_coverage_insurance_d2}}">
                          </div>-->
                          <div class="form-group col-md-6">
                              <label for="name" class="control-label">international property damage waiver</label>
                              <input class="form-control" name="international_property_damage_waiver" type="text" value="{{$require->international_property_damage_waiver}}">
                          </div>
                          <div class="form-group col-md-6">
                              <label for="name" class="control-label">international tire protection</label>
                              <input class="form-control" name="international_tire_protection" type="text" value="{{$require->international_tire_protection}}">
                          </div>
                          <div class="form-group col-md-6">
                              <label for="name" class="control-label">international mechanical breakdown coverage</label>
                              <input class="form-control" name="international_mechanical_breakdown_coverage" type="text" value="{{$require->international_mechanical_breakdown_coverage}}">
                          </div>
                          <div class="form-group col-md-6">
                              <label for="name" class="control-label">international fuel credit</label>
                              <input class="form-control" name="international_fuel_credit" type="text" value="{{$require->international_fuel_credit}}">
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

