<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->dateTime('start'); 
            $table->dateTime('end');   
            $table->string('location');
            $table->timestamps(); 
        });
    }

    public function down()
    {
        Schema::dropIfExists('events');
    }
}
