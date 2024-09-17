<?php

namespace Database\Factories;
use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'categoria' => $this->faker->numberBetween(1, 10), 
            'autor' => $this->faker->numberBetween(1, 10), 
            'nombre' => $this->faker->unique()->sentence(3), 
            'resumen' => $this->faker->text(200), 
            'contenido' => $this->faker->text(1000), 
            'imagen' => $this->faker->imageUrl(), 
            'adjuntos' => $this->faker->word(), 
            'created_at' => now(), 
            'updated_at' => now(), 
            'deleted_at' => null, 
        ];
    }
}
