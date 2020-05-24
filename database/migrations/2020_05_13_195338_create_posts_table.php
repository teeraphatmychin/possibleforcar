<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->longtext('title')->nullable();;
            $table->longtext('body')->nullable();;
            $table->string('model')->nullable();;
            $table->string('year_model')->nullable();
            $table->string('price')->nullable();
            $table->string('sum_price')->nullable();
            $table->string('image')->nullable();
            $table->string('type')->nullable();
            $table->string('engine')->nullable();
            $table->string('conditions')->nullable();
            $table->string('status_car')->nullable();
            $table->unsignedbigInteger('post_by_id')->nullable();
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
        Schema::dropIfExists('posts');
    }
}
