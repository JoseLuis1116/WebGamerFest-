<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Juego extends Model
{
    use HasFactory;

    protected $table = 'juegos';
    protected $primaryKey = 'IDJuego'; // Clave primaria de la tabla
    public $incrementing = true; // Indica que es autoincremental
    protected $keyType = 'int'; // Tipo de la clave primaria (entero)

    protected $fillable = [
        'NombreJuego',
        'DescripcionJuego',
        'IDCategoria',
        'IDModalidad',
        'ImagenJuego',
    ];

    // Relación con Categoría
    public function categoria()
    {
        return $this->belongsTo(Categoria::class, 'IDCategoria', 'IDCategoria');
    }

    // Relación con Modalidad
    public function modalidad()
    {
        return $this->belongsTo(Modalidad::class, 'IDModalidad', 'IDModalidad');
    }
}
