<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstadoCliente extends Model
{
    protected $fillable = ['idEstadoCliente','nombre'];
    protected $table = 'estadocliente';
    use HasFactory;
}
