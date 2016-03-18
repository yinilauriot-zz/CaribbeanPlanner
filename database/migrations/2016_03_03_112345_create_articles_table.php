<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('event_id')->nullable();
            $table->string('title', 50);
            $table->text('content_1');
            $table->text('content_2');
            $table->text('content_3');
            $table->text('content_4');
            $table->enum('status', ['published', 'unpublished'])->default('published');
            $table->foreign('event_id')->references('id')->on('events')->onDelete('SET NULL');
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
        Schema::drop('articles');
    }
}
