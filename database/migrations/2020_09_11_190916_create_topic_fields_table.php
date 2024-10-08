<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTopicFieldsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('topic_fields', function (Blueprint $table) {
            $table->id();
            $table->foreignId('topic_id')->constrained(
                table: 'topics', indexName: 'topic_fields_topic_id'
            );
            $table->foreignId('field_id')->constrained(
                table: 'webmaster_section_fields', indexName: 'topic_fields_field_id'
            );
            $table->text('field_value')->nullable();
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
        Schema::dropIfExists('topic_fields');
    }
}
