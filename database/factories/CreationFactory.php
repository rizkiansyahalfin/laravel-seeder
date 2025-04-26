<?php

namespace Database\Factories;

use App\Models\Creation;
use App\Models\Reader;  // jika ingin reader default
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Creation>
 */
class CreationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Creation::class;
    public function definition(): array
    {
        return [
            // tidak ditugaskan
            'title' => $this->faker->catchPhrase(),
            'body' => $this->faker->paragraph(3, true),
            // 'reader_id' di‑isi di seeder
        ];
    }
}
