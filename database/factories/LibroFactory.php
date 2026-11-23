<?php
namespace Database\Factories;
use App\Models\Libro;
use Illuminate\Database\Eloquent\Factories\Factory;

class LibroFactory extends Factory
{
    protected $model = Libro::class;
    
    public function definition(): array
    {
        return [
            'dni' => fake()->unique()->numerify('#############'),
            'nombre' => fake()->name(),
            'fecha_nacimiento' => fake()
            ->dateTimeBetween('-70 years', '-18 years')
            ->format('Y-m-d'),
        ];
    }
}
