<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\BookClub;
use App\Models\Reader;

class BookClubSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $clubs = BookClub::factory()->count(5)->create();

        // memberships (many‑to‑many)
        $clubs->each(function ($club) {
            $club->members()->attach(
                Reader::inRandomOrder()->take(rand(3, 8))->pluck('id'),
                ['joined_at' => now()]
            );
        });
    }
}
