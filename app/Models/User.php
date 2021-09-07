<?php

namespace App\Models;

use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'sexo' => 'integer',
        'fchanacimiento' => 'date',
        'tipousuario' => 'integer',
        'estado' => 'integer',
        'email_verified_at' => 'timestamp',
    ];


    public function usuProyectos()
    {
        return $this->hasMany(\App\Models\UsuProyecto::class);
    }

    public function usuPermisos()
    {
        return $this->hasMany(\App\Models\UsuPermiso::class);
    }
}
