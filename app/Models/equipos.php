<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class equipos extends Model
{
    use HasFactory;
    protected $fillable = ['Nombre', 'Usuario', 'Contrasenia', 'UsuarioPPPoE', 'ContraseniaPPPoE','SSID','PasswordSSSID','Tipo','Estado'];
    protected $table = 'equipos';
}
