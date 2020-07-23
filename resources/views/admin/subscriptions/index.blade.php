@extends('layouts.admin')

@section('content')
    <section id="main-content" class=" ">
        <div class="wrapper main-wrapper row" style=''>

            <div class='col-xs-12'>
                <div class="page-title">

                    <div class="pull-left">
                        <!-- PAGE HEADING TAG - START -->
                        <h1 class="title">Subscription List</h1>
                        <!-- PAGE HEADING TAG - END -->
                    </div>

                    <div class="pull-right hidden-xs">
                        <ol class="breadcrumb">
                            <li>
                                <a href="/admin/dashboard"><i class="fa fa-home"></i>Home</a>
                            </li>
                            <li class="active">
                                <strong>Subscription List
                                </strong>
                            </li>
                        </ol>
                    </div>

                </div>
            </div>
            <div class="clearfix"></div>

            <div class="col-lg-12">
                <section class="box">

                    <header class="panel_header">
                        <h2 class="title pull-left">Subscription List</h2>
                        <div class="actions panel_actions pull-right">
                            <div class="form-group no-mb">
                                <button data-toggle="modal" data-target="#CreateModal" type="submit" class="btn btn-primary btn-corner "><i class="fa fa-plus"></i> New</button>

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

                                <div class="table-responsive" data-pattern="priority-columns">
                                    <table id="tech-companies-1" class="table vm trans table-small-font no-mb table-bordered table-striped">
                                        <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Country</th>
                                            <!--<th>Product</th>-->
                                            <th>Timestamp</th>
                                            <th  class="action-td" >Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        @forelse($records??array() as $item)
                                            <tr>
                                                <td>{{$item->name}}</td>
                                                <td>{{$item->email}}</td>
                                                <td>{{$item->country->name??''}}</td>
                                                <!--<td>{{$item->product->name??''}}</td>-->
                                                <td>{{$item->created_at}}</td>
                                                <td id="action" class="action-td">
                                                    <a class="btn btn-primary" data-toggle="modal" data-target="#modal-edit{{$item->id}}" title="Edit Subscription"><i class="fa fa-pencil" aria-hidden="true"></i> Edit</a>

                                                    @if(\Illuminate\Support\Facades\Auth::user()->roles->first()->name=='super_admin')
                                                    {!! Form::open([
                                                                       'method'=>'DELETE',
                                                                       'url' => ['admin/subscriptions/'.$item->id],
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

                                                </td>
                                            </tr>
                                        @empty
                                            <tr class="text-center">
                                                <td colspan="5"><strong>Sorry!</strong> Found no records</td>
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
            <div class="modal fade" id="CreateModal" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="btn btn-danger btn-corner pull-right" data-dismiss="modal">CLOSE</button>
                            <h4 class="title pull-left" id="">Create Subscription</h4>
                        </div>
                        <div class="clearfix"></div>
                        <div class="modal-body">
                            <form method="POST" action="{{ url('admin/subscriptions')}}" accept-charset="UTF-8" enctype="multipart/form-data">
                                {{csrf_field()}}

                                <div class="row">
                                    <div class="form-group">
                                        <label class="form-label">Full name</label>
                                        <div class="controls name">
                                            <input type="text" class="form-control" name="name" placeholder="Enter full name">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Email</label>
                                        <div class="controls email">
                                            <input type="text" class="form-control" name="email" placeholder="Enter email">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" id="country_id">Product</label>
                                        <div class="controls country_id">
                                            <select name="product_id" id="product_id" class="form-control">
                                                <option value="#">Select Product</option>
                                                @foreach($products??array() as $product)
                                                    <option value="{{$product->id}}">{{$product->name}}</option>
                                                @endforeach

                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" id="country_id">Country</label>
                                        <div class="controls country_id">
                                            <select name="country_id" id="country_id" class="form-control" onchange="GetPhoneCode(this.value,0)">
                                                <option value="#">Select Country</option>
                                                @foreach($countries??array() as $item)
                                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                                @endforeach

                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row text-center">
                                        <button class="btn btn-primary btn-corner col-md-offset-4 col-md-4">Save Changes</button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>


            @foreach($records??array() as $key=>$item)
            <!--Edit Modal -->
                <div class="modal fade" id="modal-edit{{$item->id}}">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title">Update Subscription</h4>
                            </div>
                            <div class="modal-body">
                                <form method="POST" action="{{ url('admin/subscriptions/'.$item->id) }}"  accept-charset="UTF-8" enctype="multipart/form-data" >

                                    {!! csrf_field() !!}
                                    {!! method_field('PATCH') !!}

                                    <div class="row">
                                        <div class="form-group">
                                            <label class="form-label">Full name</label>
                                            <div class="controls name">
                                                <input type="text" class="form-control" value="{{$item->name}}" name="name" placeholder="Enter full name">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label">Email</label>
                                            <div class="controls email">
                                                <input type="text" class="form-control" name="email" value="{{$item->email}}"  placeholder="Enter email">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" id="country_id">Product</label>
                                            <div class="controls country_id">
                                                <select name="product_id" id="product_id" class="form-control">
                                                    <option value="#">Select Product</option>
                                                    @foreach($products??array() as $product)
                                                        <option {{$product->id==$item->product_id?'selected':''}} value="{{$product->id}}">{{$product->name}}</option>
                                                    @endforeach

                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" id="country_id">Country</label>
                                            <div class="controls country_id">
                                                <select name="country_id" id="country_id" class="form-control" onchange="GetPhoneCode(this.value,'{{$item->id}}')">
                                                    <option value="#">Select Country</option>
                                                    @foreach($countries??array() as $country)
                                                        <option {{$country->id==$item->country_id?'selected':''}} value="{{$country->id}}">{{$country->name}}</option>
                                                    @endforeach

                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row text-center">
                                            <button class="btn btn-primary btn-corner col-md-offset-4 col-md-4">Save Changes</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </section>


    <!-- Create Modal -->

@endsection
@section('script')
    <script type="text/javascript">

        function GetPhoneCode(country_id,id) {

            $.ajax({
                url: '{{ route('GetPhoneCode') }}',
                type: 'GET',
                data: {
                    "country_id": country_id,
                },
                success: function (data) {
                    $('#dial_code'+id).text('+'+data);
                },
                error: function (error) {
                    console.log(error);

                }
            });
        };
    </script>
@endsection

