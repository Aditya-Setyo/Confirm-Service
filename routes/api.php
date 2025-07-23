<?php
use Illuminate\Support\Facades\Route;

Route::post('/confirm', function () {
    sleep(rand(0, 3)); // simulasi delay 0-3 detik

    if (rand(1, 5) === 5) { // simulasi error 20% kasus
        return response()->json(['status' => 'error'], 500);
    }

    return response()->json(['status' => 'confirmed']);
});