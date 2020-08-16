<?php

namespace App\Http\Controllers\Auth;

use App\Model\Setting;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/myaccount';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:20'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $setting=Setting::find(1);
        DB::beginTransaction();
        try {
            $user=new User();
            $user->first_name       =$data['name'];
            $user->email            =$data['email'];
            $user->password         =bcrypt($data['password']);
            $user->is_email_verified='1';
            $user->address          =$data['address']??'';
            $user->phone            =$data['phone'];
            $user->login_type       =1;
            $user->user_type        ='1';
            $user->save();
            try {
                if($setting->customer_reg_email=='1'){
                    Mail::send('email.register_confirmation', ['user' => $user], function($message) use ($user){
                        $message->to($user->email,$user->first_name)->subject('shop on');
                    });
                }
            } catch (\Exception $e) {
            }
            DB::commit();
            return $user;
        }
        catch (\Exception $e) {
            DB::rollback();
            return __('messages_error_success.error_code');
        }
    }
}
