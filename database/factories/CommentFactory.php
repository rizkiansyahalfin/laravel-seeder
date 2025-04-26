<?php

namespace Database\Factories;

use App\Models\Comment;
use App\Models\Reader;
use App\Models\Book;
use App\Models\Review;
use App\Models\Creation;    // target polymorphic
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Comment::class;
    public function definition(): array
    {
        return [
            'body' => $this->faker->sentence(),
            // 'reader_id' & morph di‑isi di seeder
        ];
    }
}
