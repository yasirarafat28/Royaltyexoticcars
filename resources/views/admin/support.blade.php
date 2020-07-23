@extends('layouts.admin')

@section('content')

    <section id="main-content" class="">
        <div class="wrapper main-wrapper row" style="">

            <div class="col-xs-12">
                <div class="page-title">

                    <div class="pull-left">
                        <!-- PAGE HEADING TAG - START -->
                        <h1 class="title">Support</h1>
                        <!-- PAGE HEADING TAG - END -->
                    </div>

                    <div class="pull-right hidden-xs">
                        <ol class="breadcrumb">
                            <li>
                                <a href="#"><i class="fa fa-home"></i>Home</a>
                            </li>
                            <li class="active">
                                <strong>Support</strong>
                            </li>
                        </ol>
                    </div>

                </div>
            </div>
            <div class="clearfix"></div>
            <!-- MAIN CONTENT AREA STARTS -->
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


            <div class="col-lg-12">
                <section class="box">
                    <header class="panel_header">
                        <div class="pull-left panel_actions">
                            <h2 class="title">Support</h2>
                        </div>
                        <div class="actions panel_actions pull-right">
                            <a class="box_close fa fa-times"></a>
                        </div>
                    </header>
                    <div class="content-body">
                        <div class="row">
                            <div class="col-xs-12">

                                <div class="table-responsive" data-pattern="priority-columns">
                                    <table id="tech-companies-1" class="table vm trans table-small-font no-mb table-bordered table-striped">
                                        <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Subject</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($records??array() as $item)
                                            <tr>
                                                <td>{{$item->name??'Unknown'}}</td>
                                                <td><small class="text-muted">{{$item->email}}</small></td>
                                                <td class="green-text boldy">{{$item->subject}}</td>
                                                <td><span class="badge  w-70 round-{{$item->status=='reviewed'?'success':'danger'}}">{{$item->status}}</span></td>

                                                <td class="btn-group">
                                                    <a href="#editModal_{{$item->id}}" data-toggle="modal" class="btn btn-primary btn-sm">
                                                        <i class="fa fa-pencil"></i>
                                                    </a>
                                                    <a href="#showModal_{{$item->id}}" data-toggle="modal" class="btn btn-primary btn-sm">
                                                        <i class="fa fa-eye"></i>
                                                    </a>
                                                    <div aria-hidden="true" role="dialog" tabindex="-1" id="editModal_{{$item->id}}" class="modal fade">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                                                                    <h4 class="modal-title">Update Message</h4>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <div class="row">

                                                                        <div class="col-md-12">
                                                                            <form method="POST" action="{{url('admin/support/'.$item->id)}}">
                                                                                {{csrf_field()}}
                                                                                {{method_field('PATCH')}}
                                                                                <div class="form-group ">
                                                                                    <label class="form-label">Status</label>
                                                                                    <div class="controls name">
                                                                                        <select name="status" class="form-control">
                                                                                            <option {{$item->status=='pending'?'selected':''}} value="pending">Pending</option>
                                                                                            <option {{$item->status=='reviewed'?'selected':''}} value="reviewed">Reviewed</option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>

                                                                                <div class="form-group row" style="text-align: center;">

                                                                                    <button id="2fa-submit-btn" type="submit" class="btn btn-info"> Update </button>
                                                                                </div>
                                                                            </form>

                                                                        </div>

                                                                    </div>

                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div aria-hidden="true" role="dialog" tabindex="-1" id="showModal_{{$item->id}}" class="modal fade">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                                                                    <h4 class="modal-title">Preview Message</h4>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <div class="row">

                                                                        <div class="col-md-12">
                                                                            <table class="table table-striped">
                                                                                <tbody>
                                                                                <tr>
                                                                                    <td>Name</td>
                                                                                    <td>{{$item->name}}</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>Email</td>
                                                                                    <td><a href="mailto:{{$item->email}}">{{$item->email}}</a></td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>Subject</td>
                                                                                    <td>{{$item->subject}}</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>Message</td>
                                                                                    <td>{{$item->message}}</td>
                                                                                </tr>
                                                                                @if(isset($item->attachment) && $item->attachment)
                                                                                    <tr>
                                                                                        <td>Attachment</td>
                                                                                        <td><a target="_blank" href="{{url($item->attachment)}}">Click here</a></td>
                                                                                    </tr>
                                                                                @endif
                                                                                <tr>
                                                                                    <td>Status</td>
                                                                                    <td>{{$item->status}}</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>Timestamp</td>
                                                                                    <td>{{$item->created_at}}</td>
                                                                                </tr>
                                                                                </tbody>

                                                                            </table>

                                                                        </div>

                                                                    </div>

                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    @if(\Illuminate\Support\Facades\Auth::user()->roles->first()->name=='super_admin')

                                                    {!! Form::open([
                                                                   'method'=>'DELETE',
                                                                   'url' => ['/admin/support', $item->id],
                                                                   'style' => 'display:inline'
                                                                ]) !!}
                                                    {!! Form::button('<i class="fa fa-trash"></i>', array(
                                                         'type' => 'submit',
                                                         'onclick' => 'return confirm("Are you sure? ");',
                                                         'class' => 'btn btn-danger btn-sm',
                                                            'data-type'=>'confirm',
                                                         )) !!}
                                                    {!! Form::close() !!}
                                                    @endif
                                                </td>
                                            </tr>
                                        @endforeach
                                        @if(sizeof($records)<1)
                                            <tr>
                                                <td colspan="6" class="text-center">Sorry! No data found</td>
                                            </tr>
                                        @endif

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

@section('script')
@endsection
