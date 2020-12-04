<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientePlan extends Model
{
    protected $fillable = ['idClientePlan','Fecha_inicio', 'Fecha_fin','persona_id','planes_id','equipos_id'];
    protected $table = 'clienteplan';
    use HasFactory;
}
