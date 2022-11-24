<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hematologia extends Model
{
    protected $table = 'hematologia';
    protected $fillable = ['pacientes_id', 'eritrocitos', 'hemoglobina','hematocrito','vcm','chcm','reticulocitos','leucocitosT','plaquetas','proteinasPT','neutrofilosS','neutrofilosB','linfocitos','monocitos','eosinofilos','fecha'];

    use HasFactory;


    public function paciente (){
        return $this->belongsTo('App\Models\Pacientes');
    }

}


