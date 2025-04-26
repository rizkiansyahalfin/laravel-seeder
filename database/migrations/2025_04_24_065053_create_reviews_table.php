<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // reviews (reader ↔ book, + rating)
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->foreignId('reader_id')->constrained()->cascadeOnDelete(); // // reader → reviews
            $table->foreignId('book_id')->constrained()->cascadeOnDelete(); // book → reviews
            $table->tinyInteger('rating'); // 1‑5
            $table->text('body');
            $table->timestamps();
            $table->unique(['reader_id', 'book_id']); // 1 review / reader / book
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};
