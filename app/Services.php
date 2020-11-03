<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Services extends Model
{
  
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
