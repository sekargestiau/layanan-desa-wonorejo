<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = ['name', 'start_datetime', 'end_datetime', 'location'];

    // Optionally, if you have timestamps
    public $timestamps = true;
}
