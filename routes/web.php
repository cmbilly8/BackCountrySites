<?php

use App\Http\Controllers\SiteController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Site;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Gets all recent sites
Route::get('/', [SiteController::class, 'index']);

// Show create site form
Route::get('/sites/create', [SiteController::class, 'create']);

//Get one site. MAKE SURE THIS IS BELOW THE CREATE SITE ROUTE OR ELSE IT TRIES TO PARSE CREATE AS A SITE!!!
Route::get('/sites/{site}', [SiteController::class, 'show']);
