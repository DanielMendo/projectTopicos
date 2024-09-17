<?php

namespace Database\Factories;

use App\Models\Usuario;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Usuario>
 */
class UsuarioFactory extends Factory
{
    protected $model = Usuario::class;
    
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'imagen' => $this->faker->imageUrl(), 
            'perfil' => $this->faker->firstName(), 
            'email' => $this->faker->unique()->safeEmail(), 
            'username' => $this->faker->userName(), 
            'password' => Hash::make('password'), 
            'estado' => $this->faker->randomElement([0, 1]), 
            'nombre' => $this->faker->firstName(), 
            'apellido_paterno' => $this->faker->lastName(), 
            'apellido_materno' => $this->faker->lastName(), 
            'descripcion' => $this->faker->sentence(), 
            'created_at' => now(), 
            'updated_at' => now(),
            'deleted_at' => null, 
        ];
    }
}
