<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWebmasterBannersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('webmaster_banners', function (Blueprint $table) {
            $table->id();
            $table->integer('row_no')->default(0);

            $table->string('title_ar')->nullable();
            $table->string('title_en')->nullable();
            $table->string('title_ch')->nullable();
            $table->string('title_hi')->nullable();
            $table->string('title_es')->nullable();
            $table->string('title_ru')->nullable();
            $table->string('title_pt')->nullable();
            $table->string('title_fr')->nullable();
            $table->string('title_de')->nullable();
            $table->string('title_th')->nullable();
            $table->string('title_br')->nullable();

            $table->integer('width')->default(0);
            $table->integer('height')->default(0);
            $table->tinyInteger('desc_status')->default(0);
            $table->tinyInteger('link_status')->default(0);
            $table->tinyInteger('type')->default(0);
            $table->tinyInteger('icon_status')->default(0);
            $table->tinyInteger('status')->default(0);
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('webmaster_banners');
    }
}
