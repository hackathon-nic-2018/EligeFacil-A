<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = ['nombre'];

    public function users()
    {
        return $this->hasMany('App\User');
    }

    public function products()
    {
        return $this->hasMany('App\Product');
    }

    public function stores()
    {
        return $this->hasMany('App\Store');
    }
}
