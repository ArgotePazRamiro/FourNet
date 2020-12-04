<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    protected $fillable = ['idEquipos','Nombre', 'Usuario', 'Contrasenia', 'UsuarioPPPoE', 'ContraseniaPPPoE', 'SSID', 'PasswordSSID', 'Tipo','Estado'];
    protected $table = 'equipo';
    use HasFactory;
}
