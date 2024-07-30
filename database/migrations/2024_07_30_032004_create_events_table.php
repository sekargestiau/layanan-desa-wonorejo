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
            $table->dateTime('event_datetime'); // Store combined date and time
            $table->string('location');
            $table->timestamps(); // If you use timestamps
        });
    }

    public function down()
    {
        Schema::dropIfExists('events');
    }
}
