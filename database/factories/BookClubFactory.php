<?php

namespace Database\Factories;

use App\Models\BookClub;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BookClub>
 */
class BookClubFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = BookClub::class;
    public function definition(): array
    {
        return [
            'name' => $this->faker->word(3, true),
            'description' => $this->faker->paragraph(),
        ];
    }
}
