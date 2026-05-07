<?php

use App\Http\Controllers\QuoteController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
| This route is part of the insurance quotes microservice.
| It handles GET requests to fetch a single quote by its ID.
*/

// Endpoint to retrieve a specific insurance quote by ID
Route::get('/quote/{id}', [QuoteController::class, 'show']);
