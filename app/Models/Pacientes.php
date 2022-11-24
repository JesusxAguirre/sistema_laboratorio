<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Mail;

class Pacientes extends Model
{
    protected $table = 'pacientes';
    protected $fillable = ['id','nombre', 'especie', 'sexo', 'raza','edad','remitente','propietario'];

    use HasFactory;
    
    public function hematologias(){
        return $this->hasMany('App\Models\Hematologia');
    }
    public function descartes(){
        return $this->hasMany('App\Models\Descarte');
    }
    public function frotis(){
        return $this->hasMany('App\Models\Frotis');
    }

    public function hematologiasc(){
        return $this->hasMany('App\Models\HematologiaCompleta');
    }
    public function quimicas(){
        return $this->hasMany('App\Models\Quimica');
    }
    public function urianalisis(){
        return $this->hasMany('App\Models\Urianalisis');
    }
    public function citologiaurinaria(){
        return $this->hasMany('App\Models\CitologiaUrinaria');
    }
}
