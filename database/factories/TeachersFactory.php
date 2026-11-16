<?php

namespace Database\Factories;

use App\Models\Subjects;
use App\Models\Teachers;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Teachers>
 */
class TeachersFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'niy' => fake()->randomNumber(5, true),
            // 'subjects' => fake()->unique()->randomElement(['MTK', 'IPA','IPS', 'SEJARAH', 'B. INDO', 'B.JEPANG','INFORMATIKA','PAI', 'B.INGGRIS','B.JAWA']),
            'subject_id' => Subjects::factory(),
            'start_date' => fake()->date()
        ];
    }
}