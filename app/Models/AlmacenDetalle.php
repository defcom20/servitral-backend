<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlmacenDetalle extends Model
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
        'almacen_id' => 'integer',
        'fecha' => 'date',
        'articulo_id' => 'integer',
        'proyecto_id' => 'integer',
    ];


    public function almacen()
    {
        return $this->belongsTo(\App\Models\Almacen::class);
    }

    public function articulo()
    {
        return $this->belongsTo(\App\Models\Articulo::class);
    }

    public function proyecto()
    {
        return $this->belongsTo(\App\Models\Proyecto::class);
    }
}
