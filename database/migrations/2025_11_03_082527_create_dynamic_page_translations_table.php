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
        Schema::create('dynamic_page_translations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('dynamic_page_id')->constrained()->onDelete('cascade');
            $table->string('locale', 5); // en, fr, it, de
            $table->string('page_title');
            $table->longText('page_content')->nullable();
            $table->timestamps();

            $table->unique(['dynamic_page_id', 'locale']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('dynamic_page_translations');
    }
};
