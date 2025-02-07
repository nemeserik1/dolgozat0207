<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Destination>
 */
class DestinationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $dt = $this->faker->dateTimeBetween($startDate = '-30 years', $endDate = 'now');
        $date = $dt->format("Y-m-d"); // 1994-09-24

        return [
            'destination' => fake()->randomElement(['Scarif', 'Endor', 'Jedha', 'Hoth', 'Bespin', 'Naboo', 'Utapau', 'Yavin 4', 'Sullust', 'Mustafar']),
            'price' => $this->faker->numberBetween(5000, 40000),
            'departure' => $date,
        ];
    }
}
