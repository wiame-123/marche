<?php
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProcurmentController;
use App\Http\Controllers\FournisseurController;
use App\Http\Controllers\DepartementController;
use App\Http\Controllers\BudjetController;
use App\Http\Controllers\AppeloffreController;
use Illuminate\Support\Facades\Route;


Route::get('wiame', [wiameController::class, 'wiame'])->name('wiame.index'); //
//Route::get('procurments/create', [ProcurmentController::class, 'create'])->name('procurments.create'); // Show create form
Route::resource('procurments', ProcurmentController::class);
Route::resource('fournisseurs', FournisseurController::class);
Route::resource('departements', DepartementController::class);
Route::resource('budjets', BudjetController::class);
Route::resource('appeloffres', AppeloffreController::class);

//Route::get('/wiames', function () {
 //   return view('wiame'); //wiame ici cest le nom de la view
//});
Route::get('/marches', function () {
    return view('marches.index');
});
Route::get('/', function () {
    return view('welcome');
});
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
