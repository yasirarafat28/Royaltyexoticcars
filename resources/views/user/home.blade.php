@extends('user.index')
@section('title')
{{__('messages.site_name')}}
@stop
@section('content')

<div class="container">




    <section>

        <style>

            .preview-image{

               height: 200px;
            }
            .carousel-item {
                height: 400px;
                min-height: 350px;
                background: no-repeat center center scroll;
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
            }

            .carousel-caption {
                bottom: 25% !important;
            }


            .carousel-item img{
                width: 100%;
                height: 475px !important;
            }

            .carousel-control-prev:hover, .carousel-control-next:hover{
                background: rgba(0,0,0,0.5) !important;
            }
            .carousel-indicators {
                position: absolute;
                right: 0;
                bottom: 0;
                margin-bottom: 0px;
                left: 0;
                z-index: 15;
                margin-left: 0px;
                margin-right: 0px;
                display: -ms-flexbox;
                display: flex;
                -ms-flex-pack: center;
                justify-content: center;
                padding-left: 0;
                list-style: none;
                background: rgba(0,0,0,0.5) !important;
                height: 40px;
            }


            .carousel-indicators li {
                margin-top: auto;
                margin-bottom: auto;
            }

            .lead{
                color: #000;
                font-weight: 600 !important;
            }










        </style>

        @php
            $sliders = \App\Slider::where('type','shop')->where('status','active')->get();

        @endphp

        @if(sizeof($sliders))

            <div class="container-fluid p-0">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        @foreach($sliders??array() as $key=>$slider)
                            <li data-target="#carouselExampleIndicators" data-slide-to="{{$key}}" class="{{$key==0?'active':''}}"></li>
                        @endforeach
                    </ol>
                    <div class="carousel-inner" role="listbox">

                        @foreach($sliders??array() as $key=>$slider)
                            <div class="carousel-item {{$key==0?'active':''}}" style="background-image: url({{url($slider->photo??'/')}})">
                                <div class="carousel-caption">
                                    <div class="row">

                                        <div class="col-md-6 offset-md-6">

                                            <div class="hero__content">
                                                <h1 class=" animated fadeInDown" style="color: {{site_color()}};font-weight: bold;">{{$slider->title}}</h1>
                                                <p class="lead ">{!! $slider->content !!}</p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        @endif
    </section>


   <div class="row nor-b">
      @foreach($offerdata as $fd)
      @if($fd->offer_type==2&&$fd->offer_id!=0)
      <?php $img_url=asset('upload/offer/image').'/'.$fd->offer->banner;?>
      <div class="col-md-4 col-12">
         <div class="normal1 text-off overlay_main" style="background-image:url('{{$img_url}}')">
            <div class="overlay">
            </div>
            <div class="ban-text">
            <h1 style="color: {{site_color()}} !important">{{$fd->offer->title}}</h1>
            @if($fd->offer->is_product=='2')
            <p>{{__('messages.home_note_3')}}{{$currency}}{{$fd->offer->new_price}}</p>
            @endif
            @if($fd->offer->is_product=='1')
            <p>{{__('messages.home_note_1')}} {{$fd->offer->fixed}}% {{__('messages.home_note_2')}}</p>
            @endif
            @if($fd->offer->is_product=='2')
            <a href="{{url('viewproduct').'/'.base64_encode($fd->offer->product_id)}}" style="background: {{site_color()}} !important">
           {{__('messages.shop_now')}}
            </a>
            @endif
            @if($fd->offer->is_product=='1')
            <a href="{{url('productslist').'/0/'.$fd->offer->category_id.'/0'.'/'.$fd->offer->fixed}}" style="background: {{site_color()}} !important">
            {{__('messages.shop_now')}}
            </a>
            @endif
         </div>
         </div>
      </div>
      @endif
      @endforeach
   </div>
