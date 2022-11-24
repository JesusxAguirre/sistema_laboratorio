<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CitologiaUrinaria extends Model
{
    protected $table = 'citologiaurinaria';
    protected $fillable = ['pacientes_id','extraccion','diagnostico','imagen1','imagen2','imagen3','fecha'];
    use HasFactory;
}
