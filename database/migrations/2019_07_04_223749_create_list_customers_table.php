<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('list_customers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('customer_name')->nullable();
            $table->string('customer_phone')->nullable();
            $table->string('customer_social')->nullable();
            $table->string('brand')->nullable();
            $table->string('model')->nullable();
            $table->string('customer_status')->nullable();
            $table->string('sell_name')->nullable();
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
        Schema::dropIfExists('list_customers');
    }
}
