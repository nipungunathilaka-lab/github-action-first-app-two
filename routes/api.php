
<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Usercontroller;

Route::get('/test', function () {
    return response()->json([
        'message' => 'Hello GitHub Actions',
    ]);
});

Route::get('/users', [Usercontroller::class, 'index']);
