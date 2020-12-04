<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmpleadoCargo extends Model
{
    protected $fillable = ['idEmpleado_cargo','Fecha_inicio', 'Fecha_fin','persona_id','cargo_id'];
    protected $table = 'empleadocargo';
    use HasFactory;
}