</div>
<div class="container">
   <div class="product-heading">
      <h1>{{__('messages.feature_product')}}</h1>
   </div>
   <p id="featurecompare">
   <div class="product-slider">
      <div id="demo">
         <div class="row pos">
            <div class="customNavigation">
               <a class="btn prev" onclick="prevowl()"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
               <a class="btn next" onclick="nextowl()"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
            </div>
            <div id="owl-demo" class="owl-carousel">
               <?php $k=1;?>
               @foreach($featurepro as $fe)

               <div class="item col-md-12">
                  @if($fe->productdata->stock=='0')
                           <div class="out_of_sb">
                              <span>{{__('messages.outstock')}}</span>
                           </div>
                          @endif
                  <div class="home-bg">
                  <div class="img-background" >

                     <figure class="preview-image">
                        <a href="{{url('viewproduct/').'/'.base64_encode($fe->productdata->id)}}"> <img src="{{asset('upload/product').'/'.$fe->productdata->basic_image}}" class="img-responsive"></a>
                        <div class="preview-image-overlay">
                           <button type="button" onclick="quickview('{{base64_encode($fe->productdata->id)}}')">
                              {{__('messages.Quick View')}}
                           </button>
                        </div>
                     </figure>

                     <div class="img-text">
                        <label class="fancy-checkbox">
                             @if(Auth::id()!="")
                              <input type="checkbox" id="checkfe{{$k}}" name="checkdata" onclick="changewishlist('{{$fe->productdata->id}}','checkfe{{$k}}')" <?=$fe->wish==1? ' checked="checked"' : '';?>/>
                             @else
                              <input type="checkbox" id="checkfe{{$k}}" name="checkdata"  onclick="removewishselect('checkfe{{$k}}')" data-toggle="modal" data-target="#myModal"/>
                             @endif
                        <big id="wishfavor{{$fe->productdata->id}}"></big>
                        </label>
                        <i class="fa fa-spinner loadlconwish" aria-hidden="true" id="loading{{$fe->productdata->id}}"></i>
                        @if($fe->productdata->discount!=0)
                        <span>{{$fe->productdata->discount}}%</span>
                        @endif
                     </div>
                  </div>
                  <div class="text-s-box text-s-box-2">
                     <h1>{{$fe->productdata->name}}</h1>
                     <span class="rating">
                     <?php for($i=0;$i<$fe->productdata->avgStar;$i++){ ?>
                     <i class="fa fa-star" aria-hidden="true" style="color: {{site_color()}} !important"></i>
                     <?php }?>
                     <?php for($i=0;$i<(5-$fe->productdata->avgStar);$i++){ ?>
                     <i class="fa fa-star-o" aria-hidden="true" style="color: {{site_color()}} !important"></i>
                     <?php }?>
                     </span>
                     <span class="review">
                     ({{$fe->total_review}} {{__('messages.review')}})
                     </span>
                     <span class="compare_icon">
                        <a href="javascript:addcomapre('<?=$fe->product_id?>','featurecompare')"><img src="{{asset('Ecommerce/images/compare.png')}}"></a>
                     </span>
                     <div class="price">
                        <h2>{{Session::get("currency")}}{{$fe->productdata->selling_price}}</h2>
                        <span >{{Session::get("currency")}}{{$fe->productdata->MRP}}</span>
                        @if($fe->productdata->stock=='1')
                        <a href="{{url('viewproduct/').'/'.base64_encode($fe->product_id)}}" style="background: {{site_color()}} !important">{{__('messages.shop_now')}}</a>
                        @endif
                     </div>
                  </div>
               </div>
            </div>
               <?php $k++;?>
               @endforeach
            </div>
         </div>
      </div>
   </div>
</div>

