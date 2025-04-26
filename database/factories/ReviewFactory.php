<?php

namespace Database\Factories;

use App\Models\Review;
use App\Models\Reader;
use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Review>
 */
class ReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     protected $model = Review::class;

    public function definition(): array
    {
        return [
            'rating' => $this->faker->numberBetween(1, 5),
            'body' => $this->faker->paragraph,
            // relasi di‑isi pada seeder atau state:
            // 'reader_id' => Reader::factory(),
            // 'book_id'   => Book::factory(),
        ];
    }
}
