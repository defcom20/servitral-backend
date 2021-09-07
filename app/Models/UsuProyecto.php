<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsuProyecto extends Model
{
    use HasFactory;

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */



    protected $guarded = [];

    protected $hidden = ['created_at', 'updated_at'];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'fchaactivacion' => 'date:Y-m-d',
        'estado' => 'integer',
        'user_id' => 'integer',
        'proyecto_id' => 'integer',
    ];

    public function usuModulos()
    {
        return $this->hasMany(\App\Models\UsuModulo::class);
    }

    public function user()
    {
        return $this->belongsTo(\App\Models\User::class);
    }

    public function proyecto()
    {
        return $this->belongsTo(\App\Models\Proyecto::class);
    }
}
