<div class="modal" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <div id="overlay">
                    <div class="cv-spinner">
                        <span class="spinner"></span>
                    </div>
                </div>
                <div id="forgotbody" class="forgotbody">
                    <div class="reset-p" style="background-color:{{site_color()}} !important;">
                        <h1>{{__('messages.forgot_note')}}
                        </h1>
                    </div>
                    <div class="tab-content space">
                        <form class="log-1">
                            <span id="forgot_msg"></span>
                            <div class="logi">
                                <a href="#">
                                    <i class="fa fa-long-arrow-left" aria-hidden="true"></i>
                                    <a href="javascript:loginmodel()">{{__('messages.back_to_login')}}</a>
                                </a>
                            </div>
                            <input type="text" name="forgot_email"  placeholder="Email" id="value">
                        </form>
                        <div class="button-sign_in-1" >
                            <a href="javascript:forgotpassword()" style="background-color:{{site_color()}} !important;">
                                {{__('messages.forgot_pwd')}}
                            </a>
                        </div>
                    </div>
                </div>
                <div id="loginbody">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" href="#profile" role="tab" data-toggle="tab">{{__('messages.login')}}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#buzz" role="tab" data-toggle="tab">{{__('messages.register')}}</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active" id="profile">
                            <form>
                                <span id="login_error_msg"></span>
                                <input type="email" name="login_email" value="{{isset($_COOKIE['user_email'])?$_COOKIE['user_email']:''}}" placeholder="Enter Your Email"  id="value">
                                <br>
                                <input type="password" value="{{isset($_COOKIE['password'])?$_COOKIE['password']:''}}" name="login_password" placeholder="Enter Password"  id="value">
                                <div class="form-group">
                                    <input type="checkbox" <?php echo isset($_COOKIE[ 'rem_me'])? "checked": ''?> id="html" name="login_remember">
                                    <label for="html">
                                        <span>{{__('messages.rem_me')}}</span>
                                    </label>
                                    <a href="javascript:forgotmodel()">{{__('messages.lost_pwd')}}</a>
                                </div>
                            </form>
                            <div class="button-sign_in">
                                <input type="button" name="btnlogin" onclick="loginuser('login_')" value="{{__('messages.login')}}" class="regiterbtn" style="background-color: {{site_color()}} !important"/>
                            </div>
                            @if(Session::get("facebook_active"))
                                <div class="button-facebook">
                                    <a href="{{ url('auth/facebook') }}">
                                        <img src="{{asset('Ecommerce/images/facebook.png')}}">
                                    </a>
                                </div>
                            @endif
                            @if(Session::get("google_active"))
                                <div class="button-facebook">
                                    <a href="{{ url('auth/google') }}">
                                        <img src="{{asset('Ecommerce/images/google.png')}}">
                                    </a>
                                </div>
                            @endif
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="buzz">
                            <form>
                                <span id="reg_success_msg"></span>
                                <span id="reg_error_msg"></span>
                                <input type="text" name="first_name"  id="value" placeholder="{{__('messages.name')}}">
                                <br>
                                <input type="email" name="reg_email"  id="value" placeholder="{{__('messages.email')}}">
                                <br>
                                <input type="text" name="reg_phone" id="value" placeholder="{{__('messages.phone')}}">
                                </br>
                                <input type="password" name="reg_password"  id="value" placeholder="{{__('messages.password')}}">
                                </br>
                                <input type="password" name="confirm_password" id="value" placeholder="{{__('messages.confirm_password')}}">
                            </form>
                            <div class="button-sign_in">
                                <input type="button" name="btnsubmit" onclick="registeruser()" value="REGISTER" class="regiterbtn" style="background-color: {{site_color()}} !important"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
