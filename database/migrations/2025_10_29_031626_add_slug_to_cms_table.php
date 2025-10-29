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
        Schema::table('cms', function (Blueprint $table) {
            // slug কলাম যোগ করা হচ্ছে, যদি না থাকে
            if (!Schema::hasColumn('cms', 'slug')) {
                $table->string('slug')->after('page_name');
            }

            // slug + section_name একসাথে unique করা হচ্ছে
            $table->unique(['slug', 'section_name'], 'cms_slug_section_unique');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('cms', function (Blueprint $table) {
            // unique constraint ড্রপ
            $table->dropUnique('cms_slug_section_unique');

            // চাইলে slug কলামও ডিলিট করতে পারো
            $table->dropColumn('slug');
        });
    }
};
