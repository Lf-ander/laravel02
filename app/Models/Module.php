<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    //Relacion Uno a Muchos (Inversa) 
    public function teacher(){

        return $this->belongsTo('App\Models\Teacher');
    }

    //Relacion Uno a Muchos (Inversa) 
    public function student(){
        
        return $this->belongsTo('App\Models\Student');
    }
}
