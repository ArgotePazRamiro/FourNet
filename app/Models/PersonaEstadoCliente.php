<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonaEstadoCliente extends Model
{
    protected $fillable = ['idPersonaEstadoCliente','fecha_inicio', 'fecha_fin','persona_id','estadocliente_id'];
    protected $table = 'pago';
    use HasFactory;
}
