<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
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
        'departamento_id' => 'integer',
        'provincia_id' => 'integer',
        'distrito_id' => 'integer',
        'proveedor_id' => 'integer',
        'fchainicial' => 'date',
        'fchafinal' => 'date',
        'estado' => 'integer',
    ];


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

    public function proveedor()
    {
        return $this->belongsTo(\App\Models\Proveedor::class);
    }
}
