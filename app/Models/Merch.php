<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Merch extends Model
{
    use HasFactory;
    protected $table = 'merches'; 
    protected $fillable = [
        'name',
        'image',
        'description',
        'price'
    ];
}
