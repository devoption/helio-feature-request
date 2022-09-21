<?php

use Illuminate\Support\Facades\Route;

Route::prefix('api/v1')->group(function() {

    Route::get('features', function() {
        return 'Hey';
    });

    Route::get('feature/{id}', function($id) {
        return 'Hey';
    });

});