<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsuPermiso extends Model
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
        'usuer_id' => 'integer',
        'proyecto_id' => 'integer',
        'modulo_id' => 'integer',
        'submodulo_id' => 'integer',
        'tipo_permiso_id' => 'integer',
    ];


    public function usuer()
    {
        return $this->belongsTo(\App\Models\Usuer::class);
    }

    public function proyecto()
    {
        return $this->belongsTo(\App\Models\Proyecto::class);
    }

    public function modulo()
    {
        return $this->belongsTo(\App\Models\Modulo::class);
    }

    public function submodulo()
    {
        return $this->belongsTo(\App\Models\Submodulo::class);
    }

    public function tipoPermiso()
    {
        return $this->belongsTo(\App\Models\TipoPermiso::class);
    }
}
