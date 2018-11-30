<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserReview extends Model
{
    protected $fillable = ['puntuacion', 'comentario'];

    public function users()
    {
        return $this->hasMany('App\User');
    }

    public function stores()
    {
        return $this->hasMany('App\Store');
    }
}
