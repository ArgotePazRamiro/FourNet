<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $fillable = ['idPersona','CI','Nombres', 'Apellidos','Direccion','Cel1','Estado','Rol'];
    protected $table = 'persona';
    use HasFactory;
}
