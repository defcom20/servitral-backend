<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmpleadoDetalle extends Model
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
        'empleado_id' => 'integer',
        'proyecto_id' => 'integer',
        'tipo_contrato_id' => 'integer',
        'area_id' => 'integer',
        'cargo_id' => 'integer',
        'estado' => 'boolean',
    ];


    public function empleado()
    {
        return $this->belongsTo(\App\Models\Empleado::class);
    }

    public function proyecto()
    {
        return $this->belongsTo(\App\Models\Proyecto::class);
    }

    public function tipoContrato()
    {
        return $this->belongsTo(\App\Models\TipoContrato::class);
    }

    public function area()
    {
        return $this->belongsTo(\App\Models\Area::class);
    }

    public function cargo()
    {
        return $this->belongsTo(\App\Models\Cargo::class);
    }
}
