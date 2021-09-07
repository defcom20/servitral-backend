<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Almacen extends Model
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
        'fecha_oc' => 'date',
        'area_solicitante_id' => 'integer',
        'empleado_solicitante_id' => 'integer',
        'proveedor_id' => 'integer',
        'fecha_guia' => 'date',
        'fecha_factura' => 'date',
        'tipo_movimiento_id' => 'integer',
        'area_responsable_id' => 'integer',
        'empleado_despacho_id' => 'integer',
        'tipo_autorizacion_id' => 'integer',
        'tipo_comprobante_id' => 'integer',
        'tipo_maquina_id' => 'integer',
        'tipo_cambio' => 'integer',
        'fecha' => 'date',
        'estado' => 'integer',
        'proyecto_id' => 'integer',
    ];


    public function almacenDetalles()
    {
        return $this->hasMany(\App\Models\AlmacenDetalle::class);
    }

    public function kardexes()
    {
        return $this->hasMany(\App\Models\Kardex::class);
    }

    public function areaSolicitante()
    {
        return $this->belongsTo(\App\Models\Area::class);
    }

    public function empleadoSolicitante()
    {
        return $this->belongsTo(\App\Models\Empleado::class);
    }

    public function proveedor()
    {
        return $this->belongsTo(\App\Models\Proveedor::class);
    }

    public function tipoMovimiento()
    {
        return $this->belongsTo(\App\Models\TipoMovimiento::class);
    }

    public function areaResponsable()
    {
        return $this->belongsTo(\App\Models\Area::class);
    }

    public function empleadoDespacho()
    {
        return $this->belongsTo(\App\Models\Empleado::class);
    }

    public function tipoAutorizacion()
    {
        return $this->belongsTo(\App\Models\TipoAutorizacion::class);
    }

    public function tipoComprobante()
    {
        return $this->belongsTo(\App\Models\TipoComprobante::class);
    }

    public function tipoMaquina()
    {
        return $this->belongsTo(\App\Models\TipoMaquina::class);
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
