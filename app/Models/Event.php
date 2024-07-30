<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = ['name', 'event_datetime', 'location']; // Adjust the attributes based on your database schema

    // Optionally, if you have timestamps
    public $timestamps = true;
}
