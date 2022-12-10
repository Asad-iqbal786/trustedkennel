<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Auth;
class Product extends Model
{
    use HasFactory;

    public function category()
    {
       return $this->belongsTo('App\Models\Category','category_id');
    }
 
    public function product_types()
    {
       return $this->belongsTo('App\Models\ProductType','produt_type_id');
    }

    public function vendors()
    {
       return $this->belongsTo('App\Models\Vendor','vendor_id');
    }



}
