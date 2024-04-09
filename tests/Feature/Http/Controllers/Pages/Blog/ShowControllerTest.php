<?php

declare(strict_types=1);

use App\Http\Controllers\Pages\Blog\ShowController;
use App\Models\BlogPost;

use function Pest\Laravel\get;

// check if blogpost does NOT exist 
it('returns not found (404) exception if the post does not exist', function (): void {
    get(
        uri: action(ShowController::class, 1234),     // 'blog/1234 route 
    )->assertStatus(404);    // 404 is "not found" code
});

// check if blogpost DOES exist 
it('loads the page when post does exist (200)', function (): void {
    $blogpost = BlogPost::factory()->create();

    get(
        uri: action(ShowController::class, $blogpost->id),     // 'blog/1234 route 
    )->assertStatus(200);    // 200 is "success" code
});

// check if correct view is loaded
it('loads the correct view (200)', function (): void {
    $blogpost = BlogPost::factory()->create();

    get(
        uri: action(ShowController::class, $blogpost->id),     // 'blog/1234 route 
    )->assertStatus(200)
    ->assertViewIs(
        value: 'pages.blog.show',   // loading correct view
    );    // 200 is "success" code
});

// check if blog post is passed to the view
it('passes the blog post to the view (200)', function (): void {
    $blogpost = BlogPost::factory()->create();

    get(
        uri: action(ShowController::class, $blogpost->id),     
    )->assertStatus(200 // route call is successful
    )->assertViewIs(    // loading the correct view
        value: 'pages.blog.show',
    )->assertSeeText(   // content exists
        value: $blogpost->title,
    )->assertViewHas(   // passing correct 'blogpost' value
        key: ['blogpost']
    );
});