<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTables extends Migration
{
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            // this will create an id, a "published" column, and soft delete and timestamps columns
            createDefaultTableFields($table);

            $table->integer('position')->unsigned()->nullable();
            $table->dateTime('event_date')->nullable();

            // add those 2 columns to enable publication timeframe fields (you can use publish_start_date only if you don't need to provide the ability to specify an end date)
            // $table->timestamp('publish_start_date')->nullable();
            // $table->timestamp('publish_end_date')->nullable();
        });

        Schema::create('event_translations', function (Blueprint $table) {
            createDefaultTranslationsTableFields($table, 'event');
            $table->string('title', 200)->nullable();
            $table->text('description')->nullable();
            $table->string('event_type', 200)->nullable();
            $table->string('event_location', 200)->nullable();
            $table->string('event_organizer', 200)->nullable();
        });

        Schema::create('event_slugs', function (Blueprint $table) {
            createDefaultSlugsTableFields($table, 'event');
        });


    }

    public function down()
    {

        Schema::dropIfExists('event_translations');
        Schema::dropIfExists('event_slugs');
        Schema::dropIfExists('events');
    }
}
