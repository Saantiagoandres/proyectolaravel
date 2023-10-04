<?php
use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Support\Facades\Route;

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

/*Route::get('/', function () {
    return view('welcome');
});
*/


// Route::get('users', [UserController::class, 'index'])->name('users.index');
// Route::post('users', [UserController::class, 'store'])->name('users.store');
// Route::get('users/create', [UserController::class, 'create'])->name('users.create');
// Route::delete('user/{user}', [CursoController::class, 'destroy'])->name('user.destroy');
// Route::get('users/{user}', [CursoController::class, 'show'])->name('user.show');


Route::resource('users', UserController::class);
Route::resource('roles', RoleController::class);
