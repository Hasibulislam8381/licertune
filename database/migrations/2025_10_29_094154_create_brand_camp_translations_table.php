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
        Schema::create('brand_camp_translations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('brand_camp_id')->constrained('brand_camps')->onDelete('cascade');
            $table->string('language', 5); // en, fr, it, de
            $table->string('field'); // title, subtitle, description
            $table->text('value')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('brand_camp_translations');
    }
};
