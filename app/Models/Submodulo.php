<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Submodulo extends Model
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
        'modulo_id' => 'integer',
        'fchaactivacion' => 'date',
        'estado' => 'integer',
    ];


    public function usuModulos()
    {
        return $this->hasMany(\App\Models\UsuModulo::class);
    }

    public function usuSubmodulos()
    {
        return $this->hasMany(\App\Models\UsuSubmodulo::class);
    }

    public function modulo()
    {
        return $this->belongsTo(\App\Models\Modulo::class);
    }
}
