@extends('layouts.admin')

@section('content')
    <section id="main-content" class=" ">
        <div class="wrapper main-wrapper row" style=''>

            <div class='col-xs-12'>
                <div class="page-title">

                    <div class="pull-left">
                        <!-- PAGE HEADING TAG - START -->
                        <h1 class="title">Crypto Dashboard</h1>
                        <!-- PAGE HEADING TAG - END -->
                    </div>

                </div>
            </div>
            <div class="clearfix"></div>

            <div class="col-lg-12">
                <section class="box">

                    <header class="panel_header">
                        <h2 class="title pull-left">Category List</h2>
                        <div class="actions panel_actions pull-right">
                            <a class="box_close fa fa-times"></a>
                        </div>
                    </header>
                    <div class="content-body">
                        <div class="row">

                            <div class="col-md-12">
                                <form action="">

                                    <div class="row">
                                        <div class="col-md-2">
                                            <label for="">Type</label>

                                            <select name="status" class="form-control selectpicker">
                                                <option value="" data-select2-id="22">Select Option</option>
                                                <option value="pending"> Pending</option>
                                                <option value="processing"> processing</option>
                                                <option value="shipping">Shipping</option>
                                                <option value="shipped">Shipped</option>
                                                <option value="on_trip">On Trip</option>
                                                <option value="rejected">Rejected</option>
                                                <option value="completed">Completed</option>
                                            </select>
                                        </div>
                                        <div class="col-md-2">
                                            <label for="">Status</label>
                                            <select name="status" class="form-control selectpicker">
                                                <option value="" data-select2-id="22">Select Option</option>
                                                <option value="pending"> Pending</option>
                                                <option value="processing"> processing</option>
                                                <option value="shipping">Shipping</option>
                                                <option value="shipped">Shipped</option>
                                                <option value="on_trip">On Trip</option>
                                                <option value="rejected">Rejected</option>
                                                <option value="completed">Completed</option>
                                            </select>
                                        </div>
                                        <div class="col-md-2">
                                            <label for="">Date from</label>
                                            <input name="date_from" type="date" class="form-control" value="">
                                        </div>
                                        <div class="col-md-2">
                                            <label for="">Date To</label>
                                            <input name="date_to" type="date" class="form-control" value="">
                                        </div>
                                        <div class="col-md-2">
                                            <label for="">Action</label>
                                            <div class="row">
                                                <button type="submit" class="btn btn-primary btn-sm col-md-12">Find</button>

                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-xs-12">

                                <div class="table-responsive" data-pattern="priority-columns">
                                    <table id="tech-companies-1" class="table vm trans table-small-font no-mb table-bordered table-striped">
                                        <thead>
                                        <tr>
                                            <th>Icon</th>
                                            <th>Photo</th>
                                            <th>Name</th>
                                            <th>Slug</th>
                                            <th>Status</th>
                                            <th>Timestamp</th>
                                            <th  class="action-td" >Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        @foreach($records??array() as $item)
                                            <tr>
                                                <td><img src="{{asset($item->icon)}}" height="42" width="42"></td>
                                                <td><img src="{{asset($item->photo)}}" height="42" width="42"></td>
                                                <td>{{$item->name}}</td>
                                                <td>{{$item->slug}}</td>
                                                <td>{{$item->status}}</td>
                                                <td>{{$item->created_at}}</td>
                                                <td id="action" class="action-td">
                                                    <a class="btn btn-primary" data-toggle="modal" data-target="#modal-edit{{$item->id}}" title="Edit Vehicle Category"><i class="fa fa-pencil" aria-hidden="true"></i> Edit</a>
                                                    @if($level <2)
                                                        <a class="btn btn-success" href="{{url('admin/vehicle-categories/'.($level+1).'/'.$item->id)}}" title="View sub Categories Vehicle Category"><i class="fa fa-list" aria-hidden="true"></i> View Sub</a>
                                                    @endif

                                                    {!! Form::open([
                                                                       'method'=>'DELETE',
                                                                       'url' => ['admin/vehicle-categories-delete/'.$item->id],
                                                                       'style' => 'display:inline'
                                                                    ]) !!}
                                                    {!! Form::button('Delete', array(
                                                         'type' => 'submit',
                                                         'onclick' => 'return confirm("Are you sure? ");',
                                                         'class' => 'btn btn-danger',
                                                            'data-type'=>'confirm',
                                                         )) !!}
                                                    {!! Form::close() !!}

                                                </td>
                                            </tr>
                                        @endforeach


                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </section>

            </div>

        </div>
    </section>
@endsection
