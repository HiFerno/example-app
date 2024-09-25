<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contacto extends Model
{
    use HasFactory;

    // Define la tabla asociada
    protected $table = 'contact';

    // Define los campos que son asignables masivamente
    protected $fillable = ['nombre', 'email', 'publicidad', 'mensaje', 'created_at', 'updated_at'];
}
