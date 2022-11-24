<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Frotis extends Model
{
    protected $table = 'frotis';
    protected $fillable = ['pacientes_id','observacione','observacionl','observaciont','observacion','fecha'];

    use HasFactory;
}
