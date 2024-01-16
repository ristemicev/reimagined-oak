<?php

use App\Models\Comment;
use App\Models\Report;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTables extends Migration
{
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            // this will create an id, a "published" column, and soft delete and timestamps columns
            createDefaultTableFields($table);

            $table->integer('position')->unsigned()->nullable();
            $table->unsignedBigInteger('report_id')->nullable();
            $table->foreign('report_id')->references('id')->on('reports');

            // add those 2 columns to enable publication timeframe fields (you can use publish_start_date only if you don't need to provide the ability to specify an end date)
            // $table->timestamp('publish_start_date')->nullable();
            // $table->timestamp('publish_end_date')->nullable();
        });

        Schema::create('comment_translations', function (Blueprint $table) {
            createDefaultTranslationsTableFields($table, 'comment');
            $table->string('title', 200)->nullable();
        });

        Schema::create('comment_slugs', function (Blueprint $table) {
            createDefaultSlugsTableFields($table, 'comment');
        });

    }

    public function down()
    {
        Schema::dropIfExists('comment_translations');
        Schema::dropIfExists('comment_slugs');
        Schema::dropIfExists('comments');
    }
}
