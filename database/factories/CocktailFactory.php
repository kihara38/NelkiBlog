<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CocktailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title'=>$this->faker->sentence(),
            'ingredients'=>'Sed bibendum nisl condimentum nunc laoreet vehicula.
            Sed a tortor non velit suscipit porta.
            Sed suscipit ex vel enim semper auctor.
            Donec vitae odio in nulla sollicitudin placerat at et nisi.
            Curabitur blandit tortor vitae egestas lacinia.
            In ullamcorper velit fringilla eros laoreet, ac tempor ante sodales.',
            'recipe'=>$this->faker->paragraph(4)
        ];
    }
}
