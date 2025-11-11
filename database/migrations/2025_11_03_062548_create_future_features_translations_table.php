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
        Schema::create('future_features_translations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('future_features_id')->constrained()->onDelete('cascade');
            $table->string('locale', 5); // en, fr, it, de
            $table->string('title');
            $table->text('features')->nullable();
            $table->timestamps();

            $table->unique(['future_features_id', 'locale']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('future_features_translations');
    }
};