<div class="container">
   <div class="sale-banner">
      <div class="row">
         @foreach($banner as $ba)
         @if($ba->id==1)
         <div class="col-md-6">
            <div class="sale-banner-1 overlay_main_2">
               <a href="{{url('productslist').'/0/'.$ba->subcategory.'/0/0'}}"> <img src="{{asset('upload/banner/image').'/'.$ba->Image}}" class="img-responsive"></a>
               <div class="overlay_2">
               </div>
               <div class="sale-b-text">
                  <h1>{{$ba->title}}</h1>
                  <p>{{$ba->subtitle}}</p>
                  <a href="{{url('productslist').'/0/'.$ba->subcategory.'/0/0'}}" style="background: {{site_color()}} !important">{{__('messages.shop_now')}}</a>
               </div>
            </div>
         </div>
         @endif
         @endforeach
         <div class="col-md-6">
            @foreach($banner as $ba)
            @if($ba->id!=1&&$ba->id!=3)
            <div class="sale-banner-2 col-md-12 p-0 overlay_main_2">
               <a href="{{url('productslist').'/0/'.$ba->subcategory.'/0/0'}}"> <img src="{{asset('upload/banner/image').'/'.$ba->Image}}" class="img-responsive"></a>
               <div class="overlay_2">
               </div>
               <div class="sale-b-text">
                  <h1>{{$ba->title}}</h1>
                  <p>{{$ba->subtitle}}</p>
                  <a href="{{url('productslist').'/0/'.$ba->subcategory.'/0/0'}}" style="background: {{site_color()}} !important">{{__('messages.shop_now')}}</a>
               </div>
            </div>
            @endif
            @if($ba->id!=1&&$ba->id!=2)
            <div class="sale-banner-3 col-md-12 p-0 overlay_main_2">
               <a href="{{url('productslist').'/0/'.$ba->subcategory.'/0/0'}}"> <img src="{{asset('upload/banner/image').'/'.$ba->Image}}" class="img-responsive"></a>
               <div class="overlay_2">
               </div>
               <div class="sale-b-text">
                  <h1>{{$ba->title}}</h1>
                  <p>{{$ba->subtitle}}</p>
                  <a href="{{url('productslist').'/0/'.$ba->subcategory.'/0/0'}}" style="background: {{site_color()}} !important">{{__('messages.shop_now')}}</a>
               </div>
            </div>
            @endif
            @endforeach
         </div>
      </div>
   </div>
</div>
<div class="container">
   <div class="product-heading">
      <h1>{{__('messages.best_selling')}}</h1>
   </div>
   <p id="bestcompare">
   <div class="product-slider">
      <div id="demo1">
         <div class="row pos">
            <div class="customNavigation">
               <a class="btn prev" onclick="prevdemo1()"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
               <a class="btn next" onclick="nextdemo1()"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
            </div>
            <div id="owl-demo1" class="owl-carousel">
               <?php $k=1;?>
               @foreach($bestselling as $bt)
                  @if($bt["stock"]=='0')
                           <div class="out_of_sb">
                              <span>{{__('messages.outstock')}}</span>
                           </div>
                          @endif
               <div class="item col-md-12">

                  <div class="home-bg">

                  <div class="img-background">

                     <figure class="preview-image">

                        <a href="{{url('viewproduct/').'/'.base64_encode($bt['id'])}}"> <img src="{{asset('upload/product').'/'.$bt['basic_image']}}" class="img-responsive"></a>

                        <div class="preview-image-overlay">
                           <button type="button" onclick="quickview('<?=base64_encode($bt["id"])?>')">
                               {{__('messages.Quick View')}}
                           </button>
                        </div>

                     </figure>


                     <div class="img-text">

                        <label class="fancy-checkbox">
                             @if(Auth::id()!="")
                            <input type="checkbox" id="checkdata{{$k}}" name="checkdata" onclick="changewishlist('<?php echo $bt['id'];?>','checkdata{{$k}}')" <?=$bt['wish']==1? ' checked="checked"' : '';?>/>
                           @else
                            <input type="checkbox" onclick="removewishselect('checkdata{{$k}}')" id="checkdata{{$k}}" name="checkdata"  data-toggle="modal" data-target="#myModal"/>
                           @endif

                         <big id="wishfavor{{$bt['id']}}"></big>
                        </label>
                          <i class="fa fa-spinner loadlconwish" aria-hidden="true" id="loading{{$bt['id']}}" ></i>

                        @if($bt['discount']!=0)
                        <span>{{$bt['discount']}}%</span>
                        @endif
                     </div>
                     <div class="text-s-box text-s-box-2">
                        <h1>{{$bt['name']}}</h1>
                        <span class="rating">
                        <?php for($i=0;$i<$bt['ratting'];$i++){ ?>
                        <i class="fa fa-star" aria-hidden="true" style="color: {{site_color()}} !important"></i>
                        <?php }?>
                        <?php for($i=0;$i<(5-$bt['ratting']);$i++){ ?>
                        <i class="fa fa-star-o" aria-hidden="true" style="color: {{site_color()}} !important"></i>
                        <?php }?>
                        </span>
                        <span class="review">
                        ({{$bt['total_review']}} {{__('messages.review')}})
                        </span>
                        <span class="compare_icon">
                           <a href="javascript:addcomapre('<?=$bt['id']?>','bestcompare')"><img src="{{asset('Ecommerce/images/compare.png')}}"></a>
                        </span>
                        <div class="price">
                           <h2>{{Session::get("currency")}}{{$bt['price']}}</h2>
                           <span >{{Session::get("currency")}}{{$bt['MRP']}}</span>
                             @if($bt["stock"]=='1')
                           <a href="{{url('viewproduct/').'/'.base64_encode($bt['id'])}}" style="background: {{site_color()}} !important">{{__('messages.shop_now')}}</a>
                           @endif
                        </div>
                     </div>
                  </div>
               </div>
            </div>
               <?php $k++;?>
               @endforeach
            </div>
         </div>
      </div>
   </div>
