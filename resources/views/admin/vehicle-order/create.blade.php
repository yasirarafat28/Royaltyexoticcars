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
                    <h2>Students</h2>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <ul class="breadcrumb float-md-right">
                        <li class="breadcrumb-item"><a href="{{url('/admin/dashboard')}}"><i class="zmdi zmdi-home"></i></a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Add Student</a></li>
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
                            <h2>Add <strong>Student</strong></h2>
                            <ul class="header-dropdown">
                                <li class="remove">
                                    <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                                </li>
                            </ul>
                        </div>

                        <div class="body">
                            <form id="wizard_with_validation" action="{{url('admin/students')}}"  accept-charset="UTF-8" enctype="multipart/form-data" method="POST">
                                {{csrf_field()}}
                                <div class="row clearfix">

                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for=""><small>Session </small></label>
                                            <select class="form-control ms" name="session_id" id="session_id" required>
                                                <option value="">-- Please select --</option>
                                                @foreach($sessions??array() as $session)
                                                    <option value="{{$session->id}}">{{$session->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for=""><small>Class/Group</small></label>
                                            <select class="form-control ms" name="class_id" id="class_id" required>
                                                <option value="">-- Please select --</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="">Section<small>(optional)</small></label>
                                            <select class="form-control ms" name="section_id" id="section_id">
                                                <option value="">-- Please select --</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="">Student ID <small class="text-danger">(This will be an unique ID)</small></label>
                                            <input type="text" class="form-control" placeholder="Student ID" name="roll" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="">Class Roll <small class="text-danger">(This will be an unique ROll in a class)</small></label>
                                            <input type="text" class="form-control" placeholder="Student ID" name="student_id" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for=""><small>Name</small></label>
                                            <input type="text" class="form-control" placeholder="Name" name="name" required>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for=""><small>Email</small></label>
                                            <input type="email" class="form-control" placeholder="Email" name="email" >
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for=""><small>Phone</small></label>
                                            <input type="text" class="form-control" placeholder="Phone" name="phone" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for=""><small>Father Name</small></label>
                                            <input type="text" class="form-control" placeholder="Father Name" name="father">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for=""><small>Mother Name</small></label>
                                            <input type="text" class="form-control" placeholder="Mother Name" name="mother">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="input-group pt-2">
                                            <span class="input-group-addon">
                                                <i class="zmdi zmdi-calendar"></i>
                                            </span>
                                            <input type="date" class="form-control" name="dob" placeholder="Date of Birth...">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for=""><small>Gender</small></label>
                                            <select class="form-control ms" name="gender">
                                                <option value="">-- Please select --</option>
                                                <option value="male" >Male</option>
                                                <option value="female" >Female</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for=""><small>Blood Group</small></label>
                                            <select class="form-control ms" name="blood_group">
                                                <option value="">-- Please select --</option>
                                                <option value="a+">A RhD positive (A+)</option>
                                                <option value="a-" > RhD negative (A-) </option>
                                                <option value="b+">B RhD positive (B+)</option>
                                                <option value="b-">B RhD negative (B-) </option>
                                                <option value="o+">O RhD positive (O+) </option>
                                                <option value="o-">O RhD negative (O-)</option>
                                                <option value="ab+">AB RhD positive (AB+)</option>
                                                <option value="ab-">AB RhD negative (AB-)</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for=""><small>Present address</small></label>
                                            <input type="text" class="form-control" placeholder="Present address" name="present_address">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for=""><small>Permanent address</small></label>
                                            <input type="text" class="form-control" placeholder="Permanent address" name="permanent_address">
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for=""><small>NID/Passport No.</small></label>
                                            <input type="text" class="form-control" placeholder="NID/Passport No." name="nid">
                                        </div>
                                    </div>


                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for=""><small>Birth Reg. No.</small></label>
                                            <input type="text" class="form-control" placeholder="Birth Reg. No." name="phone">
                                        </div>
                                    </div>


                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for=""><small>Photo</small></label>
                                            <input type="file" class="form-control" placeholder="Photo" name="photo">
                                        </div>
                                    </div>

                                    <div class="col-md-12 text-center">
                                        <button class="btn btn-primary btn-round">Save Changes</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('script')
    <script src="/admin/plugins/jquery-validation/jquery.validate.js"></script> <!-- Jquery Validation Plugin Css -->

    <script>
        var form = $('#wizard_with_validation').show();

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

    <script>
        $('[name="session_id"]').on('change',function (event) {
            session_id = $(this).val();

        });
    </script>
@endsection
