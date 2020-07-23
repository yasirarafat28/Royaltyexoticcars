@extends('layouts.admin')

@section('content')
    <section id="main-content" class=" ">
        <div class="wrapper main-wrapper row" style=''>

            <div class='col-xs-12'>
                <div class="page-title">

                    <div class="pull-left">
                        <!-- PAGE HEADING TAG - START -->
                        <h1 class="title">Team Member List</h1>
                        <!-- PAGE HEADING TAG - END -->
                    </div>

                    <div class="pull-right hidden-xs">
                        <ol class="breadcrumb">
                            <li>
                                <a href="/admin/dashboard"><i class="fa fa-home"></i>Home</a>
                            </li>
                            <li class="active">
                                <strong>Team Member List
                                </strong>
                            </li>
                        </ol>
                    </div>

                </div>
            </div>
            <div class="clearfix"></div>

            <div class="col-lg-12">
                <section class="box">

                    <header class="panel_header" style="border-bottom:1px solid #eee">
                        <h2 class="title pull-left">Team Member List</h2>
                        <div class="actions panel_actions pull-right">
                            <div class="form-group no-mb">
                                <a href="/admin/users/create" class="btn btn-primary color-white btn-corner "><i class="fa fa-plus"></i> New</a>

                            </div>

                        </div>
                    </header>
                    <div class="content-body">
                        <div class="row">
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

                            <div class="clearfix"></div>

                            <div class="col-xs-12">
                                <form action="">
                                    <div class="col-md-3">
                                        <label for="">Filter by</label>
                                        <select name="status" id="" class="form-control">
                                            <option value="">Select</option>
                                            <option value="active" {{isset($_GET['status']) && $_GET['status']=='active'?'selected':''}}>Active</option>
                                            <option value="pending" {{isset($_GET['status']) && $_GET['status']=='pending'?'selected':''}}>Pending</option>
                                            <option value="suspended" {{isset($_GET['status']) && $_GET['status']=='suspended'?'selected':''}}>Suspended</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="">Keyword (Name or E-mail or Phone)</label>
                                        <input name="q" type="text" class="form-control" value="{{$_GET['q']??''}}">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="" class="mb-1"></label>
                                        <button type="submit" class="btn btn-primary form-control">Search</button>
                                    </div>
                                    <div class="clearfix"></div>
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
                                            <th>Image</th>
                                            <th>Name</th>
                                            <th>Phone</th>
                                            <th>Email</th>
                                            <th>Country</th>
                                            <th>Status</th>
                                            <th>Timestamp</th>
                                            <th  class="action-td" >Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                            @forelse($records??array() as $item)
                                                <tr>
                                                    <td style="width: 10%;"><img src="{{asset($item->photo??'')}}" height="42" width="42"></td>
                                                    <td>{{$item->first_name}} {{$item->last_name}}</td>
                                                    <td>{{$item->phone}}</td>
                                                    <td>{{$item->email}}</td>
                                                    <td>{{$item->country->name??''}}</td>
                                                    <td>{{ucfirst($item->status)}}</td>
                                                    <td>{{$item->created_at}}</td>
                                                    <td id="action" class="action-td">
                                                        <a class="btn btn-primary" href="{{url('admin/users/'.$item->id.'/edit')}}"  title="Edit Team Member"><i class="fa fa-pencil" aria-hidden="true"></i> Edit</a>
                                                        <a class="btn btn-primary" href="{{url('admin/users/'.$item->id)}}"  title="Edit Team Member"><i class="fa fa-eye" aria-hidden="true"></i> Show</a>

                                                        @if(\Illuminate\Support\Facades\Auth::user()->roles->first()->name=='super_admin')
                                                            @if(isset($item->roles[0]->name) && $item->roles[0]->name!='super_admin')
                                                                {!! Form::open([
                                                                                   'method'=>'DELETE',
                                                                                   'url' => ['admin/users/'.$item->id],
                                                                                   'style' => 'display:inline'
                                                                                ]) !!}
                                                                {!! Form::button('Delete', array(
                                                                     'type' => 'submit',
                                                                     'onclick' => 'return confirm("Are you sure? ");',
                                                                     'class' => 'btn btn-danger',
                                                                        'data-type'=>'confirm',
                                                                     )) !!}
                                                                {!! Form::close() !!}
                                                            @endif
                                                        @endif

                                                    </td>
                                                </tr>
                                            @empty
                                                <tr class="text-center">
                                                    <td colspan="8"><strong>Sorry!</strong> Found no records</td>
                                                </tr>
                                            @endforelse
                                            {!! $records->appends(\Illuminate\Support\Facades\Request::except('page'))->links() !!}

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


    <!-- Create Modal -->

@endsection
