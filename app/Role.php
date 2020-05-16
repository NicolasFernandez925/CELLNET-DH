<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public $table = 'roles';
    public $guarded = [];

    public function user(){
        return $this->belongsTo('App\User','rol_id');
    }
}
