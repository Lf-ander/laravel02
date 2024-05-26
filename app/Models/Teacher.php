<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{

    // uno a uno de teacher a modulo
    public function module(){
        
        return $this->hasOne('App\Models\Post'); //RECUPERAR LA COLECCION DE POST QUE PERTENECEN A ESTE USUARIO
    }
}
