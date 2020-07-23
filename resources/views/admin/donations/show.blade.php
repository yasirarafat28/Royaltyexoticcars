@extends('layouts.admin')

@section('content')
    <section id="main-content" class=" ">
        <div class="wrapper main-wrapper row" style=''>

            <div class='col-xs-12'>
                <div class="page-title">

                    <div class="pull-left">
                        <!-- PAGE HEADING TAG - START -->
                        <h1 class="title">Donation List</h1>
                        <!-- PAGE HEADING TAG - END -->
                    </div>

                    <div class="pull-right hidden-xs">
                        <ol class="breadcrumb">
                            <li>
                                <a href="/admin/dashboard"><i class="fa fa-home"></i>Home</a>
                            </li>
                            <li>
                                <a href="/admin/customers"><i class="fa fa-home"></i>Donation List</a>
                            </li>
                            <li class="active">
                                <strong>Show
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
                        <h2 class="title pull-left">Show Donation</h2>
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
                                <td>
                                    Reference No
                                </td>
                                <td>
                                    <strong class="text-info">{{$donation->ref}}</strong>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    Amount
                                </td>
                                <td>
                                    <h1 class="text-success">£ {{number_format($donation->amount,2)}}</h1>
                                </td>
                            </tr>
                            <tr>
                                <td>Payment Status</td>
                                <td>{{ucfirst($donation->payment_status)}}</td>
                            </tr>
                            <tr>
                                <td>Signup for bonus</td>
                                <td>


                                    @if($donation->donor_type=='unknown')
                                        No
                                    @else
                                        Yes
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td>Name</td>
                                <td>

                                    @if($donation->donor_type=='unknown')
                                        {{$donation->customer->first_name??'N/A'}} {{$donation->customer->last_name}}
                                    @else
                                        {{$donation->first_name??'N/A'}} {{$donation->last_name}}
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>


                                    @if($donation->donor_type=='unknown')
                                        {{$donation->customer->email??'N/A'}}
                                    @else
                                        {{$donation->email}}
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td>Phone</td>
                                <td>




                                    @if($donation->donor_type=='unknown')
                                        +{{$donation->customer->dial_code??''}} {{$donation->customer->phone??''}}
                                    @else
                                        +{{$donation->country->dial_code??''}} {{$donation->phone}}
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td>Country</td>
                                <td>{{$donation->country->name??'N/A'}}</td>
                            </tr>
                            <tr>
                                <td>City</td>
                                <td>{{$donation->city??'N/A'}}</td>
                            </tr>
                            <tr>
                                <td>Zip Code</td>
                                <td>{{$donation->zip_code??'N/A'}}</td>
                            </tr>
                            <tr>
                                <td>Address</td>
                                <td>{{$donation->address??'N/A'}}</td>
                            </tr>
                            <tr>
                                <td>Member Since</td>
                                <td>{{$donation->created_at??'N/A'}}</td>
                            </tr>
                            <tr>
                                <td>Status</td>
                                <td>{{$donation->status??'N/A'}}</td>
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
