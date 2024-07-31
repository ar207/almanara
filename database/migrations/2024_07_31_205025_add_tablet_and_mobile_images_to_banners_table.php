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
        Schema::table('banners', function (Blueprint $table) {
            $table->string('tablet_file_en')->nullable();
            $table->string('tablet_file_ar')->nullable();
            $table->string('mobile_file_en')->nullable();
            $table->string('mobile_file_ar')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('banners', function (Blueprint $table) {
            $table->dropColumn('tablet_file_en');
            $table->dropColumn('tablet_file_ar');
            $table->dropColumn('mobile_file_en');
            $table->dropColumn('mobile_file_ar');
        });
    }
};
