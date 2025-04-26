<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tag;
use App\Models\Book;
use App\Models\Creation;
use App\Models\BookClub;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tags = Tag::factory()->count(10)->create();

        // poly many‑to‑many: lampirkan acak ke books, creations, book clubs
        foreach ($tags as $tag) {
            $tag->books()->attach(Book::inRandomOrder()->take(rand(1,3))->pluck('id'));
            $tag->creations()->attach(Creation::inRandomOrder()->take(rand(1,2))->pluck('id'));
            $tag->bookClubs()->attach(BookClub::inRandomOrder()->take(rand(1,2))->pluck('id'));
        }
    }
}
