<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddToSlugToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::table('posts', function (Blueprint $table) {
            //
            $table->string('slug')->unique()->after('body')->nullable();
           
        });
        Schema::table('list_cars', function (Blueprint $table) {
            //
            $table->string('slug')->unique()->after('model')->nullable();
           
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('list_cars', function (Blueprint $table) {
            //
            $table->dropColumn('slug');
        });
        Schema::table('posts', function (Blueprint $table) {
            //
            $table->dropColumn('slug');
        
        });
    }
        
}
