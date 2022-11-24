<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Urianalisis extends Model
{
    protected $table = 'urianalisis';
    protected $fillable = ['pacientes_id','color','olor','aspecto','densidad','ph','glucosa','proteinas','nitritos','cetonas','bilirrubina','urobilinogeno','sangre','hematies','leucocitos','bacterias','otros','planas','transcicionales','redondasp','redondasg','caudadas','cumulos','cilindros','cristales','observacion','fecha'];

    use HasFactory;
}
