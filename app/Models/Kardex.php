<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kardex extends Model
{
    use HasFactory;

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'fecha' => 'date',
        'almacen_id' => 'integer',
        'tipo_movimiento' => 'integer',
        'tipo_cambio' => 'integer',
        'fecha_documento' => 'date',
        'tipo' => 'integer',
        'ingreso' => 'decimal:2',
        'salida' => 'decimal:2',
        'saldo' => 'decimal:2',
        'costo_unitario' => 'decimal:2',
        'costo_promedio' => 'decimal:2',
        'costo_ingreso' => 'decimal:2',
        'costo_salida' => 'decimal:2',
        'costo_saldo' => 'decimal:2',
        'saldo_anterior' => 'decimal:2',
        'costo_anterior' => 'decimal:2',
        'promedio_anterior' => 'decimal:2',
        'precio_unitario' => 'decimal:2',
        'proyecto_id' => 'integer',
    ];


    public function almacen()
    {
        return $this->belongsTo(\App\Models\Almacen::class);
    }

    public function tipoMovimiento()
    {
        return $this->belongsTo(\App\Models\TipoMovimiento::class);
    }

    public function tipoCambio()
    {
        return $this->belongsTo(\App\Models\TipoCambio::class);
    }

    public function proyecto()
    {
        return $this->belongsTo(\App\Models\Proyecto::class);
    }
}
