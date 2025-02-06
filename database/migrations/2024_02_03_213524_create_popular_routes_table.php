<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('popular_routes', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('image');
            $table->string('location'); 
            $table->string('type'); 
            $table->integer('days'); 
            $table->decimal('amount', 10, 2); 
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
        Schema::dropIfExists('popular_routes');
    }
};
