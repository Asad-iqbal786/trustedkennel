<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PuppyImage extends Model
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

}
