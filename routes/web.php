<?php

use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;
use App\Models\Employee;
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

Route::get('/index',[EmployeeController::class,'addEmployee']);

Route::post('/create-employee',[EmployeeController::class,'createEmployee'])->name('employee.create');

Route::get('/employees',[EmployeeController::class,'getEmployee'])->name('employees');

Route::get('/edit/{id}', [EmployeeController::class, 'Edit']);

Route::post('/update/{id}', [EmployeeController::class, 'Update']);

Route::get('/delete-employee/{id}',[EmployeeController::class,'deleteEmployee']);