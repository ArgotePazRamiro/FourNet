<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class planes extends Model
{
    use HasFactory;
    protected $fillable = ['idPlanes','Nombre', 'Velocidad_subida', 'Velocidad_bajada', 'Precio'];
    protected $table = 'planes';
}
