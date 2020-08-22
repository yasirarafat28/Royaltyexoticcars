@extends('admin.index')
@section('content')
<div class="breadcrumbs">
   <div class="col-sm-4  float-right-1">
      <div class="page-header float-left float-right-1">
         <div class="page-title">
            <h1>Vehicles</h1>
         </div>
      </div>
   </div>
   <div class="col-sm-8 float-left-1">
      <div class="page-header float-right float-left-1">
         <div class="page-title">
            <ol class="breadcrumb text-right">
               <li><a href="#">Vehicles</a></li>
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
               <a  class="btn btn-primary btn-flat m-b-30 m-t-30 text-white" href="/admin/vehicles/create" >{{__('messages.add')}} Vehicle</a>
               <div class="table-responsive cmr1">
                  <table id="vehicledataTable" class="table table-striped table-bordered dttablewidth" >
                     <thead>
                        <tr>
                           <th>{{__('messages.id')}}</th>
                           <th>{{__('messages.thumbnail')}}</th>
                           <th>{{__('messages.name')}}</th>
                           <th>{{__('Type')}}</th>
                           <th>{{__('messages.price')}}</th>
                           <th>{{__('messages.action')}}</th>
                        </tr>
                     </thead>
                      <tbody>
                      @foreach($recordtts??array() as $vehicle)

                          <tr>
                              <td>{{$loop->iteration}}</td>
                              <td>
                                  <img src="{{url($vehicle->feature_image??'')}}" width="50px" alt="">
                              </td>
                              <td>
                                  {{$vehicle->name}}
                              </td>
                              <td>
                                  {{$vehicle->category->name??'N/A'}}
                              </td>
                          </tr>
                      @endforeach
                      </tbody>
                  </table>
               </div>
            </div>
         </div>
      </div>

</div>
@stop
