<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Domicilio extends Model
{
    public $table = 'domicilio';
    public $guarded = [];

    public function orden(){
        return $this->belongsTo('App\Orden','domicilio_id');
    }
    public function user(){
        return $this->belongsTo('App\User','user_id');
    }
}
