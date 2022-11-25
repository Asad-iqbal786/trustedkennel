<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WesternUnionPayment extends Model
{
    use HasFactory;

    public function admins()
    {
       return $this->belongsTo('App\Models\Admin','admin_id');
    }



    public function vendors()
    {
       return $this->belongsTo('App\Models\Vendor','vendor_id');
    }
}
