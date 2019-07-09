<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('list_blogs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('blog_id')->nullable();
            $table->string('subject')->nullable();
            $table->string('post_by')->nullable();
            $table->string('title')->nullable();
            $table->string('article')->nullable();
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
        Schema::dropIfExists('list_blogs');
    }
}
