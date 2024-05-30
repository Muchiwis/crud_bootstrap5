<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    protected $table = 'clientes';
    public $fillable = [
        'id',
        'nombre',
        'email',
        'telefono',
        'pais',
        'fecha_nacimiento',
        'genero',
        'notas',
        'fecha_registro',
        'ocupacion',
        'created_at',
        'updated_at'
    ];
}
