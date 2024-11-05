<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\V1\Todo>
 */
class TodoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'description' => $this->faker->sentence(),
            'priority' => $this->faker->randomElement(['low', 'medium', 'high', 'highest']),
            'due_date' => $this->faker->dateTimeBetween('+1 week', '+2 weeks'),
            'completed_at' => $this->faker->dateTimeBetween('now', '+1 week'),
            'user_id' => User::factory(),
        ];
    }
}
