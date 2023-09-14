<?php

namespace Database\Factories;

use App\Models\Candidate;
use App\Models\Headhunter;
use App\Models\Multimedia;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Commentary>
 */
class CommentaryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'descripcion'=>$this->faker->text(),

            'multimedia_id'=>Multimedia::inRandomOrder()->first(),
            'candidate_id'=>Candidate::inRandomOrder()->first(),
            'headhunter_id'=>Headhunter::inRandomOrder()->first(),
        ];
    }
}
