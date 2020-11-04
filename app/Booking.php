<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $guarded = [];

    public function getCustomerNameAttribute()
    {
        $user = User::find($this->customer_id);
        return ucfirst($user->name);
    }

    public function getConstructorNameAttribute()
    {
        $user = User::find($this->constructor_id);
        return ucfirst($user->name);
    }

    public function getServiceNameAttribute()
    {

        $ids = explode(',',$this->service_id);
        $services = Services::whereIn('id',$ids)->pluck('service_name');
        return $services;
    }
}
