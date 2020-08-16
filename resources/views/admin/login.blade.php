@extends('layouts.app')

@section('content')

    <form action="{{url('admin/postlogin')}}" method="post">
        {{csrf_field()}}
        <div class="form-group">
            <label>{{__('messages.email')}}</label>
            <input type="email" class="form-control" placeholder="{{__('messages.email')}}" required name="email" id="email">
        </div>
        <div class="form-group">
            <label>{{__('messages.password')}}</label>
            <input type="password" name="password" id="password" class="form-control" placeholder="{{__('messages.password')}}">
        </div>
        <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">
            {{__('messages.sign_in')}}
        </button>
        <div class="form-group" style="">
            <a href="{{url('password/reset')}}" style="color: blue !important;float: right;">Forgot password?</a>
        </div>
    </form>
@endsection
