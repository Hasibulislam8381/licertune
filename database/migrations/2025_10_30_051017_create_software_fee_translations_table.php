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
        Schema::create('software_fee_translations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('software_fee_id')->constrained('software_fees')->onDelete('cascade');
            $table->string('language', 5); // en, fr, it, de
            $table->string('field'); // title, description
            $table->text('value')->nullable();
            $table->timestamps();

            $table->unique(['software_fee_id', 'language', 'field']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('software_fee_translations');
    }
};
