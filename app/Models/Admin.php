<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Auth;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\StripeAccount;


class Admin extends Authenticatable
{
    // use HasFactory;
    use Notifiable;
        protected $guard = 'admin';
        protected $fillable = [
            'first_name',
            'last_name',
            'email',
            'password',
        ];

        protected $hidden = [

        'password',
        'remember_token',
        ];

        public function vendors(){
            return $this->belongsTo('App\Models\Vendor','vendor_id');
        }


        public static function getVendorId(){

            $getId =  Admin::with('vendors')->where('id',Auth::guard('admin')->user()->id)->first()->toArray();
            return $getId;
       }

}
