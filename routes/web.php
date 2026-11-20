
<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/health', function () {
    return response()->json([
        'status' => 'ok',
        'application' => 'laravel-angel',
        'timestamp' => now()->toIso8601String(),
    ]);
});
