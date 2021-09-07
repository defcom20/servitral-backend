<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsuSubmodulo extends Model
{
    use HasFactory;

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    protected $hidden = ['created_at', 'updated_at', 'usu_modulo_id','submodulo_id'];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'tipopermiso' => 'integer',
        'fchaactivacion' => 'date',
        'estado' => 'integer',
        'usu_modulo_id' => 'integer',
        'submodulo_id' => 'integer',
    ];


    public function usuModulo()
    {
        return $this->belongsTo(\App\Models\UsuModulo::class);
    }

    public function submodulo()
    {
        return $this->belongsTo(\App\Models\Submodulo::class);
    }
}
