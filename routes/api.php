<?php

use App\Http\Controllers\API\AmenityController;
use App\Http\Controllers\API\CityController;
use App\Http\Controllers\API\CountryController;
use App\Http\Controllers\Api\LocationController;
use App\Http\Controllers\API\ProjectController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\ApiAuthController;
use App\Http\Controllers\Api\PropertyController;


// Public Routes
Route::post('/register', [ApiAuthController::class, 'register']);
Route::post('/login', [ApiAuthController::class, 'login']);
Route::post('/forgot-password', [ApiAuthController::class, 'forgotPassword']);

// Protected Routes (Require Authentication)
Route::middleware(['auth:sanctum'])->group(function () {
    Route::get('/user', [ApiAuthController::class, 'getUserData']);
    Route::post('/logout', [ApiAuthController::class, 'logout']);

       // Admin Routes role 1
       Route::middleware(['role:1'])->group(function () {
        // Route::get('/admin/dashboard', function () {
        //     return response()->json(['message' => 'Welcome, Admin!']);
        // });

        //properties
        Route::get('/properties', [PropertyController::class, 'list']);
        Route::get('/properties/{id}', [PropertyController::class, 'show']);
        Route::post('/properties', [PropertyController::class, 'store']);
        Route::put('/properties/{id}', [PropertyController::class, 'update']);
        Route::delete('/properties/{id}', [PropertyController::class, 'destroy']);

        //projects
        Route::get('/projects', [ProjectController::class, 'list']);
        Route::get('/projects/{id}', [ProjectController::class, 'show']);
        Route::post('/projects', [ProjectController::class, 'store']);
        Route::put('/projects/{id}', [ProjectController::class, 'update']);
        Route::delete('/projects/{id}', [ProjectController::class, 'destroy']);

        //countries
        Route::get('/countries', [CountryController::class, 'list']);
        Route::post('/countries', [CountryController::class, 'store']);
        Route::delete('/countries/{id}', [CountryController::class, 'destroy']);

         //cities
         Route::get('/cities', [CityController::class, 'list']);
         Route::post('/cities', [CityController::class, 'store']);
         Route::delete('/cities/{id}', [CityController::class, 'destroy']);

        //amenities
        Route::get('/amenities', [AmenityController::class, 'list']);
        Route::post('/amenities', [AmenityController::class, 'store']);
        Route::post('/amenities/{id}', [AmenityController::class, 'update']);
        Route::delete('/amenities/{id}', [AmenityController::class, 'destroy']);

        //locations
        Route::get('/locations', [LocationController::class, 'list']);
        Route::post('/locations', [LocationController::class, 'store']);
        Route::put('/locations/{id}', [LocationController::class, 'update']);
        Route::delete('/locations/{id}', [LocationController::class, 'destroy']);

    });

     // User Routes role 2
     Route::middleware(['role:2'])->group(function () {
        Route::get('/user/dashboard', function () {
            return response()->json(['message' => 'Welcome, User!']);
        });
    });

    // Provider Routes role 3
    Route::middleware(['role:3'])->group(function () {
        Route::get('/provider/dashboard', function () {
            return response()->json(['message' => 'Welcome, Provider!']);
        });
    });


});
