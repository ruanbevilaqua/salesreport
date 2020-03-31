<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Client extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name', 
        'address', 
        'phone', 
        'email'
    ];

    public function orders()
    {
        return $this->hasMany('App\Entities\Order');
    }
}
