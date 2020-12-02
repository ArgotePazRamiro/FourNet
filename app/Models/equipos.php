<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class equipos extends Model
{
    use HasFactory;
    protected $fillable = ['idEquipos','Nombre', 'Usuario', 'Contrasenia', 'UsuarioPPPoE', 'ContraseniaPPPoE','SSID','PasswordSSSID','Tipo','Estado'];
    protected $table = 'equipos';
}
