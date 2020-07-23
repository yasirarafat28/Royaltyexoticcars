<!DOCTYPE html>
<html lang="en">


<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Gregfins Admin Dashboard</title>
    <meta content="" name="description" />
    <meta content="" name="author" />

    <!-- Favicon --><link href="/front/images/favicon.png" rel="shortcut icon" type="image/x-icon">
    <!-- For iPhone -->
    <link rel="apple-touch-icon-precomposed" href="/admin/images/apple-touch-icon-57-precomposed.png">
    <!-- For iPhone 4 Retina display -->
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/admin/images/apple-touch-icon-114-precomposed.png">
    <!-- For iPad -->
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/admin/images/apple-touch-icon-72-precomposed.png">
    <!-- For iPad Retina display -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/admin/images/apple-touch-icon-144-precomposed.png">

    <!-- CORE CSS FRAMEWORK - START -->
    <link href="/admin/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="/admin/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="/admin/plugins/bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css" />
    <link href="/admin/fonts/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css" />
    <link href="/admin/fonts/webfont/cryptocoins.css" rel="stylesheet" type="text/css" />
    <link href="/admin/css/animate.min.css" rel="stylesheet" type="text/css" />
    <link href="/admin/plugins/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" type="text/css" />
    <!-- CORE CSS FRAMEWORK - END -->

    <!-- HEADER SCRIPTS INCLUDED ON THIS PAGE - START -->

    <link href="/admin/plugins/jvectormap/jquery-jvectormap-2.0.1.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="/admin/plugins/morris-chart/css/morris.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="/admin/plugins/calendar/fullcalendar.css" rel="stylesheet" type="text/css" media="screen"/>
    <link href="/admin/plugins/icheck/skins/minimal/minimal.css" rel="stylesheet" type="text/css" media="screen"/>
    <link href="/admin/plugins/swiper/swiper.css" rel="stylesheet" type="text/css">

    <!-- HEADER SCRIPTS INCLUDED ON THIS PAGE - END -->

    <!-- CORE CSS TEMPLATE - START -->
    <link href="/admin/css/style.css" rel="stylesheet" type="text/css" />
    <link href="/admin/css/responsive.css" rel="stylesheet" type="text/css" />
    <!-- CORE CSS TEMPLATE - END -->



    <style>
        .page-topbar.gradient-blue1{
            background: #272c33!important;
        }










        @media(max-width: 767px){
            .page-topbar.sidebar_shift .logo-area {
                background-position: 5px center;
            }
            .page-topbar.sidebar_shift .logo-area{
                background-color: #272c33;
            }
        }

        @media(max-width: 425px){
            .page-topbar.sidebar_shift .logo-area {
                background-position: 5px center;
            }
            .page-topbar.sidebar_shift .logo-area{
                background-color: #272c33;
            }
        }
    </style>
    @yield('style')

</head>
<!-- END HEAD -->

<!-- BEGIN BODY -->

<body class=" ">
<!-- START TOPBAR -->
<div class='page-topbar gradient-blue1'>
    <div class='logo-area crypto'>

    </div>
    <div class='quick-area'>
        <div class='pull-left'>
            <ul class="info-menu left-links list-inline list-unstyled">
                <li class="sidebar-toggle-wrap">
                    <a href="#" data-toggle="sidebar" class="sidebar_toggle">
                        <i class="fa fa-bars"></i>
                    </a>
                </li>

            </ul>
        </div>
        <div class='pull-right'>
            <ul class="info-menu right-links list-inline list-unstyled">
                <li class="profile">
                    <a href="#" data-toggle="dropdown" class="toggle">
                        <img src="{{asset(\Illuminate\Support\Facades\Auth::user()->photo??'')}}" alt="user-image" class="img-circle img-inline" onerror="this.src='/admin/crypto-dash/profile.png';">
                        <span>{{\Illuminate\Support\Facades\Auth::user()->first_name}} {{\Illuminate\Support\Facades\Auth::user()->last_name}} <i class="fa fa-angle-down"></i></span>
                    </a>
                    <ul class="dropdown-menu profile animated fadeIn">
                        <li>
                            <a href="{{url('setting')}}">
                                <i class="fa fa-user"></i> Profile
                            </a>
                        </li>
                        <li class="last">
                            <a  href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                <i class="fa fa-lock"></i> Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>

