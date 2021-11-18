<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $hidden = ['Nombre','Primer apellido','Segundo apellido', 'Fecha de nacimiento'];
    use HasFactory;
}
