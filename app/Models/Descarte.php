<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Descarte extends Model
{
    protected $table = 'descartes';
    protected $fillable = ['pacientes_id','observacion','diagnostico','imagen1','imagen2','imagen3','fecha'];
    use HasFactory;
}