</div>
<!-- END TOPBAR -->
<!-- START CONTAINER -->
<div class="page-container row-fluid container-fluid">

    <!-- SIDEBAR - START -->

    <div class="page-sidebar fixedscroll">

        <!-- MAIN MENU - START -->
        <div class="page-sidebar-wrapper crypto" id="main-menu-wrapper">

            <ul class='wraplist'>
                <li class='menusection'>Main</li>
                <li class="">
                    <a href="{{route('adminDashboard')}}">
                        <i class="img relative crypto-ic ">
                            <img src="/admin/admin-icons/dashboard.png" alt="" class="ic1 width-20">
                        </i>
                        <span class="title">Dashboard</span>
                    </a>
                </li>

                <!--<li class="">
                    <a href="javascript:;">
                        <i class="img">
                            <img src="/admin/crypto-dash/icons/7.png" alt="" class="width-20">
                        </i>
                        <span class="title">Mailbox</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub-menu" style="display: none;">
                        <li>
                            <a class="" href="{{url('admin/mail/inbox')}}">Inbox</a>
                        </li>
                        <li>
                            <a class="" href="{{url('admin/mail/compose')}}">Compose</a>
                        </li>
                    </ul>
                </li>-->
                <li class="">
                    <a href="javascript:;">
                        <i class="img">
                            <img src="/admin/admin-icons/product.png" alt="" class="width-20">
                        </i>
                        <span class="title">Product Management</span>
                        <span class="arrow "></span>
                    </a>
                    <ul class="sub-menu">
                        <!--<li>
                            <a class="" href="{{url('admin/categories')}}">Categories</a>
                        </li>-->
                        <li>
                            <a class="" href="{{url('admin/products')}}">Products</a>
                        </li>
                    </ul>
                </li>

                <li class="">
                    <a href="{{url('admin/coupons')}}">
                        <i class="img">
                            <img src="/admin/admin-icons/coupon.png" alt="" class="width-20">
                        </i>
                        <span class="title">Coupons</span>
                    </a>
                </li>

                <li class="">
                    <a href="{{url('admin/orders')}}">
                        <i class="img">
                            <img src="/admin/admin-icons/order.png" alt="" class="width-20">
                        </i>
                        <span class="title">Orders</span>
                    </a>
                </li>

                <li class="">
                    <a href="{{url('admin/donations')}}">
                        <i class="img">
                            <img src="/admin/admin-icons/donation.png" alt="" class="width-20">
                        </i>
                        <span class="title">Donations</span>
                    </a>
                </li>
                <li class="">
                    <a href="javascript:;">
                        <i class="img">
                            <img src="/admin/admin-icons/settings.png" alt="" class="width-20">
                        </i>
                        <span class="title">Settings</span>
                        <span class="arrow "></span>
                    </a>
                    <ul class="sub-menu">
                        <li>
                            <a class="" href="/setting">Account Settings</a>
                        </li>
                        <li>
                            <a class="" href="/admin/shipping">Shipping</a>
                        </li>
                        <li>
                            <a class="" href="/admin/taxes">Taxes</a>
                        </li>
                        <li>
                            <a class="" href="/admin/countries">Country</a>
                        </li>
                        <li>
                            <a class="" href="/admin/progress-block">Progress Block</a>
                        </li>
                    </ul>
                </li>

                <!--<li class="">
                    <a href="javascript:;">
                        <i class="img">
                            <img src="/admin/crypto-dash/icons/17.png" alt="" class="width-20">
                        </i>
                        <span class="title">Reports</span>
                        <span class="arrow "></span>
                    </a>
                    <ul class="sub-menu">
                        <li>
                            <a class="" href="{{url('admin/website-reports')}}">Website Report</a>
                        </li>
                        <li>
                            <a class="" href="{{url('admin/sales-reports')}}">Sale Report</a>
                        </li>
                    </ul>
                </li>-->

                <li class="">
                    <a href="{{url('admin/website-reports')}}">
                        <i class="img">
                            <img src="/admin/admin-icons/website-report.png" alt="" class="width-20">
                        </i>
                        <span class="title">Website Report</span>
                    </a>
                </li>
                <li class="">
                    <a href="javascript:;">
                        <i class="img">
                            <img src="/admin/admin-icons/users.png" alt="" class="width-20">
                        </i>
                        <span class="title">Users Management</span>
                        <span class="arrow "></span>
                    </a>
                    <ul class="sub-menu">
                        <li>
                            <a class="" href="{{url('admin/notices')}}">Notice</a>
                        </li>
                        <li>
                            <a class="" href="{{url('admin/newsletters')}}">Newsletter</a>
                        </li>
                        <li>
                            <a class="" href="{{url('admin/beta-signups')}}">Beta Signup</a>
                        </li>
                        <li>
                            <a class="" href="{{url('admin/subscriptions')}}">Subscriptions</a>
                        </li>
                        <li>
                            <a class="" href="{{url('admin/customers')}}">Registration Details</a>
                        </li>
                        <li>
                            <a class="" href="{{url('admin/login-history')}}">Login History</a>
                        </li>
                        <li>
                            <a class="" href="{{url('admin/login-error-history')}}">Login Errors</a>
                        </li>
                        <li>
                            <a class="" href="{{url('admin/users')}}">Teams</a>
                        </li>
                    </ul>
                </li>
                <li class="">
                    <a href="javascript:;">
                        <i class="img">
                            <img src="/admin/admin-icons/news.png" alt="" class="width-20">
                        </i>
                        <span class="title">News/Blog Management</span>
                        <span class="arrow "></span>
                    </a>
                    <ul class="sub-menu">
                        <li>
                            <a class="" href="{{url('admin/news-categories')}}">Categories</a>
                        </li>
                        <li>
                            <a class="" href="{{url('admin/news')}}">Post list</a>
                        </li>
                    </ul>
                </li>

                <li class="">
                    <a href="javascript:;">
                        <i class="img">
                            <img src="/admin/admin-icons/content-management.png" alt="" class="width-20">
                        </i>
                        <span class="title">Content Management</span> <span class="arrow"></span> </a>
                    <ul class="sub-menu" style="display: none;">


                        <li class="">
                            <a href="javascript:;"><span class="title">Why Us</span> <span class="arrow"></span> </a>
                            <ul class="sub-menu" style="display: none;">
                                <li>
                                    <a class="" href="/admin/information/categories">Categories</a>
                                </li>
                                <li>
                                    <a class="" href="/admin/information/posts">Posts</a>
                                </li>
                            </ul>
                        </li>

                        <li class="">
                            <a href="javascript:;"><span class="title">Future Vision</span> <span class="arrow"></span> </a>
                            <ul class="sub-menu" style="display: none;">
                                <li>
                                    <a class="" href="/admin/visions/categories">Categories</a>
                                </li>
                                <li>
                                    <a class="" href="/admin/vision/posts">Posts</a>
                                </li>
                            </ul>
                        </li>

                        <li class="">
                            <a href="javascript:;"><span class="title">Referral &amp; Bounty </span> <span class="arrow"></span> </a>
                            <ul class="sub-menu" style="display: none;">
                                <li>
                                    <a class="" href="/admin/referrals/categories">Categories</a>
                                </li>
                                <li>
                                    <a class="" href="/admin/referral/posts">Posts</a>
                                </li>
                            </ul>
                        </li>

                        <li class="">
                            <a href="javascript:;"><span class="title">Partner with us </span> <span class="arrow"></span> </a>
                            <ul class="sub-menu" style="display: none;">
                                <li>
                                    <a class="" href="/admin/partners/categories">Categories</a>
                                </li>
                                <li>
                                    <a class="" href="/admin/partner/posts">Posts</a>
                                </li>
                            </ul>
                        </li>

                        <li class="">
                            <a href="javascript:;"><span class="title">FAQ </span> <span class="arrow"></span> </a>
                            <ul class="sub-menu" style="display: none;">
                                <li>
                                    <a class="" href="/admin/pending-faq">Pending Questions</a>
                                </li>
                                <li>
                                    <a class="" href="/admin/faq">Faq List</a>
                                </li>
                            </ul>
                        </li>

                    </ul>
                </li>
                <li class="">
                    <a href="javascript:;">
                        <i class="img">
                            <img src="/admin/admin-icons/career.png" alt="" class="width-20">
                        </i>
                        <span class="title">Jobs & Careers</span>
                        <span class="arrow "></span>
                    </a>
                    <ul class="sub-menu">
                        <li>
                            <a class="" href="{{url('admin/jobs')}}">Job Lists</a>
                        </li>
                        <li>
                            <a class="" href="{{url('admin/job-applications')}}">Applications</a>
                        </li>
                    </ul>
                </li>


                <li class="">
                    <a href="{{url('admin/feedback')}}">
                        <i class="img">
                            <img src="/admin/admin-icons/feedback.png" alt="" class="width-20">
                        </i>
                        <span class="title">Feedback</span>
                    </a>
                </li>


                <li class="">
                    <a href="{{url('admin/support')}}">
                        <i class="img">
                            <img src="/admin/admin-icons/support.png" alt="" class="width-20">
                        </i>
                        <span class="title">Support</span>
                    </a>
                </li>
                <hr>

                <!--<li class="">
                    <a href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        <i class="img fa fa-lock">
                            <img src="/admin/crypto-dash/icons/12.png" alt="" class="width-20">
                        </i>
                        <span class="title">Logout</span>
                    </a>
                </li>-->


            </ul>

        </div>
        <!-- MAIN MENU - END -->

    </div>
    <!--  SIDEBAR - END -->

    <!-- START CONTENT -->

    @yield('content')
    <!-- END CONTENT -->
    <div class="page-chatapi hideit">

        <div class="search-bar">
            <input type="text" placeholder="Search" class="form-control">
        </div>

        <div class="chat-wrapper">

            <h4 class="group-head">Favourites</h4>
            <ul class="contact-list">

                <li class="user-row " id='chat_user_1' data-user-id='1'>
                    <div class="user-img">
                        <a href="#"><img src="/admin/profile/avatar-1.png" alt=""></a>
                    </div>
                    <div class="user-info">
                        <h4><a href="#">Joge Lucky</a></h4>
                        <span class="status available" data-status="available"> Available</span>
                    </div>
                    <div class="user-status available">
                        <i class="fa fa-circle"></i>
                    </div>
                </li>
                <li class="user-row " id='chat_user_2' data-user-id='2'>
                    <div class="user-img">
                        <a href="#"><img src="/admin/profile/avatar-2.png" alt=""></a>
                    </div>
                    <div class="user-info">
                        <h4><a href="#">Folisise Chosiel</a></h4>
                        <span class="status away" data-status="away"> Away</span>
                    </div>
                    <div class="user-status away">
                        <i class="fa fa-circle"></i>
                    </div>
                </li>
                <li class="user-row " id='chat_user_3' data-user-id='3'>
                    <div class="user-img">
                        <a href="#"><img src="/admin/profile/avatar-3.png" alt=""></a>
                    </div>
                    <div class="user-info">
                        <h4><a href="#">Aron Gonzalez</a></h4>
                        <span class="status busy" data-status="busy"> Busy</span>
                    </div>
                    <div class="user-status busy">
                        <i class="fa fa-circle"></i>
                    </div>
                </li>

            </ul>

            <h4 class="group-head">More Contacts</h4>
            <ul class="contact-list">

                <li class="user-row " id='chat_user_4' data-user-id='4'>
                    <div class="user-img">
                        <a href="#"><img src="/admin/profile/avatar-4.png" alt=""></a>
                    </div>
                    <div class="user-info">
                        <h4><a href="#">Chris Fox</a></h4>
                        <span class="status offline" data-status="offline"> Offline</span>
                    </div>
                    <div class="user-status offline">
                        <i class="fa fa-circle"></i>
                    </div>
                </li>
                <li class="user-row " id='chat_user_5' data-user-id='5'>
                    <div class="user-img">
                        <a href="#"><img src="/admin/profile/avatar-5.png" alt=""></a>
                    </div>
                    <div class="user-info">
                        <h4><a href="#">Mogen Polish</a></h4>
                        <span class="status offline" data-status="offline"> Offline</span>
                    </div>
                    <div class="user-status offline">
                        <i class="fa fa-circle"></i>
                    </div>
                </li>
                <li class="user-row " id='chat_user_6' data-user-id='6'>
                    <div class="user-img">
                        <a href="#"><img src="/admin/profile/avatar-1.png" alt=""></a>
                    </div>
                    <div class="user-info">
                        <h4><a href="#">Smith Carter</a></h4>
                        <span class="status available" data-status="available"> Available</span>
                    </div>
                    <div class="user-status available">
                        <i class="fa fa-circle"></i>
                    </div>
                </li>
                <li class="user-row " id='chat_user_7' data-user-id='7'>
                    <div class="user-img">
                        <a href="#"><img src="/admin/profile/avatar-2.png" alt=""></a>
                    </div>
                    <div class="user-info">
                        <h4><a href="#">Amilia Gozenal</a></h4>
                        <span class="status busy" data-status="busy"> Busy</span>
                    </div>
                    <div class="user-status busy">
                        <i class="fa fa-circle"></i>
                    </div>
                </li>
                <li class="user-row " id='chat_user_8' data-user-id='8'>
                    <div class="user-img">
                        <a href="#"><img src="/admin/profile/avatar-3.png" alt=""></a>
                    </div>
                    <div class="user-info">
                        <h4><a href="#">Tahir Jemyship</a></h4>
                        <span class="status away" data-status="away"> Away</span>
                    </div>
                    <div class="user-status away">
                        <i class="fa fa-circle"></i>
                    </div>
                </li>
                <li class="user-row " id='chat_user_9' data-user-id='9'>
                    <div class="user-img">
                        <a href="#"><img src="/admin/profile/avatar-4.png" alt=""></a>
                    </div>
                    <div class="user-info">
                        <h4><a href="#">Johanson Wright</a></h4>
                        <span class="status busy" data-status="busy"> Busy</span>
                    </div>
                    <div class="user-status busy">
                        <i class="fa fa-circle"></i>
                    </div>
                </li>
                <li class="user-row " id='chat_user_10' data-user-id='10'>
                    <div class="user-img">
                        <a href="#"><img src="/admin/profile/avatar-5.png" alt=""></a>
                    </div>
                    <div class="user-info">
                        <h4><a href="#">Loni Tindall</a></h4>
                        <span class="status away" data-status="away"> Away</span>
                    </div>
                    <div class="user-status away">
                        <i class="fa fa-circle"></i>
                    </div>
                </li>
                <li class="user-row " id='chat_user_11' data-user-id='11'>
                    <div class="user-img">
                        <a href="#"><img src="/admin/profile/avatar-1.png" alt=""></a>
                    </div>
                    <div class="user-info">
                        <h4><a href="#">Natcho Herlaey</a></h4>
                        <span class="status idle" data-status="idle"> Idle</span>
                    </div>
                    <div class="user-status idle">
                        <i class="fa fa-circle"></i>
                    </div>
                </li>
                <li class="user-row " id='chat_user_12' data-user-id='12'>
                    <div class="user-img">
                        <a href="#"><img src="/admin/profile/avatar-2.png" alt=""></a>
                    </div>
                    <div class="user-info">
                        <h4><a href="#">Shakira Swedan</a></h4>
                        <span class="status idle" data-status="idle"> Idle</span>
                    </div>
                    <div class="user-status idle">
                        <i class="fa fa-circle"></i>
                    </div>
                </li>

            </ul>
        </div>

    </div>

    <div class="chatapi-windows ">

    </div>
