<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
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
        'unidad_medida_id' => 'integer',
        'fechav' => 'date',
        'estado' => 'boolean',
        'user_id' => 'integer',
    ];


    public function unidadMedida()
    {
        return $this->belongsTo(\App\Models\UnidadMedida::class);
    }

    public function user()
    {
        return $this->belongsTo(\App\Models\User::class);
    }
}
