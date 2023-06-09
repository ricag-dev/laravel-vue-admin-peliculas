<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelicula extends Model
{
    use HasFactory;

    protected $fillable = ['nombre','fecha_publicacion','imagen','estado'];

    public function turnos()
    {
        return $this->hasMany(Turno::class);
    }
}
