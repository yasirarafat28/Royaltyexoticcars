@extends('layouts.admin')

@section('content')
    <section id="main-content" class=" ">
        <div class="wrapper main-wrapper row" style=''>

            <div class='col-xs-12'>
                <div class="page-title">

                    <div class="pull-left">
                        <!-- PAGE HEADING TAG - START -->
                        <h1 class="title">Customer List</h1>
                        <!-- PAGE HEADING TAG - END -->
                    </div>

                    <div class="pull-right hidden-xs">
                        <ol class="breadcrumb">
                            <li>
                                <a href="/admin/dashboard"><i class="fa fa-home"></i>Home</a>
                            </li>
                            <li>
                                <a href="/admin/users"><i class="fa fa-home"></i>Customer List</a>
                            </li>
                            <li class="active">
                                <strong>Edit
                                </strong>
                            </li>
                        </ol>
                    </div>

                </div>
            </div>
            <div class="clearfix"></div>

            <div class="col-md-offset-2 col-md-8">
                <section class="box">

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

                    <header class="panel_header" style="border-bottom:1px solid #eee">
                        <h2 class="title pull-left">Edit Customer</h2>
                        <div class="actions panel_actions pull-right">
                            <div class="form-group no-mb">
                                <a class="box_close fa fa-times"></a>
                            </div>

                        </div>
                    </header>
                    <br>
                    <div class="content-body">

                        <form action="{{url('admin/users/'.$member->id)}}" method="POST" class=" padding-30"  enctype="multipart/form-data">

                            {{csrf_field()}}
                            {{method_field('PATCH')}}

                            <div class="form-group">
                                <label class="form-label">First Name</label>
                                <div class="controls name">
                                    <input type="text" class="form-control" name="first_name" value="{{$member->first_name}}" placeholder="Enter first name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Last Name</label>
                                <div class="controls username">
                                    <input type="text" class="form-control" name="last_name" value="{{$member->last_name}}" placeholder="Enter last name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Email</label>
                                <div class="controls email">
                                    <input type="email" class="form-control" name="email" value="{{$member->email}}" placeholder="Enter email">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-label" id="country_id">Country</label>
                                <div class="controls country_id">
                                    <select name="country_id" id="country_id" class="form-control selectpicker" onchange="GetPhoneCode(this.value)">
                                        <option value="#">Select Country</option>
                                        @foreach($countries as $item)
                                            <option {{$member->country_id==$item->id?'selected':''}} value="{{$item->id}}">{{$item->name}}</option>
                                        @endforeach

                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="form-label">Phone</label>
                                <div class="controls input-group phone">
                                    <span class="input-group-addon" id="dial_code">+{{$member->dial_code}}</span>
                                    <input type="text" class="form-control" name="phone" value="{{$member->phone}}" placeholder="Enter phone">

                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-label">City</label>
                                <div class="controls email">
                                    <input type="text" class="form-control" name="city" value="{{$member->city}}" placeholder="Enter city">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Address</label>
                                <div class="controls email">
                                    <input type="text" class="form-control" name="address" value="{{$member->address}}" placeholder="Enter address">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="">Status</label>
                                <select name="status" id="" class="form-control">
                                    <option {{$member->status=='active'?'selected':''}} value="active">Active</option>
                                    <option {{$member->status=='pending'?'selected':''}}  value="pending">Pending</option>
                                    <option {{$member->status=='suspended'?'selected':''}}  value="suspended">Suspended</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Photo</label>
                                <div class="controls email">
                                    <input type="file" class="form-control" name="photo" placeholder="Enter email">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Password</label>
                                <div class="controls password">
                                    <input type="password" class="form-control" name="password" placeholder="Enter password">
                                </div>
                            </div>

                            <div class="form-group row text-center">
                                <button class="btn btn-primary btn-corner">Submit</button>
                            </div>
                        </form>

                    </div>
                </section>

            </div>
        </div>
    </section>


    <!-- Create Modal -->

@endsection
@section('script')
    <script type="text/javascript">

        function GetPhoneCode(country_id) {

            $.ajax({
                url: '{{ route('GetPhoneCode') }}',
                type: 'GET',
                data: {
                    "country_id": country_id,
                },
                success: function (data) {
                    $('#dial_code').text('+'+data);
                },
                error: function (error) {
                    console.log(error);

                }
            });
        };
    </script>
@endsection
