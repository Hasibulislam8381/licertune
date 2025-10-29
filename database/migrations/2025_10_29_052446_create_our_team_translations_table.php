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
        Schema::create('our_team_translations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('our_team_id')->constrained()->onDelete('cascade');
            $table->string('language', 5); // en, fr, it, de
            $table->string('field'); // name, bio
            $table->text('value')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('our_team_translations');
    }
};
