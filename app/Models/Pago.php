<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
    protected $fillable = ['idPago','Mes', 'Año'];
    protected $table = 'pago';
    use HasFactory;
}
