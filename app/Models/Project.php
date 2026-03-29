<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
    'title', 'author', 'description', 'thumbnail', 'file_3d', 'youtube_url',
    ];
}
