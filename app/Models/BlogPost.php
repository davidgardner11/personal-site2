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
    ]; // prevents a 'post' call to BlogPost from allowing passing of any other values.  This step happens after the request validation
}
