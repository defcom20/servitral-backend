<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modulo extends Model
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
        'fchaactivacion' => 'date',
        'estado' => 'integer',
    ];


    public function submodulos()
    {
        return $this->hasMany(\App\Models\Submodulo::class);
    }

    public function usuModulos()
    {
        return $this->hasMany(\App\Models\UsuModulo::class);
    }
}
