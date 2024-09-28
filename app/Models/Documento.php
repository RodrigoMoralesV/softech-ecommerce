<?php

namespace App\Models;

use App\Models\Cliente;
use App\Models\Detalle_pago;
use App\Models\Detalle_producto;
use App\Models\Empresa;
use App\Models\Estado;
use App\Models\Resolucion;
use App\Models\Transaccion;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Thiagoprz\CompositeKey\HasCompositeKey;

class Documento extends Model
{
    use HasFactory, HasCompositeKey;

    protected $table = "documento";

    protected $primaryKey = [
        "codigo_transaccion",
        "numero_documento"
    ];

    protected $keyType = "string";

    public $incrementing = false;

    protected $fillable = [
        'codigo_transaccion',
        'numero_documento',
        'numero_resolucion',
        'cliente_id',
        'nit_empresa',
        'fecha_documento',
        'codigo_cufe',
        'porcentaje_iva_documento',
        'iva_documento',
        'porcentaje_descuento_documento',
        'valor_descuento_documento',
        'identificador_cufe',
        'monto',
        'estado',
    ];

    public function cliente(){
        return $this->belongsTo(Cliente::class, 'cliente_id', 'id_cliente');
    }

    public function detalle_producto(){
        return $this->hasMany(Detalle_producto::class, [
            'codigo_transaccion',
            'numero_documento'
        ], [
            'codigo_transaccion',
            'numero_documento'
        ]);
    }

    public function empresa(){
        return $this->belongsTo(Empresa::class, 'nit_empresa', 'nit_empresa');
    }

    public function resolucion(){
        return $this->belongsTo(Resolucion::class, 'numero_resolucion', 'numero_resolucion');
    }

    public function transaccion(){
        return $this->belongsTo(Transaccion::class, 'codigo_transaccion', 'codigo_transaccion');
    }
}
