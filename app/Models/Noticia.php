<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
    use HasFactory;

    protected $primaryKey = 'noticia_id';

    protected $fillable = ['nombre', 'titulo', 'portada', 'portada_descripcion', 'resumen', 'cita', 'descripcion'];
}