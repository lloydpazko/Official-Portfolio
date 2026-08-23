<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'description',
        'image',
        'url',
        'technologies',
        'is_featured',
    ];

    protected $casts = [
        'is_featured' => 'boolean',
    ];
}
