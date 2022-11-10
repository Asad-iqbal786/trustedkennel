<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WithdrawRequest extends Model
{
    use HasFactory;
    public function admins()
    {
       return $this->belongsTo('App\Models\Admin','admin_id');
    }
}
