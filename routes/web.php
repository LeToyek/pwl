<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CollegeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProgramController;
use Illuminate\Support\Facades\Route;

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

Route::get('/',[HomeController::class,'index']);
Route::get('/profile',[ProfileController::class,'index']);
Route::get('/college',[CollegeController::class,'index']);

// Route::get('/',[HomeController::class,'index']);
// Route::prefix('category')->group(function (){
//     Route::get('/marbel-edu-games', [ProductsController::class, 'marbel_edu_games']);
//     Route::get('/marbel-and-friends-kids-games', [ProductsController::class, 'marbel_and_friends_kids_games']);
//     Route::get('/riri-story-books', [ProductsController::class, 'riri_story_books']);
//     Route::get('/kolak-kids-songs', [ProductsController::class, 'kolak_kids_songs']);
//     Route::get('/', [ProductsController::class, 'index']);
// });
// Route::get("/news/{id}",[NewsController::class,"index"]);
// Route::prefix("program")->group(function(){
//     Route::get("kurir",[ProgramController::class,"showKurir"]);
//     Route::get("magang",[ProgramController::class,"showMagang"]);
//     Route::get("kunjungan-industri",[ProgramController::class,"showKunjunganIndustri"]);
// });
// Route::get("/about-us",[AboutController::class,"index"]);
// Route::resource("/contact-us",ContactController::class)->only(["index","store"]);