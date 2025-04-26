<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comment;
use App\Models\Reader;
use App\Models\Book;
use App\Models\Review;
use App\Models\Creation;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $commentables = collect([
            Book::class,
            Review::class,
            Creation::class,
        ]);

        for ($i = 0; $i < 20; $i++) {
            $type = $commentables->random();
            Comment::factory()->create([
                'reader_id'        => Reader::inRandomOrder()->value('id'),
                'commentable_id'   => $type::inRandomOrder()->value('id'),
                'commentable_type' => $type,
            ]);
        }
    }
}
