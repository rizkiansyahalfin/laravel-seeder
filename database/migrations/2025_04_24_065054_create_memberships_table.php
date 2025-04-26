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
        // memberships (pivot: reader ↔ club)
        Schema::create('memberships', function (Blueprint $table) {
            $table->id();
            $table->foreignId('reader_id')->constrained()->cascadeOnDelete(); // reader → memberships
            $table->foreignId('book_club_id')->constrained()->cascadeOnDelete(); // book_clubs → memberships
            $table->timestamp('joined_at')->useCurrent();
            $table->unique(['reader_id','book_club_id']); // reader_id, book_club_id → memberships (unique) // many‑to‑many pivot
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('memberships');
    }
};
