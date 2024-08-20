<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\News>
 */
class JemaatFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'birth_date' => $this->faker->date(),
            'alamat' => $this->faker->address,
            'wijk' => $this->faker->numberBetween(1, 12),
            'notelp' => $this->faker->phoneNumber,
            'umur' => $this->faker->numberBetween(18, 60)
        ];
    }
}
