<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\student>
 */
class studentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "name"=>$this->faker->name(),
            "lastName"=>$this->faker->lastName(),
            "score"=>$this->faker->numberBetween(20,100),
            "age"=>$this->faker->numberBetween(10,30)
        ];
    }
}
