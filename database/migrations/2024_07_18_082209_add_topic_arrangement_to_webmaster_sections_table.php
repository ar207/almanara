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
        Schema::table('webmaster_sections', function (Blueprint $table) {
            $table->bigInteger('topic_arrangement')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('webmaster_sections', function (Blueprint $table) {
            $table->dropColumn('topic_arrangement');
        });
    }
};
