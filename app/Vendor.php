<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
//use Zizaco\Entrust\Traits\EntrustUserTrait;

class Vendor extends Model //implements AuthenticatableContract, AuthorizableContract,
    //CanResetPasswordContract
{
    //use Authenticatable, CanResetPassword, EntrustUserTrait;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'vendor_info';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    //protected $fillable = ['VENDOR_NAME', 'VENDOR_LOGIN_ID', 'PASSWORD', 'EMAIL', 'MOBILE', 'VEENDOR_ID'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    //protected $hidden = ['password', 'remember_token'];
}