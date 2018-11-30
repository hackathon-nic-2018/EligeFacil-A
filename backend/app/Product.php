<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Product extends Model
{
    protected $fillable=[
      'nombre',
      'descripcion',
      'precio'
    ];

    protected $appends = [
      'tienda',
    ];
    public function getTiendaAttribute(){
        return $this->tiendas->nombre;
    }
    public function imagen(){
      return $this->belongsToMany('App\Image');
    }

    public function tiendas(){
      return $this->belongsTo('App\Store','store_id');
    }

    public function getImagenAttribute(){
      // if($this->ImagenProducto){
      //   if(!Storage::exists('public\img\producto-'.$this->IdProductos.'.jpg')){
      //     Storage::put('public\img\producto-'.$this->IdProductos.'.jpg', $this->ImagenProducto);
      //     // Image::make($producto->ImagenProducto)->save('storage/imagenGenerada.jpg')
      //   }
        return '.'.Storage::url('img/producto-'.$this->id.'.jpg');
      }
}
