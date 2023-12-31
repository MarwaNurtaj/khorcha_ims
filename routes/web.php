<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\IncomeController;
use App\Http\Controllers\IncomeCategoryController;
use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\ExpenseCategoryController;
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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

Route::get('ami', [WebsiteController::class, 'index']);

Route::get('dashboard', [AdminController::class, 'index']);

Route::get('dashboard/user', [UserController::class, 'index']);
Route::get('dashboard/user/add', [UserController::class, 'add']);
Route::get('dashboard/user/edit', [UserController::class, 'edit']);
Route::get('dashboard/user/view', [UserController::class, 'view']);
Route::get('dashboard/user/submit', [UserController::class, 'insert']);
Route::get('dashboard/user/softdelete', [UserController::class, 'soft_delete']);
Route::get('dashboard/user/update', [UserController::class, 'update']);
Route::get('dashboard/user/restore', [UserController::class, 'restore']);
Route::get('dashboard/user/delete', [UserController::class, 'delete']);

Route::get('dashboard/income', [IncomeController::class, 'index']);
Route::get('dashboard/income/add', [IncomeController::class, 'add']);
Route::get('dashboard/income/edit', [IncomeController::class, 'edit']);
Route::get('dashboard/income/view', [IncomeController::class, 'view']);
Route::get('dashboard/income/submit', [IncomeController::class, 'insert']);
Route::get('dashboard/income/update', [IncomeController::class, 'update']);
Route::get('dashboard/income/softdelete', [IncomeController::class, 'soft_delete']);
Route::get('dashboard/income/restore', [IncomeController::class, 'restore']);
Route::get('dashboard/income/delete', [IncomeController::class, 'delete']);

Route::get('dashboard/income/category', [IncomeCategoryController::class, 'index']);
Route::get('dashboard/income/category/add', [IncomeCategoryController::class, 'add']);
Route::get('dashboard/income/category/edit/{slug}', [IncomeCategoryController::class, 'edit']);
Route::get('dashboard/income/category/view/{id}', [IncomeCategoryController::class, 'view']);
Route::post('dashboard/income/category/submit', [IncomeCategoryController::class, 'insert']);
Route::post('dashboard/income/category/update/{slug}', [IncomeCategoryController::class, 'update']);
Route::get('dashboard/income/category/softdelete', [IncomeCategoryController::class, 'soft_delete']);
Route::get('dashboard/income/category/restore', [IncomeCategoryController::class, 'restore']);
Route::get('dashboard/income/category/delete', [IncomeCategoryController::class, 'delete']);

Route::get('dashboard/expense', [ExpenseController::class, 'index']);
Route::get('dashboard/expense/add', [ExpenseController::class, 'add']);
Route::get('dashboard/expense/edit', [ExpenseController::class, 'edit']);
Route::get('dashboard/expense/view', [ExpenseController::class, 'view']);
Route::get('dashboard/expense/submit', [ExpenseController::class, 'insert']);
Route::get('dashboard/expense/update', [ExpenseController::class, 'update']);
Route::get('dashboard/expense/softdelete', [ExpenseController::class, 'soft_delete']);
Route::get('dashboard/expense/restore', [ExpenseController::class, 'restore']);
Route::get('dashboard/expense/delete', [ExpenseController::class, 'delete']);

Route::get('dashboard/expense/category', [ExpenseCategoryController::class, 'index']);
Route::get('dashboard/expense/category/add', [ExpenseCategoryController::class, 'add']);
Route::get('dashboard/expense/category/edit', [ExpenseCategoryController::class, 'edit']);
Route::get('dashboard/expense/category/view', [ExpenseCategoryController::class, 'view']);
Route::get('dashboard/expense/category/submit', [ExpenseCategoryController::class, 'insert']);
Route::get('dashboard/expense/category/update', [ExpenseCategoryController::class, 'update']);
Route::get('dashboard/expense/category/softdelete', [ExpenseCategoryController::class, 'soft_delete']);
Route::get('dashboard/expense/category/restore', [ExpenseCategoryController::class, 'restore']);
Route::get('dashboard/expense/category/delete', [ExpenseCategoryController::class, 'delete']);




require __DIR__.'/auth.php';


