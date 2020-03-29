<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'client_id', 
        'payment_id'
    ];


    public function products()
    {
        return $this->belongsToMany('App\Entities\Product');
    }

    public function payment()
    {
        return $this->hasOne('App\Entities\Payment', 'id');
    }
}
