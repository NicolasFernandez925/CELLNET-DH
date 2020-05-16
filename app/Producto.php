<?php

namespace App;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{

    use SoftDeletes;
 
    protected $dates = ['deleted_at'];
    public $table = 'productos';
    public $guarded = [];
    

    public function scopeOrderProduct($query,$cantidad){
            return $query->inRandomOrder()->take($cantidad)->get();
    }

    public function usuarios(){
        return $this->belongsToMany('App\User','App\productos_usuarios','producto_id','usuario_id')
        ->withpivot('cantidad','total')->withTimestamps();
    }

    public function ordenes(){
        return $this->belongsToMany('App\Orden','ordenes_productos','producto_id','orden_id')->withTimestamps();
    }

    public function marca(){
        return $this->belongsTo('App\Marca','marca_id');
    }

    public function categoria(){
        return $this->belongsTo('App\Categoria','categoria_id');
    }

    public function caracteristicas(){
        return $this->hasMany('App\Caracteristica','producto_id');
    }

    
}
