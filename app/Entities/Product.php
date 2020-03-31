<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Product extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name', 
        'description', 
        'price'
    ];

    public function orders()
    {
        $this->belongsToMany('App\Entities\Order');
    }
}
