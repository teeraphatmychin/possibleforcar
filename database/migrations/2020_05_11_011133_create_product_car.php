<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductCar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_car', function (Blueprint $table) {
            $table->bigIncrements('product_id');
            $table->string('product_name');
            $table->string('product_brand');
            $table->float('product_price');
            $table->string('product_engine');
            $table->string('product_year');
            $table->string('product_title');
            $table->string('product_detail');
            $table->string('product_image');
            $table->string('product_sale_partner');
            $table->integer('product_quantity');
            $table->enum('product_status',['0','1']); 
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
        Schema::dropIfExists('product_car');
    }
}
