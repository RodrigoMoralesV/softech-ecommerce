<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Documento;

class Resolucion extends Model
{
    use HasFactory;

    protected $table = "resolucion";

    protected $primaryKey = "numero_resolucion";

    protected $keyType = "string";

    public function documento(){
        return $this->hasMany(Documento::class, 'numero_resolucion', 'numero_resolucion');
    }
}
