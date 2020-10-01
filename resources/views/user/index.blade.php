
@php

    $setting = \App\Model\Setting::first();
@endphp

<!DOCTYPE html>
<html>
   <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

      <title>@yield('title')</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha384-tsQFqpEReu7ZLhBV2VZlAu7zcOV+rXbYlF2cqB8txI/8aZajjp4Bqd+V6D5IgvKT" crossorigin="anonymous"></script>
       @if(Session::get("is_rtl")==0)
      <link rel="stylesheet" type="text/css" href="{{asset('Ecommerce/css/style.css').'?v=45'}}">
      @else
      <link rel="stylesheet" type="text/css" href="{{asset('Ecommerce/css/rtl.css').'?v=44'}}">
      @endif
      <link rel="stylesheet" type="text/css" href="{{asset('Ecommerce/css/bootstrap.min.css').'?v=17'}}">
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
      <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" type="text/css" href="{{asset('Ecommerce/css/responsive.css').'?v=28'}}">
      <link rel="stylesheet" type="text/css" href="{{asset('Ecommerce/css/responsivertl.css').'?v=56'}}">
      <link rel="stylesheet" type="text/css" href="{{asset('Ecommerce/css/animate.min.css')}}">
      <script type="text/javascript" src="{{asset('Ecommerce/js/bootstrap.min.js')}}"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
      <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
      <link rel="stylesheet" type="text/css" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/base/jquery-ui.css" />
      <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
      <script type="text/javascript" src="{{asset('Ecommerce/js/aos.js')}}"></script>
      <script type="text/javascript" src="{{ URL::to('js/zoomsl.js') }}"></script>
   </head>
   <style type="text/css">
      .product-heading h1:before{
      background-color:{{site_color()}} !important;
      }
      .product-heading h1:after{
      background-color:{{site_color()}} !important;
      }
      .one-product-slider h1:after{
      background-color:{{site_color()}} !important;
      }
      .col-md-3.services:after{
      background-color:{{site_color()}} !important;
      }
      .user-login-pop_up .nav-tabs .nav-link.active{
      background-color:{{site_color()}} !important;
      border-top:{{site_color()}} !important;
      }
      .fancy-checkbox input[type="checkbox"]:checked~big:before{
      color:{{site_color()}} !important;
      }
      .add a:hover{
      background-color:{{site_color()}} !important;
      }
      td.View a:hover{
      background-color:{{site_color()}} !important;
      }
      .Sort ul li .active-2{
      border-color:{{site_color()}} !important;
      color:{{site_color()}} !important;
      }
      .cartbar_pop_mcon .popover__wrapper{
          margin-top: -3px !important;
      }

      .cartbar_pop_mcon a{
          margin-left: 5px !important;
      }

      .cartbar_pop_mcon a i{
          font-size: 20px !important;
      }
      a.compare img {
          width: 17px !important;
      }

      .cart .e-nav-cricle {
          right: -6px;
          top: -10px;
      }
      .wish .e-nav-cricle {
          top: -12px;
          right: -15px;
      }
      .compare .e-nav-cricle {
          top: -14px;
          right: 11px;
      }
      @media screen and (max-width: 768px) {

          .compare .e-nav-cricle {
              top: -29px;
              right: -10px;
          }
      }


      @media screen and (max-width: 479px) {
         .customdiv {
            margin-bottom: -25px;
         }

         .top-logo {
            height: 50px;
            width: 96px;
            margin-top: -5px;
            background-color: red;
            -webkit-mask-repeat: no-repeat;    background-image: url('/logo.png');
            -webkit-mask-image: url('/logo.png');
            background-repeat: no-repeat;
            background-size: cover;
         }
      }

      .top-logo {
          height: 70px;
          width: 116px;
          background-color: red;
          -webkit-mask-repeat: no-repeat;    background-image: url('/logo.png');
          -webkit-mask-image: url('/logo.png');
          background-repeat: no-repeat;
          background-size: cover;
      }

      .cartbar_pop_mcon a i {

      }

      .brand__text {
           color: #000;
           font-size: 1.3em;
           line-height: 1.1em;
           font-weight: 700;
           letter-spacing: 0;
          text-transform: uppercase;
          margin-top: 20px;
       }
       @media (max-width: 1199px){
            .brand__text {
                font-size: 1.15em !important;
            }
       }



      /* Footer */
      footer {
          background-size:cover;
          position:relative;
          padding-top:45px;
      }
      footer::before {
          background: rgba(255, 255, 255, 0.33) none repeat scroll 0 0;
          content: "";
          height: 45px;
          left: 0;
          position: absolute;
          top: 0;
          width: 100%;
          z-index: 1;
      }
      footer::after {
          background: rgba(34, 37, 51, 0.9) none repeat scroll 0 0;
          content: "";
          height: 100%;
          left: 0;
          position: absolute;
          top: 0;
          width: 100%;
      }
      .footer_top,.footer_bottom{ position:relative; z-index:1; color:#fff;}
      .footer_item {
          margin-top: 75px;
      }
      .footer_item > h4 {
          color: #fff;
          font-size: 25px;
          margin-bottom: 34px;
          text-transform: inherit;
      }
      .footer_item .list-unstyled > li a{
          color: #fff;
      }
      /* Footer About */
      .footer_item .logo {
          margin-bottom: 15px;
          width: 200px;
      }
      .list-inline.footer_social_icon {
          margin: 32px 0 0;
      }
      .footer_social_icon .fa {
          background: #ffcb0f none repeat scroll 0 0;
          border-radius: 100%;
          color: #222;
          font-size: 20px;
          height: 45px;
          padding: 12px;
          text-align: center;
          width: 45px;
      }
      .footer_item .footer_social_icon .fa:hover,.footer_item .footer_social_icon .fa:focus {
          background: #d7a300 none repeat scroll 0 0;
      }
      /* Footer Explore */
      .footer_menu .fa {
          font-size: 10px;
          margin-right: 18px;
      }
      .list-unstyled.footer_menu > li {
          padding: 4px 0;
      }
      /* Footer Post */
      .list-unstyled.post,.list-unstyled.footer_contact {
          margin-top: -14px;
      }
      .post .date {
          border: 2px solid #fff;
          border-radius: 100%;
          display: block;
          float: left;
          font-size: 20px;
          height: 50px;
          line-height: 12px;
          margin-right: 15px;
          padding: 10px;
          text-align: center;
          width: 50px;
      }
      .footer_item li a:hover .date,.footer_item li a:focus .date{ border:2px solid #aaa; }
      .footer_item li a:hover,.footer_item li a:focus{
          color: #aaa;
      }
      .post .date small {
          font-size: 12px;
      }

      .list-unstyled.post > li,.list-unstyled.footer_contact > li {
          padding: 2px 0;
          overflow:hidden;
      }
      /* Footer Contact */
      .footer_contact .fa {
          margin-right: 25px;
          text-align: center;
          width: 15px;
          float: left;
          font-size:18px;
      }
      .list-unstyled.footer_contact p {
          overflow: hidden;
      }
      .footer_bottom {
          background: #1a1c27 none repeat scroll 0 0;
          padding: 28px 0 18px;
          margin-top:55px;
      }
      .footer_bottom a {
          color: #ffcb0f;
      }
      .footer_bottom a:hover,.footer_bottom a:focus {
          color: #d7a300;
      }


      /*Social btn*/
      .social-footer
      {
          padding: 10px;
          border: 1px solid #ddd;
          border-radius: 50%;
          color: #fff;
      }

      .pro-img img {
          width: 100%;
          height: 230px;
      }
      /*.top-logo {
          height: 53px;
          width: 72px;

      }*/

      @media (max-width: 768px){
          body .container {
              max-width: 100% !important;
              padding-right: 5px;
              padding-left: 5px;
          }
      }

      .profile-img {
            width: auto;
            height: auto;
        }

        .profile-img img {
            width: 100%;
        }


   </style>
   <body class="rtl">

 <div id="overlaychk">
                        <div class="cv-spinner">
                           <span class="spinner"></span>
                        </div>
                     </div>
      <div class="modal log Log out" id="myModal1">
         <div class="modal-dialog">
            <div class="modal-content logout">
               <button type="button" class="close" data-dismiss="modal">
               <span>×</span>
               </button>
               <div class="logout-text">
                  <p>{{__('messages.logout_msg')}}</p>
               </div>
               <div class="logout-btn">
                  <button type="button" class="btn btn-danger" data-dismiss="modal">{{__('messages.cancel')}}</button>
                  <button type="button" onclick="userlogout()" class="btn log" data-dismiss="modal" style="background-color:{{site_color()}} !important">{{__('messages.logout')}}</button>
               </div>
            </div>
         </div>
      </div>
      <div class="user-login-pop_up" >

          @include('modal.auth')

      </div>

      <input type="hidden" id="select_cate_name" value="<?=isset($_GET['ca'])?$_GET['ca']:'All'; ?>" />
      <input type="hidden" id="select_cate_id" value="<?=isset($_GET['ca'])?$_GET['ca']:'0'; ?>" />
      <input id="settings-btn" type="checkbox" class="settings-btn">

      <?php   if(strpos($_SERVER['REQUEST_URI'],"productslist")){
         $myclass="container my-container  shop-main-container";
         }else{
         $myclass="container  shop-main-container";
         }
         ?>
      <div class="{{$myclass}}">
         <div class="e-nav">
            <div class="row customdiv">

               <div class="col-lg-5 col-md-5 col-sm-5 col-8">

                  <a href="{{url('/')}}" class="d-flex">
                      <div class="top-logo mr-2" style="background-image: url('/logo.png');-webkit-mask-image: none;background-color: transparent;    background-size: contain;
    background-position: center;"></div>
                      <div class="brand__text d-none d-lg-block">Rental Exotics Beasts</div>
                     <!---->
                  </a>
               </div>
               <div class="col-lg-4 col-md-4 ser-show">
                  <form action="{{url('searchproduct')}}" method="post">
                     {{csrf_field()}}
                     <div class="search">
                        <div id="divNoImage">
                        </div>
                        <div class="sea-input">
                           <input type="text" required name="search_product" value="<?=isset($_GET['s'])?$_GET['s']:''; ?>" onfocus="changesearcat()" id="search_product" placeholder="Search product...">
                        </div>
                        <button class="search-btn" type="submit" style="background: {{site_color()}} !important">
                        <i class="fa fa-search" aria-hidden="true"></i>
                        </button>
                     </div>
                  </form>
               </div>
               <div class="cartbar_pop_mbox">
                  <div class="cartbar_pop_mcon">
                     @if(Auth::check())
                     <a href="{{url('myaccount')}}" class="user" >
                        <i class="fa fa-user fa-lg" aria-hidden="true"></i>
                     </a>
                     @else
                     <a href="/login" class="user" >
                        <i class="fa fa-user fa-lg" aria-hidden="true"></i>
                     </a>
                     @endif

                     <div class="popover__wrapper">
                        <a href="#" class="cart hover-popup" data-modal-target="modal1" id="cart-1">
                           <i class="fa fa-shopping-cart popover__title fa-lg" aria-hidden="true"></i>
                           <?php $cartCollection = Cart::getContent();?>
                           <div class="e-nav-cricle" style="background: {{site_color()}} !important">
                              <h1 id="totalcart">{{$cartCollection->count()}}</h1>
                           </div>
                        </a>
                        <div class="popover__content">
                           <div class="user-cart-pop_up">
                              <div class="modal-content">
                                 <div class="cart-pop_up-box" id="cartview">
                                    <?php $cartCollection = Cart::getContent();$i=0;?>
                                    @if($cartCollection->count()!=0)
                                    <div class="cart-pop_up-sbox">
                                       @foreach($cartCollection as $item)
                                       <div class="cart-pop_up-content">
                                          <div class="cart-pop_up-imgbox">
                                             @foreach($productdata as $hs)
                                             @if($hs->id==$item->id)
                                             <img src="{{asset('upload/product').'/'.$hs->basic_image}}" width="75" height="auto">
                                             @endif
                                             @endforeach
                                          </div>
                                          <div class="cart-pop_up-detail-box">
                                             <div class="pop_up-detail-head">
                                                <h2>{{$item->name}}</h2>
                                                <div class="cart-pop_up-cross">
                                                   <i class="fa fa-times fa-lg" aria-hidden="true"></i>
                                                   <span>{{$item->quantity}}</span>
                                                </div>
                                                <a href="javascript:deletecartitem('{{$item->id}}')"><i class="fa fa-trash-o pop_up-delete" aria-hidden="true" style="color: {{site_color()}} !important"></i></a>
                                             </div>
                                             <p>
                                                <?php $option=explode(",",$item->attributes[0]['option']);
                                                   $label=explode(",",$item->attributes[0]['label']);
                                                   $price=explode(",",$item->attributes[0]['price']);
                                                   ?>

                                                   <?php for($i=0;$i<count($option);$i++){?>
                                                   <span style="font-size:small"><b>{{$option[$i]}}</b><span>  {{$label[$i]}}</span></span></br>
                                                   <?php }?>

                                             </p>
                                             <h2>{{Session::get('currency').number_format((float)$item->price, 2, '.', '')}}</h2>
                                          </div>
                                       </div>
                                       @endforeach
                                       <div class="cart-pop_up-subtotal">
                                          <h3>{{__('messages.subtotal')}} :</h3>

                                          <h3 class="cart-pop_up-prize">{{Session::get('currency').number_format(Cart::getTotal(), 2, '.', '')}}</h3>
                                       </div>
                                       <a href="{{url('cartdetail')}}">
                                          <div class="pop_up-viewcart-b">
                                             {{__('messages.view_cart')}}
                                          </div>
                                       </a>
                                       <a href="#">
                                          <div class="">
                                             <form action="{{url('checkout')}}" method="post">
                                                {{csrf_field()}}
                                                <input type="hidden" name="check_delivery" id="check_delivery" value="{{Session::get('home_delivery')}}" />
                                                <input type="hidden" name="check_discount_type" id="check_discount_type" value="1" />
                                                <input type="hidden" name="check_discount_value" id="check_discount_value"   value="15"/>
                                                <input type="hidden" name="check_free_shipping" id="check_free_shipping" value="0" />
                                                <input type="hidden" name="check_coupon_value" id="check_coupon_value" />
                                                <input type="hidden" name="check_couponcode" id="check_couponcode" />
                                                <button value="submit" class="pop_up-checkout-b" type="submit" onclick="Checkout()" style="background-color: {{site_color()}} !important">
                                                {{__('messages.proceed_to_checkout')}}
                                                </button>
                                             </form>
                                          </div>
                                       </a>
                                    </div>
                                    @endif
                                    @if($cartCollection->count()==0)
                                     <div class="cart-pop_up-content">
                                       <div class="cart-pop_up-content empty">
                                          <div class="cart-pop_up-imgbox">
                                             <img src="{{asset('Ecommerce/images/empty.png')}}">
                                             <h1>{{__('messages.cart_empty')}}</h1>
                                          </div>
                                       </div>
                                    </div>
                                     @endif
                                 </div>
                              </div>
                           </div>
                       </div>
                     </div>
                     <a href="{{url('mywishlist')}}" class="wish">
                        <i class="fa fa-heart fa-lg" aria-hidden="true"></i>
                        <div class="e-nav-cricle" style="background: {{site_color()}} !important">
                           <h1 id="totalwish">{{count($mywish)}}</h1>
                        </div>
                     </a>
                     <a class="compare" href="{{url('compare')}}">
                        <img style="" src="{{asset('Ecommerce/images/compareheader.png')}}">
                         <div class="e-nav-cricle comparesp" style="background: {{site_color()}} !important">
                           <?php $arr=explode(",",Session::get("compare"));?>
                           <h1 id="totalcompare">{{count(array_filter($arr))}}</h1>
                        </div>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="{{$myclass}}">
         <div class="main-menu">
            <div class="row">
               <ul>

                   <li><a href="{{url('/shop')}}">{{__('Home')}}</a>
                  @foreach($header_menu as $category)
                  <li>
                     <a href="{{url('productslist/').'/'.$category->id.'/0/0/0'}}">
                     {{$category->name}}
                     <i class="fa fa-angle-down" aria-hidden="true"></i>
                     </a>
                     <div class="main-sub">
                        <div class="sub">
                           @foreach($category->subcategory as $subcat)
                           <ul class="sub-menu">
                              <h4><a href="{{url('productslist/').'/0/'.$subcat->id.'/0/0'}}">{{$subcat->name}}</a></h4>
                              @foreach($subcat->brand as $brand)
                              <li><a href="{{url('productslist/').'/'.$category->id.'/'.$subcat->id.'/'.$brand->id.'/0'}}">{{$brand->brand_name}}</i></a></li>
                              @endforeach
                           </ul>
                           @endforeach
                        </div>
                     </div>
                  </li>
                  @endforeach
                  <li><a href="{{url('Offers')}}">{{__('messages.offers')}}</a>
               </ul>
               <div class="col-lg-7 col-md-12 ser-hide">
                  <form action="{{url('searchproduct')}}" method="post">
                     {{csrf_field()}}
                     <div class="search">
                        <div id="divNoImage1">
                        </div>
                        <input type="text" name="search_product" value="<?=isset($_GET['s'])?$_GET['s']:''; ?>" onfocus="changesearcat()"required  id="search_product_mobile" placeholder="Search product...">
                        <button class="search-btn" type="submit" style="background-color:{{site_color()}} !important;">
                        <i class="fa fa-search" aria-hidden="true"></i>
                        </button>
                     </div>
                  </form>
               </div>
               <div class="col-md-12 toggle">
                  <nav class="navbar navbar-dark">
                     <a class="navbar-brand" href="#">{{__('messages.all_category')}}</a>
                     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="toggle-but">
                           <h1 class="but-lines"></h1>
                           <h1 class="but-lines"></h1>
                           <h1 class="but-lines"></h1>
                        </span>
                     </button>
                     <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                           @foreach($header_menu as $category)
                           <li class="nav-item dropdown" style="text-align: left;">
                              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">
                              {{$category->name}}
                              </a>
                              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                 <div class="{{$myclass}}">
                                    <div class="row">
                                       <div class="col-md-4">
                                          <ul>
                                             @foreach($category->subcategory as $subcat)
                                             <li><a href="{{url('productslist/').'/0/'.$subcat->id.'/0/0'}}">{{$subcat->name}}</i></a></li>
                                             @endforeach
                                          </ul>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           @endforeach
                           <li style="text-align: left;"><a href="{{url('Offers')}}">{{__('messages.offers')}}</a>
                           </li>
                        </ul>
                     </div>
                  </nav>
               </div>
            </div>
         </div>
      </div>
      @yield('content')
         <footer>
             <!-- Footer top -->
             <div class="container footer_top">
                 <div class="row"><div class="col-md-4">
                         <div class="footer_item">
                             <h4>Explore link</h4>
                             <hr>
                             <ul class="list-unstyled footer_menu">
                                 <li><a href="/"><span class="fa fa-play"></span> Home</a>
                                 <li><a href="/vehicles"><span class="fa fa-play"></span> Our Fleet</a>
                                 </li><li><a href="/shop"><span class="fa fa-play"></span> Shop</a>
                                 </li><li><a href="/contactus"><span class="fa fa-play"></span> Contact Us</a>
                                 </li><li><a href="/faqs"><span class="fa fa-play"></span> FAQ's</a>
                                 </li><li><a href="/privacy"><span class="fa fa-play"></span> Privacy</a>
                                 </li></ul>
                         </div>
                     </div>

                     <div class="col-md-4">
                         <div class="footer_item">
                             <h4>Social</h4>
                             <hr>
                             <ul class="list-unstyled footer_menu">
                                <li><a href="{{$setting->insta_link}}"><span class="fa fa-play"></span>Instagram</a>
                                    <li><a href="{{$setting->fb_link}}"><span class="fa fa-play"></span>Facebook</a>
                                    <li><a href="{{$setting->tweeet_link}}"><span class="fa fa-play"></span>Twitter</a>
                                    <li><a href="{{$setting->pinter_link}}"><span class="fa fa-play"></span>Pinterest</a>
                                    <!--<li><a href="{{$setting->insta_link}}"><span class="fa fa-play"></span>Trip Advisor</a></li>

                                    </li><li><a href="{{$setting->tweeet_link}}"><span class="fa fa-play"></span>Google Plus</a>
                                    </li><li><a href="{{$setting->pinter_link}}"><span class="fa fa-play"></span>Yelp</a>-->
                                    </li><li><a href="{{$setting->utube_link}}"><span class="fa fa-play"></span>Youtube</a>
                                    </li>
                             </ul>
                         </div>
                     </div>

                     <div class="col-md-4">
                         <div class="footer_item">
                             <h4>Local</h4>
                             <hr>
                             <ul class="list-unstyled footer_contact">
                                 <li><a href=""><span class="fa fa-map-marker"></span>{{$setting->address?? ''}}</a></li>
                                 <li><a href="mailto:{{$setting->email?? ''}}"><span class="fa fa-envelope"></span>{{$setting->email?? ''}}</a></li>
                                 <li><a><span class="fa fa-mobile"></span><p>{{$setting->phone?? ''}}</p></a></li>


                             </ul>
                         </div>
                     </div>
                 </div>
             </div><!-- Footer top end -->

             <!-- Footer bottom -->
             <div class="footer_bottom text-center">
                 <p class="wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">Designed and Developed by {{$setting->company_name?? ''}} Team . Copyright © <a href="{{url('/')}}">{{$setting->company_name?? ''}} </a>{{date('Y')}}. All Rights Reserved
                 </p>
             </div><!-- Footer bottom end -->
         </footer>
      @yield('footer')



      <input type="hidden" id="path" value="{{url('/')}}">
      <input type="hidden" id="cartsuccesslang" value="{{__('messages_error_success.product_add_success')}}"/>
      <input type="hidden" id="login_user_id" value="{{Auth::id()}}">
      <input type="hidden" id="currency" value='{{Session::get("currency")}}'>
      <input type="hidden" id="coupon_ds" value='{{__("messages.coupon")}}'>
      <input type="hidden" id="not_found_lang" value="{{__('messages.No Result Found')}}">
      <input type="hidden" id="All_lang" value="{{__('messages.All')}}">
      <input type="hidden" id="required_field_lang" value="{{__('messages_error_success.required_field')}}">
      <input type="hidden" id="login_account_lang" value="{{__('messages.Please Login to Your Account')}}">
      <input type="hidden" id="ent_current_pwd_lang" value="{{__('messages.ent_current_pwd')}}">
      <input type="hidden" id="invaild_coupon_lang" value="{{__('messages.Invaild Coupon')}}">
      <input type="hidden" id="coupon_req_lang" value="{{__('messages.Please Enter Coupon Code')}}">
      <input type="hidden" id="np_product_lang" value="{{__('messages.No Product')}}">
      <input type="hidden" id="is_required_lang" value="{{__('messages.is Required')}}">
      <input type="hidden" id="email_success_lang" value="{{__('messages.Email Send Successfully')}}">
      <input type="hidden" id="email_not_lang" value="{{__('messages.Your Entered Email Not Exist')}}">
      <input type="hidden" id="email_req_lang" value="{{__('messages.Entered Your Email')}}">
      <input type="hidden" id="site_color_store" value="{{site_color()}}">
      <script type="text/javascript" src="{{ asset('js/select.js') }}"></script>
      <input type="hidden" id="quick_view_lang" value="{{__('messages.Quick View')}}">
      <input type="hidden" id="user_register" value="{{__('messages.user_register')}}"/>
      <input type="hidden" id="compare_add_lang" value="{{__('messages.The product has been added to your compare list')}}">
      <script type="text/javascript" src="{{ URL::to('/js/code.js').'?v=20000' }}"></script>
   </body>

</html>
