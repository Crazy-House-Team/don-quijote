<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence($nbWords = 6, $variableNbWords = true),
            'resume' => $this->faker->realText($maxNbChars = 50, $indexSize = 1),
            'description' => $this->faker->realText($maxNbChars = 200, $indexSize = 2),
            'place' => $this->faker->company(),
            'address' => $this->faker->streetAddress(),
            'date' => $this->faker->date($format = 'Y-m-d'),
            'time' => $this->faker->time($format = 'H:i'),
            'img' => $this->faker->imageUrl($width = 640, $height = 480),
            'max_participants' => $this->faker->numberBetween($min = 10, $max = 100),
        ];
    }
}
