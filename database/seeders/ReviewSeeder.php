<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Review;
use App\Models\Reader;
use App\Models\Book;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $readers = Reader::all();
        // $books   = Book::all();

        // // buat 20 review unik reader‑book
        // for ($i = 0; $i < 20; $i++) {
        //     Review::factory()
        //         ->for($readers->random())
        //         ->for($books->random())
        //         ->create();
        // }

        $readers = Reader::pluck('id');
        $books   = Book::pluck('id');

        // semua pasangan reader‑book yang mungkin
        $pairs = collect($readers)
            ->crossJoin($books)          // Laravel ≥10
            ->shuffle()                  // acak urutan
            ->take(20);                  // ambil 20 unik

        foreach ($pairs as [$readerId, $bookId]) {
            Review::factory()->create([
                'reader_id' => $readerId,
                'book_id'   => $bookId,
            ]);
        }

        $pairs = collect($readers)->flatMap(
            fn ($r) => $books->map(fn ($b) => [$r, $b])
        )->shuffle()->take(20);
    }
}
