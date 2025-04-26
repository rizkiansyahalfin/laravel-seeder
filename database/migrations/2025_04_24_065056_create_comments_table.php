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
        // comments (polymorphic)
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->text('body');
            $table->morphs('commentable'); // polymorphic relation (1‑to‑many)
            $table->foreignId('reader_id')->constrained()->cascadeOnDelete(); // 1‑to‑1 // reader → comments
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comments');
    }
};
