<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    protected $fillable = ['nombre', 'descripcion', 'redesSociales', 'direccion', 'telefono', 'latitud', 'longitud'];

    public function users()
    {
        return $this->belongsToMany('App\User');
    }

    public function userreviews()
    {
        return $this->hasMany('App\UserReview');
    }

    public function products()
    {
        return $this->hasMany('App\Product');
    }

    public function images()
    {
        return $this->belongsToMany('App\Image');
    }

    public function storehours()
    {
        return $this->belongsToMany('App\StoreHour');
    }
}
