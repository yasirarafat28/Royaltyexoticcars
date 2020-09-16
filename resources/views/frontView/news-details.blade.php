@extends('layouts.front')
@section('style')
    <style>

        .single-sidebar {
            -webkit-box-shadow: 0 1px 5px rgba(0, 0, 0, 0.3);
            box-shadow: 0 1px 5px rgba(0, 0, 0, 0.3);
            color: #575757;
            font-size: 15px;
            margin-bottom: 30px;
        }

        .single-sidebar h3 {
            background-color: red;
            color: #fff;
            font-size: 18px;
            padding: 12px 5px;
            text-align: center;
            text-transform: uppercase;
        }

        .single-sidebar:last-child {
            margin-bottom: 0;
        }

        .sidebar-body {
            line-height: 2;
            padding: 30px 15px;
        }

        .sidebar-body i.fa {
            color: red;
            font-size: 17px;
            margin-right: 4px;
            text-align: center;
            width: 20px;
        }

        .sidebar-body i.fa {
            color: red;
            font-size: 17px;
            margin-right: 4px;
            text-align: center;
            width: 20px;
        }

        .single-recent-tips {
            margin-bottom: 20px;
        }

        .single-recent-tips:last-child {
            margin-bottom: 0;
        }

        .recent-tip-thum,
        .recent-tip-body {
            display: table-cell;
            vertical-align: middle;
        }

        .recent-tip-thum a img {
            border-radius: 50%;
            height: 85px;
            min-width: 85px;
        }

        .recent-tip-body {
            color: #555;
            font-size: 10px;
            font-weight: 600;
            padding-left: 15px;
        }

        .recent-tip-body a {
            color: #3a3a3a;
            font-size: 15px;
            font-weight: 600;
            -webkit-transition: all 0.4s ease 0s;
            transition: all 0.4s ease 0s;
        }

        .recent-tip-body h4 {
            line-height: 1;
        }

        .recent-tip-body a:hover {
            color: red;
        }

        .recent-tip-body span {
            display: block;
            margin-top: 5px;
            text-transform: uppercase;
        }

        .sidebar-body .social-icons a i {
            border: 1px solid #ddd;
            border-radius: 50%;
            color: #000;
            height: 40px;
            line-height: 40px;
            -webkit-transition: all 0.3s ease 0s;
            transition: all 0.3s ease 0s;
            width: 40px;
        }

        .sidebar-body .social-icons a i:hover {
            background-color: red;
            border-color: red;
            color: #fff;
        }

        .car-details-content h2 {
            border-bottom: 1px solid red;
            font-weight: 400;
            margin-bottom: 20px;
            padding-bottom: 10px;
        }

        .car-details-content h2 span {
            float: right;
            font-size: 18px;
        }

        .car-details-info {
            color: #666;
            line-height: 2;
            padding-top: 30px;
        }

        .car-details-info h4 {
            color: #000;
            font-size: 20px;
            margin-bottom: 10px;
            text-transform: uppercase;
        }
        ul.recent-tips li {
            list-style-type: none;
        }

    </style>
@endsection
@section('content')
    @php

	    $setting = \App\Model\Setting::first();
    @endphp
    <div class="main" style="padding-top:30px;">
        <div class="container  extra-top-margin">
            <div class="row">

                <div class="col-lg-8">
                    <div class="car-details-content">
                        <h2 class="text-uppercase">{{$post->title}}</h2>
                        <div class="car-preview-crousel">
                            <img src="{{url($post->image??'')}}" onerror="this.src='/no-image.png';" alt="">
                        </div>
                        <div class="car-details-info blog-content">
                            <p>{!! $post->description !!}</p>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4">
                    <div class="sidebar-content-wrap m-t-50">

                        <div class="single-sidebar">
                            <h3>For More Informations</h3>
                            <div class="sidebar-body">
                                <a style="color: #575757;" href="tel:{{$setting->phone}}"><i class="fa fa-mobile"></i> {{$setting->phone}}</a>
                                <br>
                                <a style="color: #575757;" href="mailto:{{$setting->email}}"><i class="fa fa-envelope"></i> {{$setting->email}}</a>
                                <p><i class="fa fa-clock-o"></i> Mon - Sun  9am - 7pm</p>
                            </div>
                        </div>


                        <div class="single-sidebar">
                            <h3>Rental Tips</h3>
                            <div class="sidebar-body">
                                <ul class="recent-tips">
                                    @forelse($related_items??array() as $item)
                                        <li class="single-recent-tips">
                                            <div class="recent-tip-thum">
                                                <a href="{{route('newsDetails',[$item->id,$item->slug])}}"><img src="{{url($item->image??'')}}" onerror="this.src='/no-image.png';" alt="JSOFT"></a>
                                            </div>
                                            <div class="recent-tip-body">
                                                <h4><a href="{{route('newsDetails',[$item->id,$item->slug])}}">{{$item->title}}</a></h4>
                                                <span class="date">{{date("l, F d Y h:i:a",strtotime($item->created_at))}}</span>
                                            </div>
                                        </li>
                                    @empty
                                        <li class="single-recent-tips text-center">

                                            No more items
                                        </li>
                                    @endforelse

                                </ul>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
