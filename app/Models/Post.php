<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'posts';
    protected $fillable = [
        'categoria',
        'autor',
        'nombre',
        'resumen',
        'contenido',
        'imagen',
        'adjuntos',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function autor()
    {
        return $this->belongsTo(Usuario::class, 'autor');
    }
}
