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
        // creations (any reader‑made content—e.g. fan‑fic, artwork)
        Schema::create('creations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('reader_id')->constrained()->cascadeOnDelete(); // 1‑to‑1 // reader → creations
            $table->string('title');
            $table->text('body');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('creations');
    }
};
