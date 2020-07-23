@extends('layouts.admin')

@section('content')
    <section id="main-content" class=" ">
        <div class="wrapper main-wrapper row" style=''>

            <div class='col-xs-12'>
                <div class="page-title">

                    <div class="pull-left">
                        <!-- PAGE HEADING TAG - START -->
                        <h1 class="title">Why us Post List</h1>
                        <!-- PAGE HEADING TAG - END -->
                    </div>

                    <div class="pull-right hidden-xs">
                        <ol class="breadcrumb">
                            <li>
                                <a href="/admin/dashboard"><i class="fa fa-home"></i>Home</a>
                            </li>
                            <li>
                                <a href=""><i class="fa fa-home"></i>Why us Post List</a>
                            </li>
                            <li class="active">
                                <strong>Create
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
                        <h2 class="title pull-left">Create Post</h2>
                        <div class="actions panel_actions pull-right">
                            <div class="form-group no-mb">
                                <a class="box_close fa fa-times"></a>
                            </div>

                        </div>
                    </header>
                    <br>
                    <div class="content-body">
                        <table class="table table-striped">
                            <tbody>

                            <tr>
                                <td colspan="2">
                                    <div class="uprofile-image mt-30">
                                        <img  class="img-responsive"  src="{{url($item->feature_image??'')}}" onerror="this.src='{{asset('/admin/crypto-dash/profile.png')}}'">

                                    </div>
                                </td>
                                <td>
                                </td>
                            </tr>
                            <tr>
                                <td>Title</td>
                                <td>{{$item->title}}</td>
                            </tr>
                            <tr>
                                <td>Category</td>
                                <td>{{$item->category->name??'Unknown'}}</td>
                            </tr>
                            <tr>
                                <td>Description</td>
                                <td>{{strip_tags($item->description)}}</td>
                            </tr>
                            <tr>
                                <td>Since</td>
                                <td>{{$item->created_at??'N/A'}}</td>
                            </tr>
                            <tr>
                                <td>Status</td>
                                <td>{{$item->status??'N/A'}}</td>
                            </tr>
                            </tbody>

                        </table>
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
