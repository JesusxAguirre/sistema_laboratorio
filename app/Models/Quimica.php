<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quimica extends Model
{
    protected $table = 'quimica';
    protected $fillable = ['pacientes_id','glucosa','urea','creatinina','alt','ast','ggt','LDH','fosfatasa','amilasa','lipasa','bilirrubinaT','bilirrubinaD','bilirrubinaI','proteinasT','albumina','globulinas','relacionag','colesterolT','calcio','fosforo','sodio','cloro','potasio','fecha'];
    use HasFactory;
}
