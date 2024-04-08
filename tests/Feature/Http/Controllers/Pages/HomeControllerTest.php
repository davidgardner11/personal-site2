<?php

declare(strict_types=1);

use App\Http\Controllers\Pages\HomeController;
use function Pest\Laravel\get;

it('can load the home page', function (): void {
    get(
        uri: action(HomeController::class),
    )->assertStatus(200);

});

it('loads the correct view', function (): void {
    get(
        uri: action(HomeController::class),

    )->assertStatus(200)->assertViewIs(
        value: 'pages.home',
    );

});

it('passes the message to be displayed', function (): void {
    get(
        uri: action(HomeController::class),

    )->assertStatus(200)->assertSeeText(
        value: 'I created this site with PHP and Laravel',
    );

});

/* test('example', function () {
    $response = $this->get('/');

    $response->assertStatus(200);
});
 */