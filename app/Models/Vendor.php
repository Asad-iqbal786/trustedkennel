<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

use Auth;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Vendor extends Authenticatable
{
    // use HasFactory;
    use Notifiable;
    protected $guard = 'vendor';

    public function admins()
    {
        return $this->HasMany('App\Models\Admin', 'admin_id');
    }
    protected static function boot()
    {
        parent::boot();

        // static::created(function ($vendors) {
        //     $vendors->slug = $vendors->createSlug($vendors->kennel_name);
        //     $vendors->save();
        // });
    }


    // private function createSlug($kennel_name)
    // {
    //     if (static::whereSlug($slug = Str::slug($kennel_name))->exists()) {
    //         $max = static::whereShop_name($kennel_name)->latest('id')->skip(1)->value('slug');

    //         if (is_numeric($max[-1])) {
    //             return preg_replace_callback('/(\d+)$/', function ($mathces) {
    //                 return $mathces[1] + 1;
    //             }, $max);
    //         }

    //         return "{$slug}-2";
    //     }

    //     return $slug;
    // }
}
