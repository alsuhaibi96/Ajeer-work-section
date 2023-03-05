<?php

use Illuminate\Support\Facades\Route;
/* The customized controller for CMS*/
use App\Http\Controllers\CMS\MainPageController;

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


/** All CMS Routes */
Route::get('/',[MainPageController::class,'index']);
// Route::get('/',[HeroSectionController::class,'index']);
// Route::get('/',[ServicesController::class,'index']);
// Route::get('/',[PrepareAndOrganizeController::class,'index']);
// Route::get('/',[PackagesController::class,'index']);
// Route::get('/',[FooterController::class,'index']);



