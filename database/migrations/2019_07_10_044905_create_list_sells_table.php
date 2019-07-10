<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListSellsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('list_sells', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('sell_name')->nullable();
            $table->string('sell_phone')->nullable();
            $table->string('ID_line')->nullable();
            $table->string('showroom')->nullable();
            $table->string('province')->nullable();
            $table->string('image')->nullable();
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
        Schema::dropIfExists('list_sells');
    }
}
