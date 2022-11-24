<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HematologiaCompleta extends Model
{
    protected $table = 'hematologia_completa';

    protected $fillable = ['pacientes_id','hemoglobina','hematocrito','leucocitosT','plaquetas','neutrofilosS','neutrofilosB','linfocitos','monocitos','eosinofilos','fecha'];

    use HasFactory;
}
