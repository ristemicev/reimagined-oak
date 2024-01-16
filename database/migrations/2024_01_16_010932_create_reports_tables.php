<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportsTables extends Migration
{
    public function up()
    {
        Schema::create('reports', function (Blueprint $table) {
            // this will create an id, a "published" column, and soft delete and timestamps columns
            createDefaultTableFields($table);

            $table->integer('position')->unsigned()->nullable();
            $table->dateTime('report_date')->nullable();

            // add those 2 columns to enable publication timeframe fields (you can use publish_start_date only if you don't need to provide the ability to specify an end date)
            // $table->timestamp('publish_start_date')->nullable();
            // $table->timestamp('publish_end_date')->nullable();
        });

        Schema::create('report_translations', function (Blueprint $table) {
            createDefaultTranslationsTableFields($table, 'report');
            $table->string('title', 200)->nullable();
            $table->string('report_author', 200)->nullable();
            $table->text('description')->nullable();
        });

        Schema::create('report_slugs', function (Blueprint $table) {
            createDefaultSlugsTableFields($table, 'report');
        });


    }

    public function down()
    {

        Schema::dropIfExists('report_translations');
        Schema::dropIfExists('report_slugs');
        Schema::dropIfExists('reports');
    }
}
