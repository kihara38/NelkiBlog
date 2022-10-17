<?php

use App\Http\Controllers\CocktailsController;
use App\Http\Controllers\FoodsController;
use App\Http\Controllers\GoogleAuthController;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpKernel\Exception\GoneHttpException;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/blog', function () {
    return view('blog.index');
});

//index all cocktails
Route::get('/cocktails', [CocktailsController::class,'index'])->name('drink');

//show create form for cocktail
Route::get('/cocktail/create', [CocktailsController::class,'create']);

//store cocktail data
Route::post('/cocktail', [CocktailsController::class,'store']);

//index all foods
Route::get('/foods', [FoodsController::class,'index'])->name('food');

//show create form for Food
Route::get('/food/create', [FoodsController::class,'create']);

//store cocktail data
Route::post('/food', [FoodsController::class,'store']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('auth/google', [GoogleAuthController::class, 'redirect'])
->name('google-auth');

//show single cocktail
Route::get('/cocktail/{cocktail}',[CocktailsController::class,'show']);

//show single food
Route::get('/food/{food}',[FoodsController::class,'show']);

Route::get('/auth/google/callback', [GoogleAuthController::class, 'CallbackGoogle']);

require __DIR__.'/auth.php';
