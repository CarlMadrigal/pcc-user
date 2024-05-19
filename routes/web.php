<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RedirectController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\CarabaoController;
use App\Http\Controllers\NeedController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\ConcernController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [RedirectController::class, 'redirectToHomepage']);

Route::get('/portal', [RedirectController::class, 'redirectToPortalpage']);

Route::post('/login', [LoginController::class, 'login']);

Route::get('/logout', [LoginController::class, 'logout']);

Route::get('/signin', [RedirectController::class, 'redirectToSignInpage']);

Route::get('/signup', [RedirectController::class, 'redirectToSignUppage']);

Route::post('/register', [RegisterController::class, 'register']);

Route::get('/carabao', [RedirectController::class, 'redirectToCarabaoPage']);

Route::get('/contracts', [RedirectController::class, 'redirectToContractsPage']);

Route::get('/files', [RedirectController::class, 'redirectToFilePage']);

Route::get('/carabao/{id}', [RedirectController::class, 'redirectToCarabaoDetailsPage']);

Route::get('/notification', [RedirectController::class, 'redirectToNotificationpage']);

Route::get('/delete/{id}', [NotificationController::class, 'delete']);

Route::get('/deleteall', [NotificationController::class, 'deleteAll']);

Route::get('/aboutUs', [RedirectController::class, 'redirectToAboutUspage']);

Route::get('/help', [RedirectController::class, 'redirectToHelppage']);

Route::get('/profile', [RedirectController::class, 'redirectToProfilepage']);

Route::post('/carabao/update', [CarabaoController::class, 'update']);

Route::post('/need/feed/update', [NeedController::class, 'updateFeed']);

Route::post('/need/water/update', [NeedController::class, 'updateWater']);

Route::post('/need/milk/update', [NeedController::class, 'updateMilk']);

Route::post('/need/vitamin/update', [NeedController::class, 'updateVitamin']);

Route::post('/concerns/create', [ConcernController::class, 'create']);
