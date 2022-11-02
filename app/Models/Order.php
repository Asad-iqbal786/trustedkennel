<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
   use HasFactory;


   public function admins()
   {
      return $this->belongsTo('App\Models\Admin', 'admin_id');
   }

   public function users()
   {
      return $this->belongsTo('App\Models\User', 'user_id');
   }

   public function vendors()
   {
      return $this->belongsTo('App\Models\Vendor', 'vendor_id');
   }
   public function products()
   {
      return $this->belongsTo('App\Models\Product', 'puppy_id');
   }

   public static function orderDetails()
   {
      $ordes =  Order::with('admins', 'users', 'vendors', 'products');

      return $ordes;
   }
}
