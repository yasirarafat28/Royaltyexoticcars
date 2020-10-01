@extends('layouts.front')

@section('style')
    <style>
        body{
            background: #fbfbfb;
        }
        .form-control{
            height: calc(2em + .75rem + 2px) !important;
        }

        .social_icon span{
            font-size: 60px;
            margin-left: 10px;
        }

        .social_icon span:hover{
            color: white;
            cursor: pointer;
        }
        .card-header h3{
            font-weight: bold;
            font-style: 25px;
        }
        .card{
            border-radius: 1rem;
        }


        .input-group-text{
            width: 50px;

        }

        .input-group-text i{
            margin-left: auto;
            margin-right: auto;
            font-weight: bold;

        }

        .inputdiv {

        }



    </style>
@endsection
@section('content')
@php

    $setting = \App\Model\Setting::first();
@endphp

    <div class="inner_page">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header d-flex ">
                            <h3 class="mr-auto mt-auto mb-auto">Sign In</h3>
                            <div class="justify-content-end social_icon ml-auto text-success inputdiv">
                                <span><a href="{{$setting->fb_link}}"><i class="fa fa-facebook-square" style="color: red;"></i></a></span>
                                <!--<span><a href="https://myaccount.google.com/profile"><i class="fa fa-google-plus-square"  style="color: red;"></i></a></span>-->
                                <span><a href="{{$setting->tweeet_link}}"><i class="fa fa-twitter-square"  style="color: red;"></i></a></span>
                            </div>
                        </div>
                        <div class="card-body">

                            <form class="form" class="container" method="POST" action="{{ route('login') }}">
                                {{csrf_field()}}
                                <div class="content pt-5">

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
                                        <div class="input-group form-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text  bg-success text-white"><i class="fa fa-user"></i></span>
                                            </div>
                                            <input type="email" class="form-control" name="email" placeholder="Email">

                                        </div>
                                        <div class="input-group form-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text  bg-success text-white"><i class="fa fa-key"></i></span>
                                            </div>
                                            <input type="password" name="password" class="form-control" placeholder="Password">
                                        </div>
                                </div>
                                <div class="footer text-center">
                                    <button type="submit" class="button col-md-12" onclick="event.preventDefault();$(this).text(' Processing').prop('disabled',true);this.form.submit()">SIGN IN</button>
                                    @if (Route::has('password.request'))
                                        <h5><a href="{{ route('password.request') }}" class="link">Forgot Password?</a></h5>
                                    @endif
                                    <span>Don't have an account? <a href="{{url('register')}}">Sign up</a></span>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
