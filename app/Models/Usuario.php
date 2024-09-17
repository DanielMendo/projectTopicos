<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Usuario extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'usuarios';
    protected $fillable = [
        'imagen',
        'perfil',
        'email',
        'username',
        'password',
        'estado',
        'nombre',
        'apellido_paterno',
        'apellido_materno',
        'descripcion',
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    public function posts()
    {
        return $this->hasMany(Post::class, 'autor');
    }
}
