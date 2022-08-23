<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'title',
        'resume',
        'description',
        'place',
        'address',
        'date',
        'time',
        'img',
        'max_participants',
    ];
}
