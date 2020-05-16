<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orden extends Model
{
    public $table = 'ordenes';
    public $guarded = [];

    
    public function user(){
        return $this->belongsTo('App\User','usuario_id');
    }

    public function domicilio(){
        return $this->hasOne('App\Domicilio','domicilio_id');
    }

    public function productos(){
        return $this->belongsToMany('App\Producto','ordenes_productos','orden_id','producto_id')->withTimestamps();
    }

}
