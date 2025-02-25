<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aula extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'capacidad',
        'foto',
        'colegio_id'

    ];  
    protected $date = [
        'created_at',
        'updated_at',
    ];
}
