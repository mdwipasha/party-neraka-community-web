<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Event extends Model
{
    use HasFactory;
    protected $table = 'events';
    protected $fillable = [
        'image',
        'title',
        'description',
        'time',
        'start_date',
        'end_date',
        'location',
    ];
}
