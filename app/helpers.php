<?php

    function descuento($price, $descuento){
        return  intval(($price * $descuento) / 100);
    }

    function presentPrice($price, $descuento){
        return  intval($price - (($price * $descuento) / 100) ) ;
    }


    function textSeeMore($text,$size){
        $str = $text;
        $str = trim(substr($str, 0, $size));
        $str .= "...";
        return  $str;
    }

    function userID(){
        return auth()->user()->id;
    }

    function totalPriceProductsUser(){
        $total = 0;
        
        foreach (session('productosUser')[0]->productos as $item){
             
            if($item->oferta != ''){         
                $total = $total + (presentPrice($item->precio, $item->oferta) *  $item->pivot->cantidad);  
               
            }

            else{
                    $total = $total + ($item->precio * $item->pivot->cantidad);              
            }       
        }
      
        return  $total;
    }

    function cantidadTotalProductos(){
        $cantProductos = 0;
        
        foreach (session('productosUser')[0]->productos as $item){
             
           $cantProductos = $cantProductos +   $item->pivot->cantidad;               
        }
      
        return  $cantProductos;
    }
?>