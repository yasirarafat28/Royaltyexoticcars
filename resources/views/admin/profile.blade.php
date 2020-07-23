@extends('layouts.admin')
@section('style')

    <!-- HEADER SCRIPTS INCLUDED ON THIS PAGE - START -->
    <link href="/admin/plugins/icheck/skins/all.css" rel="stylesheet" type="text/css" media="screen">
    <!-- HEADER SCRIPTS INCLUDED ON THIS PAGE - END -->
    <style>
        .switch {
            position: relative;
            display: inline-block;
            width: 60px;
            height: 34px;
        }

        .switch input {
            opacity: 0;
            width: 0;
            height: 0;
        }

        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ccc;
            -webkit-transition: .4s;
            transition: .4s;
        }

        .slider:before {
            position: absolute;
            content: "";
            height: 26px;
            width: 26px;
            left: 4px;
            bottom: 4px;
            background-color: white;
            -webkit-transition: .4s;
            transition: .4s;
        }

        input:checked + .slider {
            background-color: #2196F3;
        }

        input:focus + .slider {
            box-shadow: 0 0 1px #2196F3;
        }

        input:checked + .slider:before {
            -webkit-transform: translateX(26px);
            -ms-transform: translateX(26px);
            transform: translateX(26px);
        }

        /* Rounded sliders */
        .slider.round-switch {
            border-radius: 34px;
            width: 65px;
        }

        .slider.round-switch:before {
            border-radius: 50%;
        }
    </style>
