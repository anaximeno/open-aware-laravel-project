<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UsersController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\ProjectRolesController;

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

    Route::get('users/{id}/projects', [UsersController::class, 'getProjectsCreated']);
    Route::get('users/{id}/roles', [UsersController::class, 'getRolesOnProjects']);
    Route::get('users/{id}/likes', [UsersController::class, 'getLikesGivenToProjects']);
    Route::get('users/{id}/donations', [UsersController::class, 'getDonationsMadeToProjects']);

    Route::get('projects/{id}/creator', [ProjectsController::class, 'creator']);
    Route::get('projects/{id}/donations', [ProjectsController::class, 'getDonationsReceived']);
    Route::get('projects/{id}/likes', [ProjectsController::class, 'getLikesReceived']);
    Route::get('projects/{id}/roles', [ProjectsController::class, 'getRoles']);
});