</div>
<!-- END CONTAINER -->
<!-- LOAD FILES AT PAGE END FOR FASTER LOADING -->

<!-- CORE JS FRAMEWORK - START -->
<script src="/admin/plugins/swiper/jquery.min.js"></script>
<script src="/admin/js/jquery.easing.min.js"></script>
<script src="/admin/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="/admin/plugins/pace/pace.min.js"></script>
<script src="/admin/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="/admin/plugins/viewport/viewportchecker.js"></script>
<script>
    window.jQuery || document.write('<script src="/admin/js/jquery-1.11.2.min.js"><\/script>');
</script>
<!-- CORE JS FRAMEWORK - END -->

<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START -->
<script src="/admin/plugins/sparkline-chart/jquery.sparkline.min.js"></script>

<script src="/admin/plugins/flot-chart/jquery.flot.js"></script>
<script src="/admin/plugins/flot-chart/jquery.flot.time.js"></script>
<script src="/admin/js/chart-flot.js"></script>

<script src="/admin/plugins/chartjs-chart/Chart.min.js"></script>


<script src="/admin/plugins/swiper/swiper.js"></script>
<script src="/admin/js/dashboard-crypto.js"></script>


<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END -->

<!-- CORE TEMPLATE JS - START -->
<script src="/admin/js/scripts.js"></script>
<!-- END CORE TEMPLATE JS - END -->