@endsection
@section('content')

    <section id="main-content" class=" ">
        <div class="wrapper main-wrapper row" style=''>


            <div class='col-xs-12'>
                <div class="page-title">

                    <div class="pull-left">
                        <!-- PAGE HEADING TAG - START -->
                        <h1 class="title">Account Setting
                        </h1>
                        <!-- PAGE HEADING TAG - END -->
                    </div>

                    <div class="pull-right hidden-xs">
                        <ol class="breadcrumb">
                            <li>
                                <a href="/admin/dashboard"><i class="fa fa-home"></i>Home</a>
                            </li>
                            <li class="active">
                                <strong>Account Setting
                                </strong>
                            </li>
                        </ol>
                    </div>

                </div>
            </div>
            <div class="clearfix"></div>
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

            <div class="col-lg-6">
                <div class="row">
                    <div class="col-lg-12">
                        <section class="box has-border-left-3">
                            <header class="panel_header" style="border-bottom:1px solid #eee">
                                <h2 class="title pull-left"><img src="/admin/crypto-dash/set1.png" class="wd mr-5" alt="">Account Information </h2>

                            </header>
                            <div class="content-body">
                                <div class="row">
                                    <div class="form-container mt-20 no-padding-right no-padding-left over-h">
                                        <form id="icon_validate" action="{{route('profileUpdate',\Illuminate\Support\Facades\Auth::id())}}" novalidate="novalidate" method="POST" enctype="multipart/form-data">
                                            {{csrf_field()}}

                                            <div class=" col-xs-12">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label class="form-label">First Name</label>

                                                            <div class="controls">
                                                                <i class=""></i>
                                                                <input type="text" class="form-control" name="first_name" value="{{$user->first_name}}" >
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Last Name</label>

                                                            <div class="controls">
                                                                <i class=""></i>
                                                                <input type="text" class="form-control" name="last_name" value="{{$user->last_name}}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label class="form-label">E-mail</label>

                                                            <div class="controls">
                                                                <i class=""></i>
                                                                <input type="text" class="form-control" value="{{$user->email}}" name="email" readonly="true">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Country</label>

                                                            <div class="controls">
                                                                <i class=""></i>
                                                                <select name="country_id" id="" class="form-control" onchange="GetPhoneCode(this.value)" >
                                                                    <option value="">Select Country</option>
                                                                    @foreach($countries??array() as $item)
                                                                        <option {{$item->id==$user->country_id?'selected':''}} value="{{$item->id}}">{{$item->name}}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Phone Number</label>

                                                            <div class="controls input-group">
                                                                <i class=""></i>
                                                                <span class="input-group-addon" id="dial_code">+{{$user->dial_code}}</span>
                                                                <input type="text" class="form-control" value="{{$user->phone}}" name="phone">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Zip Code</label>

                                                            <div class="controls">
                                                                <i class=""></i>
                                                                <input type="text" class="form-control" placeholder="Zip code" value="{{$user->zip_code}}" name="zip_code" >
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label class="form-label">City</label>
                                                            <div class="controls">
                                                                <i class=""></i>
                                                                <input type="text" class="form-control" placeholder="City" value="{{$user->city}}" name="city" >
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Address</label>
                                                            <div class="controls">
                                                                <i class=""></i>
                                                                <input type="text" class="form-control" placeholder="Address" value="{{$user->address}}" name="address" >
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-12">
                                                        <header class="prof-avtar gradient-blue">
                                                            <div class="avatar-img-wrapper">
                                                                <img src="{{url($user->photo??'')}}" onerror="this.src='/admin/crypto-dash/profile.png';" style="max-width:100px" alt="">
                                                            </div>
                                                            <div class="form-group mb-0">
                                                                <p class="form-label w-text mb-5">Edit Personal image</p>
                                                                <label class="form-label w-text">Upload File</label>
                                                                <span class="desc g-text">"JPG, GIF or PNG Max size of 800K"</span>
                                                                <div class="controls">
                                                                    <input type="file" class="" id="formfield10" name="photo">
                                                                </div>
                                                            </div>
                                                        </header>
                                                    </div>
                                                    <div class="pull-right mt-30 mr-10">
                                                        <button type="submit" class="btn btn-primary btn-corner right15"><i class="fa fa-check"></i> Update</button>
                                                    </div>

                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>

                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-lg-12">
                        <section class="box has-border-left-3">
                            <header class="panel_header" style="border-bottom:1px solid #eee">
                                <h2 class="title pull-left"><img src="/admin/crypto-dash/set6.png" class="wd mr-5" alt="">Two-factor authentication </h2>

                            </header>
                            <div class="content-body">

                                <div class="row padding-30">

                                    <div class="col-xs-12 no-pl no-pr">
                                        <div class="col-md-2 no-pl no-pr" style="position:relative;padding: 7px 0 0;">
                                            <form action="{{url('changeTwoFaStatus',Illuminate\Support\Facades\Auth::id())}}" method="POST">
                                                {{csrf_field()}}
                                                <label class="switch">

                                                    <input name="status" id="TwoFA_switch" value="{{\Illuminate\Support\Facades\Auth::user()->two_fa_status=='email'?'none':'email'}}" onchange="this.form.submit()" {{\Illuminate\Support\Facades\Auth::user()->two_fa_status=='email'?'checked':''}} type="checkbox">

                                                    <span class="slider round-switch"></span>
                                                </label>
                                            </form>
                                        </div>
                                        <div class="col-md-10 text-left no-pl" style="position:relative;padding: 0;">
                                            <h4 class="icheck-label text-left form-label"><small><strong>Enable or disable Two-Factor Authentication</strong></small></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <div class="clearfix"></div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <section class="box has-border-left-3">
                            <header class="panel_header" style="border-bottom:1px solid #eee">
                                <h2 class="title pull-left"><img src="/admin/crypto-dash/set4.png" class="wd mr-5" alt="">Security Information </h2>

                            </header>
                            <div class="content-body">
                                <div class="row">
                                    <div class="form-container mt-20 no-padding-right no-padding-left over-h">

                                        <form id="icon_validate" action="{{route('change_password',\Illuminate\Support\Facades\Auth::id())}}" novalidate="novalidate" method="POST">
                                            {{csrf_field()}}

                                            <div class=" col-xs-12">
                                                <div class="row">

                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label class="form-label">Old Password</label>
                                                            <div class="controls">
                                                                <i class=""></i>
                                                                <input type="password" class="form-control" placeholder="Enter old password" name="old_password">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label class="form-label">New Password</label>
                                                            <div class="controls">
                                                                <i class=""></i>
                                                                <input type="password" class="form-control" placeholder="Enter new password" name="new_password">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label class="form-label">Confirm Password</label>
                                                            <div class="controls">
                                                                <i class=""></i>
                                                                <input type="password" class="form-control" placeholder="Repeat password" name="confirm_password">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="pull-right mt-30 mr-10">
                                                        <button type="submit" class="btn btn-primary btn-corner right15"><i class="fa fa-check"></i> Update</button>
                                                    </div>

                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>

                    <div class="clearfix"></div>
                </div>
            </div>



            <!-- MAIN CONTENT AREA ENDS -->
        </div>
    </section>

@endsection



@section('script')

    <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START -->
    <script src="/admin/plugins/icheck/icheck.min.js"></script>
    <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END -->
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

