<?php

declare(strict_types=1);

namespace App\Http\Controllers\Pages\Blog;

use Illuminate\Http\Request;

final class ShowController
{
    public function __invoke(Request $request)
    {
        dd($request);
    }
}
