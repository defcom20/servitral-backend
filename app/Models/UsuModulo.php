<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsuModulo extends Model
{
    use HasFactory;

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    protected $hidden = ['created_at', 'updated_at', 'modulo_id','usu_proyecto_id'];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'fchaactivacion' => 'date',
        'estado' => 'integer',
        'usu_proyecto_id' => 'integer',
        'modulo_id' => 'integer',
    ];


    public function usuSubmodulos()
    {
        return $this->hasMany(\App\Models\UsuSubmodulo::class);
    }

    public function usuProyecto()
    {
        return $this->belongsTo(\App\Models\UsuProyecto::class);
    }

    public function modulo()
    {
        return $this->belongsTo(\App\Models\Modulo::class);
    }
}
