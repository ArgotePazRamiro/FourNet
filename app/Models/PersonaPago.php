<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonaPago extends Model
{
    protected $fillable = ['idPersonaPago','Estado', 'persona_id','pago_id'];
    protected $table = 'pago';
    use HasFactory;
}
