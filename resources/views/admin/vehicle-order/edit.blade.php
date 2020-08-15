@extends('layouts.app_admin')

@section('style')
    <style>

        .wizard > .content {
            min-height: auto !important;
            position: unset;
        }
    </style>
@endsection
@section('content')
    <!-- Main Content -->
    <section class="content">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>Software
                        <small>Welcome to {{\App\Setting::setting()->app_name}}</small>
                    </h2>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <button class="btn btn-white btn-icon btn-round hidden-sm-down float-right m-l-10" type="button">
                        <i class="zmdi zmdi-plus"></i>
                    </button>
                    <ul class="breadcrumb float-md-right">
                        <li class="breadcrumb-item"><a href="{{url('/')}}"><i class="zmdi zmdi-home"></i></a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Workspaces</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container-fluid">


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

        <!-- Advanced Form Example With Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="header">
                            <h2><strong>Workspace </strong>Update</h2>
                            <ul class="header-dropdown">
                                <li class="remove">
                                    <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <form id="wizard_with_validation" method="POST" action="{{url('admin/workspaces/'.$workspace->id)}}" enctype="multipart/form-data">
                                {{csrf_field()}}
                                {{method_field('PATCH')}}
                                <h3>Basic Information</h3>
                                <fieldset>
                                    <div class="form-group form-float">
                                        <label for="">Workspace Name</label>
                                        <input type="text" class="form-control" placeholder="Name" name="name" required value="{{$workspace->name}}">
                                    </div>
                                    <div class="form-group form-float">
                                        <label for="">Logo</label>
                                        <input type="file" class="form-control" placeholder="Logo" name="logo" id="logo" value="{{$workspace->logo}}">
                                    </div>
                                    <div class="form-group form-float">
                                        <label for="">Short Description</label>
                                        <textarea name="description"  class="form-control" placeholder="Description">{{$workspace->description}}</textarea>
                                    </div>
                                    <div class="form-group form-float">
                                        <label for="">Status</label>
                                        <select name="status" class="form-control show-tick" required>
                                            <option value="">Select an option</option>
                                            <option {{$workspace->status=='pending'?'selected':''}} value="pending">Pending</option>
                                            <option {{$workspace->status=='active'?'selected':''}} value="active">Active</option>
                                            <option {{$workspace->status=='paused'?'selected':''}} value="paused">Paused</option>
                                            <option {{$workspace->status=='suspended'?'selected':''}} value="suspended">Suspended</option>
                                            <option {{$workspace->status=='closed'?'selected':''}} value="closed">Closed</option>
                                            <option {{$workspace->status=='removed'?'selected':''}} value="removed">Removed</option>
                                            <option {{$workspace->status=='expired'?'selected':''}} value="expired">Expired</option>
                                        </select>
                                    </div>
                                    <div class="form-group form-float">
                                        <label for="">Application</label>
                                        <select name="software_id" class="form-control show-tick "  data-live-search="true" required>
                                            <option value="">Select an application</option>
                                            @foreach($applications??array() as $application)
                                                <option {{$workspace->software_id==$application->id?'selected':''}} value="{{$application->id}}">{{$application->title}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group form-float">
                                        <label for="">Owner</label>
                                        <select name="user_id" class="form-control show-tick "  data-live-search="true" required>
                                            <option value="">Select an user</option>
                                            @foreach($users??array() as $user)
                                                <option {{$workspace->user_id==$user->id?'selected':''}} value="{{$user->id}}">{{$user->name}} | {{$user->member_id}} | {{$user->phone}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </fieldset>
                                <h3>Address & Contact Information</h3>
                                <fieldset>
                                    <div class="form-group form-float">
                                        <label for="">Full Address</label>
                                        <input type="text" name="address" placeholder="Full Address" class="form-control" required value="{{$workspace->address}}">
                                    </div>
                                    <div class="form-group form-float">
                                        <label for="">Contact Number</label>
                                        <input type="text" name="phone" placeholder="Contact Number" class="form-control" required value="{{$workspace->phone}}">
                                    </div>
                                    <div class="form-group form-float">
                                        <label for="">Email</label>
                                        <input type="email" name="email" placeholder="Email *" class="form-control" required value="{{$workspace->email}}">
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Advanced Form Example With Validation -->
        </div>
    </section>

@endsection

@section('script')
    <script src="/admin/plugins/jquery-validation/jquery.validate.js"></script> <!-- Jquery Validation Plugin Css -->
    <script src="/admin/plugins/jquery-steps/jquery.steps.js"></script> <!-- JQuery Steps Plugin Js -->

    <script>
        var form = $('#wizard_with_validation').show();
        form.steps({
            headerTag: 'h3',
            bodyTag: 'fieldset',
            transitionEffect: 'slideLeft',
            onInit: function (event, currentIndex) {
                //Set tab width
                var $tab = $(event.currentTarget).find('ul[role="tablist"] li');
                var tabCount = $tab.length;
                $tab.css('width', (100 / tabCount) + '%');

                //set button waves effect
                setButtonWavesEffect(event);
            },
            onStepChanging: function (event, currentIndex, newIndex) {
                if (currentIndex > newIndex) { return true; }

                if (currentIndex < newIndex) {
                    form.find('.body:eq(' + newIndex + ') label.error').remove();
                    form.find('.body:eq(' + newIndex + ') .error').removeClass('error');
                }

                form.validate().settings.ignore = ':disabled,:hidden';
                return form.valid();
            },
            onStepChanged: function (event, currentIndex, priorIndex) {
                setButtonWavesEffect(event);
            },
            onFinishing: function (event, currentIndex) {
                form.validate().settings.ignore = ':disabled';
                return form.valid();
            },
            onFinished: function (event, currentIndex) {
                //swal("Good job!", "Submitted!", "success");
                form.submit();
            }
        });

        form.validate({
            highlight: function (input) {
                $(input).parents('.form-line').addClass('error');
            },
            unhighlight: function (input) {
                $(input).parents('.form-line').removeClass('error');
            },
            errorPlacement: function (error, element) {
                $(element).parents('.form-group').append(error);
            },
            rules: {
                'confirm': {
                    equalTo: '#password'
                }
            }
        });
    </script>
@endsection
