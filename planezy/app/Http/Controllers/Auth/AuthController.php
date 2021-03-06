<?php

namespace App\Http\Controllers\Auth;

use App\Image;
use Illuminate\Http\Request;
use Validator;
//use App\Http\Controllers\Controller;
//use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Facades\JWTAuth;
class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    //use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    /*public function __construct()
    {
        $this->middleware('guest', ['except' => 'getLogout']);
    }*/

    public function authenticate(Request $request)
    {
       return "Hello";
        $credentials = $request->only('item_id', 'filename');
        try{
            if(! $token = JWTAuth::attempt($credentials)){
                 return $this->response->error(['error' => 'User credentials are not correct'], 401);
            }

        }  catch(JWTException $ex){
            throw $ex;
            return $this->response->error(['error' => 'Something went wrong'], 500);

        }
        return $this->response->array(compact('token'))->setStatusCode(200);  
    }
    /*pubic function authenticate()
    {
        return Image::get();
    } */   
    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    /*protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);
    }*/

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    /*protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }
    */
}
