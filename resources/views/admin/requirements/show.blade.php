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
                 <h4>Show Vehicle Requirements</h4>
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

                  <table class="table">
                      <tbody>
                          <tr>
                              <td>Type</td>
                              <td>{{$require->category->name??$require->type}}</td>
                          </tr>
                          <tr>
                              <td>Local Age</td>
                              <td>{{$require->local_age}}</td>
                          </tr>
                          <tr>
                              <td>local driving license</td>
                              <td>{{$require->local_driving_licence}}</td>
                          </tr>
                          <tr>
                              <td>local insurance</td>
                              <td>{{$require->local_insurance}}</td>
                          </tr>
                          <tr>
                              <td>local liability insurance</td>
                              <td>{{$require->local_liability_insurance}}</td>
                          </tr>
                          <tr>
                              <td>local property damage waiver</td>
                              <td>{{$require->local_property_damage_waiver}}</td>
                          </tr>
                          <tr>
                              <td>local tire protection</td>
                              <td>{{$require->local_tire_protection}}</td>
                          </tr>
                          <tr>
                              <td>local mechanical breakdown coverage</td>
                              <td>{{$require->local_mechanical_breakdown_coverage}}</td>
                          </tr>
                          <tr>
                              <td>local fuel credit</td>
                              <td>{{$require->local_fuel_credit}}</td>
                          </tr>
                          <tr>
                              <td>international age</td>
                              <td>{{$require->international_age}}</td>
                          </tr>
                          <tr>
                              <td>internationl driving license</td>
                              <td>{{$require->international_driving_licence}}</td>
                          </tr>
                          <tr>
                              <td>international insurance</td>
                              <td>{{$require->international_insurance}}</td>
                          </tr>
                          <tr>
                              <td>international full coverage insurance_d1</td>
                              <td>{{$require->international_full_coverage_insurance_d1}}</td>
                          </tr>
                          <tr>
                              <td>international full coverage insurance d2</td>
                              <td>{{$require->international_full_coverage_insurance_d2}}</td>
                          </tr>
                          <tr>
                              <td>international property damage waiver</td>
                              <td>{{$require->international_property_damage_waiver}}</td>
                          </tr>
                          <tr>
                              <td>international tire protection</td>
                              <td>{{$require->international_tire_protection}}</td>
                          </tr>
                          <tr>
                              <td>international mechanical breakdown coverage</td>
                              <td>{{$require->international_mechanical_breakdown_coverage}}</td>
                          </tr>
                          <tr>
                              <td>international fuel credit</td>
                              <td>{{$require->international_fuel_credit}}</td>
                          </tr>
                      </tbody>
                  </table>
                  </div>
              </div>
           </div>
        </div>
    </div>
</div>

@stop

