<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

final class BlogPost extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'published'
    ]; // prevents a 'post' call to BlogPost from allowing passing of any other values.  This step happens after the request validation

    protected $casts = [
        'published' => 'boolean',   // casting a boolean, because the database will return the 'published' column as a tinyint(1). Thus, casting ensures PHP change it from a 1 or 0 to true or false
    ];
}
