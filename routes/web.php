<?php

use Illuminate\Support\Facades\Route;

// A real HTML root rather than Laravel's stock welcome page: Mercya takes
// a best-effort screenshot of the deployed site, and this one proves at a
// glance which platform and runtime served the request.
Route::get('/', function () {
    return response()->view('mercya', [
        // Injected by LaravelEnvironmentStack from the Domain parameter -
        // if this renders, the platform's own environment wiring reached
        // the app.
        'domain' => env('MERCYA_DOMAIN', '(not set)'),
        'php' => PHP_VERSION,
        'laravel' => app()->version(),
        // Set by Bref's layer. Seeing "fpm" here is the proof that the
        // merged v3 layer started in web mode rather than function mode.
        'brefRuntime' => env('BREF_RUNTIME', '(not set)'),
    ]);
});

// Plain JSON, for scripted checks.
Route::get('/health', fn () => response()->json([
    'status' => 'healthy',
    'domain' => env('MERCYA_DOMAIN', '(not set)'),
    'php' => PHP_VERSION,
    'laravel' => app()->version(),
    'brefRuntime' => env('BREF_RUNTIME', '(not set)'),
]));
