<?php

use App\Http\Controllers\RecordController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:sanctum')->group(function () {
    Route::post('/match', [RecordController::class, 'find']);
    Route::get('/records/{record}', [RecordController::class, 'show'])->can('view', 'record');
});