<link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>

<script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>

@yield('script')
<script>
    CKEDITOR.editorConfig = function( config ) {
        config.toolbar = [
            { name: 'document', items: [ 'Source', '-', 'Save', 'NewPage', 'Preview', 'Print', '-', 'Templates' ] },
            { name: 'clipboard', items: [ 'Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Undo', 'Redo' ] },
            { name: 'editing', items: [ 'Find', 'Replace', '-', 'SelectAll', '-', 'Scayt' ] },
            { name: 'forms', items: [ 'Form', 'Checkbox', 'Radio', 'TextField', 'Textarea', 'Select', 'Button', 'ImageButton', 'HiddenField' ] },
            '/',
            { name: 'basicstyles', items: [ 'Bold', 'Italic', 'Underline', 'Strike', 'Subscript', 'Superscript', '-', 'CopyFormatting', 'RemoveFormat' ] },
            { name: 'paragraph', items: [ 'NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'Blockquote', 'CreateDiv', '-', 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock', '-', 'BidiLtr', 'BidiRtl', 'Language' ] },
            { name: 'links', items: [ 'Link', 'Unlink', 'Anchor' ] },
            { name: 'insert', items: [ 'Image', 'Flash', 'Table', 'HorizontalRule', 'Smiley', 'SpecialChar', 'PageBreak', 'Iframe' ] },
            '/',
            { name: 'styles', items: [ 'Styles', 'Format', 'Font', 'FontSize' ] },
            { name: 'colors', items: [ 'TextColor', 'BGColor' ] },
            { name: 'tools', items: [ 'Maximize', 'ShowBlocks' ] },
            { name: 'about', items: [ 'About' ] }
        ];
    };
    CKEDITOR.replace( 'summary-ckeditor' );
</script>

<script>
    $(document).ready(function() {
        $('.selectpicker').select2();
    });
</script>

scro

@yield('script')

</body>

</html>
