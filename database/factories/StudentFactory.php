<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'student_id' => $this->faker->uuid(),
            'name' => $this->faker->name,
            'hall' => $this->faker->word(),
            'phone' => $this->faker->phoneNumber,
            'district' => $this->faker->city,
            'image' => $this->faker->imageUrl(200, 200, 'people', true, 'Student'), // Generates a placeholder image URL
        ];
    }
}
