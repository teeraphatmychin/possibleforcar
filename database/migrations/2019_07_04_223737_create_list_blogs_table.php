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
            $table->string('blog_id');
            $table->string('subject_blog');
            $table->string('post_by_blog');
            $table->string('title_blog');
            $table->string('article_blog');
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
