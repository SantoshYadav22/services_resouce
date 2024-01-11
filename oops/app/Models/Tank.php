<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tank extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'shark_level',
        'image',
        'priority',
        'added_by',
        'is_active',
    ];
}
