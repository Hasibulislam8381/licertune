<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('future_features', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('image')->nullable();
            $table->text('features'); // comma-separated list of features
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('future_features');
    }
};
