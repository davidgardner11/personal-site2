<?php

declare(strict_types=1);

namespace App\Http\Controllers\Pages;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

final class HomeController
{

    public function __invoke(Request $request): View
    {
        return view('pages.home', [
            'message' => 'I created this site with PHP and Laravel'
        ]);
    }
}
