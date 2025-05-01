<?php

use Illuminate\Support\Facades\Route;
use Modules\UjianOnline\Http\Controllers\UjianOnlineController;

Route::middleware(['auth:sanctum'])->prefix('v1')->group(function () {
    Route::apiResource('ujianonlines', UjianOnlineController::class)->names('ujianonline');
});
