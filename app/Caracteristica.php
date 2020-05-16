<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Caracteristica extends Model
{

    public $table = 'caracteristicas';
    public $guarded = [];
    
    public function producto(){
        return $this->belongsTo('App\Producto','producto_id');
    }

}
