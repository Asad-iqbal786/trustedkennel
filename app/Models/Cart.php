<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    public function vendors()
    {
       return $this->belongsTo('App\Models\Vendor','vendor_id');
    }

    public function products()
    {
       return $this->belongsTo('App\Models\Product','puppy_id');
    }

    public function users()
    {
       return $this->belongsTo('App\Models\User','user_id')->with('usersApp');
    }


}
