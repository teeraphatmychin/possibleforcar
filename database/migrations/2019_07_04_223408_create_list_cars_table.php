<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('list_cars', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('brand');
            $table->string('model');
            $table->string('year_model')->nullable();
            $table->string('price')->nullable();
            $table->string('sum_price')->nullable();
            $table->string('image')->nullable();
            $table->string('type')->nullable();
            $table->string('engine')->nullable();
            $table->string('title')->nullable();
            $table->string('detail')->nullable();
            $table->string('status_car')->nullable();
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
        Schema::dropIfExists('list_cars');
    }
}
