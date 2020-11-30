<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class equipos extends Model
{
    use HasFactory;
    protected $fillable = ['Nombre', 'Usuario', 'contrasenia', 'UsuarioPPPoE', 'contraseniaPPPoE','SSID','passwordSSSID','Tipo','Estado'];
    protected $table = 'equipos';
}
