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
                              <td>{{$require->type}}</td>
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

