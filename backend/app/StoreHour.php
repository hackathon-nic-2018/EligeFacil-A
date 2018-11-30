<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StoreHour extends Model
{
    protected $fillable = ['dias', 'horaInicio', 'horaFin'];
    
    public function stores()
    {
        return $this->belongsTo('App\Store');
    }
}
