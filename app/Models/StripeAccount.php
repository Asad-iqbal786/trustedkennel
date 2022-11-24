<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StripeAccount extends Model
{
    use HasFactory;
    public function admins(){
        return $this->HasMany('App\Models\Admin','admin_id');
    }
    public function withdrawRequest()
    {
        return $this->HasMany('App\Models\withdrawRequest','admin_id');
    }
}
