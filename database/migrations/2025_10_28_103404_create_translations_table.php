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
        Schema::create('translations', function (Blueprint $table) {
            $table->id();
            $table->morphs('translatable'); // translatable_type + translatable_id
            $table->string('language', 5); // en, fr, es, de
            $table->string('field');       // which field is translated (title, content, description, etc.)
            $table->text('value');         // translated content
            $table->timestamps();

            $table->unique(['translatable_type', 'translatable_id', 'language', 'field'], 'unique_translation');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('translations');
    }
};
