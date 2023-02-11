<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Citizen>
 */
class CitizenFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $gender = $this->faker->randomElement(['male', 'female']);

        return [
            'full_name' => $this->faker->name(),
            'ward_id' => $this->faker->numberBetween(1, 15),
            'gender' => $gender,
            'address' => $this->faker->streetAddress(),
            'phone_number' => $this->faker->phoneNumber(), 
        ];
    }
}
