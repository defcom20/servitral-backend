<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
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
        'pais_id' => 'integer',
        'departamento_id' => 'integer',
        'provincia_id' => 'integer',
        'distrito_id' => 'integer',
        'grado_instruccion_id' => 'integer',
        'profesion_id' => 'integer',
        'banco_id' => 'integer',
        'sistema_pension_id' => 'integer',
        'uniforme_id' => 'integer',
        'calzado_id' => 'integer',
        'user_id' => 'integer',
    ];


    public function pais()
    {
        return $this->belongsTo(\App\Models\Pais::class);
    }

    public function departamento()
    {
        return $this->belongsTo(\App\Models\Departamento::class);
    }

    public function provincia()
    {
        return $this->belongsTo(\App\Models\Provincia::class);
    }

    public function distrito()
    {
        return $this->belongsTo(\App\Models\Distrito::class);
    }

    public function gradoInstruccion()
    {
        return $this->belongsTo(\App\Models\GradoInstruccion::class);
    }

    public function profesion()
    {
        return $this->belongsTo(\App\Models\Profesion::class);
    }

    public function banco()
    {
        return $this->belongsTo(\App\Models\Banco::class);
    }

    public function sistemaPension()
    {
        return $this->belongsTo(\App\Models\SistemaPension::class);
    }

    public function uniforme()
    {
        return $this->belongsTo(\App\Models\Uniforme::class);
    }

    public function calzado()
    {
        return $this->belongsTo(\App\Models\Calzado::class);
    }

    public function user()
    {
        return $this->belongsTo(\App\Models\User::class);
    }
}
