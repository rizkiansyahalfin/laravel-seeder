<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Reader;
use App\Models\Profile;

class ReaderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Reader::factory()
            ->count(10)
            ->has(Profile::factory())   // otomatis 1‑to‑1
            ->create();
    }
}
