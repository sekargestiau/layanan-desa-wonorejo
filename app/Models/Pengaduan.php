<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengaduan extends Model
{
    use HasFactory;
    protected $table = 'pengaduan';

    protected $fillable = [
        'nik',
        'name',
        'email',
        'phone',
        'title',
        'file_paths',
        'message',
    ];
}
