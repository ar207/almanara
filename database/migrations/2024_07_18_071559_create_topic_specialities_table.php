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
        Schema::create('topic_specialities', function (Blueprint $table) {
            $table->id();

            $table->foreignId('topic_id')->constrained('topics')->name('topic_specialities_topic_id');
            $table->foreignId('section_id')->constrained('sections')->name('topic_specialities_section_id');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('topic_specialities');
    }
};
