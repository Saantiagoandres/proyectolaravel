<?php

namespace Database\Factories;

use App\Models\Candidate;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Multimedia>
 */
class MultimediaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=>$this->faker->text(),
            'archivo'=>$this->faker->randomElement(['IMG', 'VIDEO']),
            'descripcion'=>$this->faker->text(),

            'candidate_id'=>Candidate::inRandomOrder()->first()
        ];
    }
}
