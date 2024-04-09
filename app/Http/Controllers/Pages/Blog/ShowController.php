<?php

declare(strict_types=1);

namespace App\Http\Controllers\Pages\Blog;

use App\Models\BlogPost;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

final class ShowController
{
    public function __invoke(Request $request, BlogPost $blogpost): View
    {
        return view('pages.blog.show', [
            'blogpost' => $blogpost,
        ]);
    }
}