</div>
@if($sen_offer)
<?php $coll_img=asset('upload/offer/image').'/'.$sen_offer->banner;?>
<div class="summer-banner" style="background-image: url('{{$coll_img}}')">
   <div class="container sum-box">
      <div class="summer-text">
         <h1>{{__('messages.up_to')}} {{$sen_offer->fixed_to}}% {{__('messages.home_note_2')}}</h1>
         <p>{{$sen_offer->title}}</p>
         <a href="{{url('productslist').'/'.$sen_offer->category.'/0/0'.'/'.$sen_offer->fixed_to}}" style="background: {{site_color()}} !important">{{__('messages.shop_now')}}</a>
      </div>
   </div>
</div>
@endif
@if($sepical_cat)
<div class="container">
   <div class="one-product-slider">
      <div class="row">
         <div class="col-md-6">
            <div id="demo1" class="carousel slide slides" data-ride="carousel">
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <a href="{{url('productslist').'/'.$sepical_cat->category_id.'/0/0/0'}}"> <img src="{{asset('upload/category/image/').'/'.$sepical_cat->image}}" alt="Los Angeles" class="img-responsive"></a>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-6">
            <div class="one-product-text">
               <h1>{{$sepical_cat->title}}</h1>
               <p>{{$sepical_cat->description}}
               </p>
               <a href="{{url('productslist').'/'.$sepical_cat->category_id.'/0/0/0'}}" style="background: {{site_color()}} !important">{{__('messages.shop_now')}}</a>
            </div>
         </div>
      </div>
   </div>
</div>
@endif
<div class="container">
   <div class="services-main">
      <div class="row">
         <div class="col-md-3 col-6 services">
            <div class="ser-img" style="background: {{site_color()}} !important"></div>
            <h1>{{__('messages.free_delivery')}}</h1>
            <p>{{__('messages.home_note_4')}}</p>
         </div>
         <div class="col-md-3 col-6 services">
            <div class="ser-img-1" style="background: {{site_color()}} !important"></div>
            <h1>{{__('messages.home_note_5')}}</h1>
            <p>{{__('messages.Feedbacks')}}</p>
         </div>
         <div class="col-md-3 col-6 services">
            <div class="ser-img-2" style="background: {{site_color()}} !important"></div>
            <h1>{{__('messages.Payment')}}</h1>
            <p>{{__('messages.secured_sys')}}</p>
         </div>
         <div class="col-md-3 col-6 services">
            <div class="ser-img-3" style="background: {{site_color()}} !important"></div>
            <h1>{{__('messages.support')}}</h1>
            <p>{{__('messages.helpline')}} -{{$setting->helpline}}</p>
         </div>
      </div>
   </div>
</div>
@stop
