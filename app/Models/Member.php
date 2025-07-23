<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $table = 'members';
    protected $fillable = [
        'name',
        'bio',
        'image',
        'instagram',
        'youtube',
        'channel_id'
    ];
}
