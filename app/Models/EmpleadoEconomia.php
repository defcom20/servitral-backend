<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmpleadoEconomia extends Model
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
        'ingreso_adi' => 'boolean',
        'monto_adi' => 'decimal:2',
        'ingreso_cony' => 'boolean',
        'monto_cony' => 'decimal:2',
        'ingreso_ali' => 'decimal:2',
        'ingreso_edu' => 'decimal:2',
        'ingreso_sal' => 'decimal:2',
        'ingreso_viv' => 'decimal:2',
        'ingreso_ser' => 'decimal:2',
        'ingreso_hig' => 'decimal:2',
        'ingreso_lim' => 'decimal:2',
        'ingreso_tra' => 'decimal:2',
        'ingreso_total' => 'decimal:2',
        'empleado_id' => 'integer',
    ];


    public function empleado()
    {
        return $this->belongsTo(\App\Models\Empleado::class);
    }
}
