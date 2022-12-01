<?php

use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\BlogsController;
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
Route::get('/about', function () {
    return view('about');
});


//index all cocktails
Route::get('/cocktails', [CocktailsController::class, 'index'])->name('drink');

//show create form for cocktail
Route::get('/cocktail/create', [CocktailsController::class, 'create'])->middleware('auth');

//store cocktail data
Route::post('/cocktail', [CocktailsController::class, 'store'])->middleware('auth');

//show cocktail edit
Route::get('/cocktail/{cocktail}/edit', [CocktailsController::class, 'edit'])->middleware('auth');

//Edit submit to Update
Route::put('/cocktail/{cocktail}', [CocktailsController::class, 'update'])->middleware('auth');

//Delete submit to Update
Route::delete('/cocktail/{cocktail}', [CocktailsController::class, 'destroy'])->middleware('auth');

//show single cocktail
Route::get('/cocktail/{cocktail}', [CocktailsController::class, 'show']);



//index all foods
Route::get('/foods', [FoodsController::class, 'index'])->name('food');

//show create form for Food
Route::get('/food/create', [FoodsController::class, 'create'])->middleware('auth');

//store food data
Route::post('/food', [FoodsController::class, 'store'])->middleware('auth');

//show food edit
Route::get('/food/{food}/edit', [FoodsController::class, 'edit'])->middleware('auth');

//Edit submit to Update
Route::put('/food/{food}', [FoodsController::class, 'update'])->middleware('auth');

//Delete submit to Update
Route::delete('/food/{food}', [FoodsController::class, 'destroy'])->middleware('auth');

//show single food
Route::get('/food/{food}', [FoodsController::class, 'show']);

//show all blogs
Route::get('/blog', [BlogsController::class, 'index'])/*->middleware('auth','isAdmin')*/;
//show create form for blog
Route::get('/blog/create', [BlogsController::class, 'create'])->middleware('auth');

//store blog data
Route::post('/blog', [BlogsController::class, 'store'])->middleware('auth');


//show food edit
Route::get('/blog/{blog}/edit', [BlogsController::class, 'edit'])->middleware('auth');

//Edit submit to Update
Route::put('/blog/{blog}', [BlogsController::class, 'update'])->middleware('auth');

//Delete submit to Update
Route::delete('/blog/{blog}', [BlogsController::class, 'destroy'])->middleware('auth');

//show single food
Route::get('/blog/{blog}', [BlogsController::class, 'show']);

Route::get('/dashboard', function () {
    return view('Dashboard.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
//index all users
Route::get('/auth/users', [AdminDashboardController::class, 'users'])->middleware('auth', 'isAdmin');
//index all cocktails
Route::get('/admin/cocktails', [AdminDashboardController::class, 'index'])->middleware('auth', 'isAdmin');
//index all foods
Route::get('/admin/foods', [AdminDashboardController::class, 'food'])->middleware('auth', 'isAdmin');
//index all blogs
Route::get('/admin/blogs', [AdminDashboardController::class, 'blog'])->middleware('auth', 'isAdmin');

//Delete submit to Update
Route::delete('/auth/user/{user}', [AdminDashboardController::class, 'destroy'])->middleware('auth', 'isAdmin');
//Delete submit to Update
Route::delete('/auth/blog/{blog}', [AdminDashboardController::class, 'deleteBlog'])->middleware('auth', 'isAdmin');
//Delete submit to Update
Route::delete('/auth/cocktail/{cocktail}', [AdminDashboardController::class, 'deleteCocktail'])->middleware('auth', 'isAdmin');
//Delete submit to Update
Route::delete('/auth/food/{food}', [AdminDashboardController::class, 'deleteFood'])->middleware('auth', 'isAdmin');

Route::get('auth/google', [GoogleAuthController::class, 'redirect'])
    ->name('google-auth');



Route::get('/auth/google/callback', [GoogleAuthController::class, 'CallbackGoogle']);

require __DIR__ . '/auth.php';
