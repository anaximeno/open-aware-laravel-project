<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UsersController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\ProjectRolesController;
use App\Http\Controllers\LikesController;
use App\Http\Controllers\DonationsController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('v1')->group(function() {
    Route::apiResource('users', UsersController::class);
    Route::apiResource('projects', ProjectsController::class);
    Route::apiResource('roles', ProjectRolesController::class);
    Route::apiResource('likes', LikesController::class);
    Route::apiResource('donations', DonationsController::class);

    Route::get('users/{id}/projects', [UsersController::class, 'getProjects']);
    Route::get('users/{id}/roles', [UsersController::class, 'getProjectRoles']);
    Route::get('users/{id}/likes', [UsersController::class, 'getLikes']);
    Route::get('users/{id}/donations', [UsersController::class, 'getDonations']);

    Route::get('projects/{id}/creator', [ProjectsController::class, 'creator']);
    Route::get('projects/{id}/donations', [ProjectsController::class, 'getDonations']);
    Route::get('projects/{id}/likes', [ProjectsController::class, 'getLikes']);
    Route::get('projects/{id}/roles', [ProjectsController::class, 'getRoles']);
});
