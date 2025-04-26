<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Creation;
use App\Models\Reader;

class CreationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Reader::all()->each(function ($reader) {
            $reader->creations()->saveMany(
                Creation::factory()->count(1)->make()   // total min 10
            );
        });
    }
}
