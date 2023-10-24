<?php

use App\Http\Controllers\ProfileController;
use App\Models\Item_Condition;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\ItemConditionController;
use App\Models\Category;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [FormController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::get('/create', function () {
    $categories = Category::all();
    $conditions = Item_Condition::all();
    return view('create', compact('categories', 'conditions'));
})->middleware(['auth', 'verified'])->name('create');

Route::get('/listing',  [FormController::class, 'showListing'])
    ->middleware(['auth', 'verified'])
    ->name('listing');

Route::post('/forms', [FormController::class, 'store']);
Route::get('/form/{id}/edit', [FormController::class, 'edit'])->name('form.edit');
Route::delete('/form/{id}', [FormController::class, 'destroy'])->name('form.destroy');
Route::put('/form/{id}', [FormController::class, 'update'])->name('form.update');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
