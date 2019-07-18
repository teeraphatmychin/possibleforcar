<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('list_sales', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('sale_name')->nullable();
            $table->string('sale_phone')->nullable();
            $table->string('sale_social')->nullable();
            $table->string('showroom')->nullable();
            $table->string('province')->nullable();
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
        Schema::dropIfExists('list_sales');
    }
}
