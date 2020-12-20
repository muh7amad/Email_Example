<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $fillable = [
        'name',
        'price',
        'photo',
        'description',
        'created_by',
    ];

    public function user()
    {
        return $this->hasMany('App\Models\User','id','created_by');
    }



}
