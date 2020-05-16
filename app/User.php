<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    public $table = 'users';
  
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','apellido','rol_id','foto_perfil'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function productos(){
        return $this->belongsToMany('App\Producto','App\ProductoUsuario','usuario_id','producto_id')
        ->withpivot('cantidad','total')->withTimestamps();
    }
    public function role(){
        return $this->hasOne('App\Role','rol_id');
    }
    public function ordenes(){
        return $this->hasMany('App\Orden','usuario_id');
    }
    public function domicilio(){
        return $this->hasOne('App\Domicilio','user_id');
    }


}
