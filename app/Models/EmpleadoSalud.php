<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmpleadoSalud extends Model
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
        'sanguineo_id' => 'integer',
        'empleado_id' => 'integer',
    ];


    public function sanguineo()
    {
        return $this->belongsTo(\App\Models\Sanguineo::class);
    }

    public function empleado()
    {
        return $this->belongsTo(\App\Models\Empleado::class);
    }
}
