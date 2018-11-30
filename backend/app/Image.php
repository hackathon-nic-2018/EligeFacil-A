<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = ['nombre'];

    public function users()
    {
        return $this->belongsToMany('App\User');
    }

    public function products()
    {
        return $this->belongsToMany('App\Product');
    }

    public function stores()
    {
        return $this->belongsToMany('App\Store');
    }
}
