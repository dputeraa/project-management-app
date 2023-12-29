<?php

use App\Http\Controllers\DepartementController;
use App\Http\Controllers\DirectorController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\PositionController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\SupervisorController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
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

// DEPARTEMENT
Route::post('departement', [DepartementController::class, 'store']); //create
Route::get('departement', [DepartementController::class, 'index']);
Route::get('departement/create', [DepartementController::class, 'create']);
Route::get('departement/{id}/edit', [DepartementController::class, 'edit']);
Route::patch('departement/{id}', [DepartementController::class, 'update']); //update
Route::get('departement/{id}/delete', [DepartementController::class, 'destroy']); //delete

// POSITION
Route::post('position', [PositionController::class, 'store']); //create
Route::get('position', [PositionController::class, 'index']);
Route::get('position/create', [PositionController::class, 'create']);
Route::get('position/{id}/edit', [PositionController::class, 'edit']);
Route::patch('position/{id}', [PositionController::class, 'update']); //update
Route::get('position/{id}/delete', [PositionController::class, 'destroy']); //delete

// STATUS
Route::post('status', [StatusController::class, 'store']); //create
Route::get('status', [StatusController::class, 'index']);
Route::get('status/create', [StatusController::class, 'create']);
Route::get('status/{id}/edit', [StatusController::class, 'edit']);
Route::patch('status/{id}', [StatusController::class, 'update']); //update
Route::get('status/{id}/delete', [StatusController::class, 'destroy']); //delete

// PROJECT
Route::post('project', [ProjectController::class, 'store']); //create
Route::get('project', [ProjectController::class, 'index']);
Route::get('project/create', [ProjectController::class, 'create']);
Route::get('project/{id}/edit', [ProjectController::class, 'edit']);
Route::patch('project/{id}', [ProjectController::class, 'update']); //update
Route::get('project/{id}/delete', [ProjectController::class, 'destroy']); //delete

// TASK
Route::post('task', [TaskController::class, 'store']); //create
Route::get('task', [TaskController::class, 'index']);
Route::get('task/create', [TaskController::class, 'create']);
Route::get('task/{id}/edit', [TaskController::class, 'edit']);
Route::patch('task/{id}', [TaskController::class, 'update']); //update
Route::get('task/{id}/delete', [TaskController::class, 'destroy']); //delete

// ADMIN
Route::post('user', [UserController::class, 'store']); //create
Route::get('user', [UserController::class, 'index']);
Route::get('user/create', [UserController::class, 'create']);
Route::get('user/{id}/edit', [UserController::class, 'edit']);
Route::patch('user/{id}', [UserController::class, 'update']); //update
Route::get('user/{id}/delete', [UserController::class, 'destroy']); //delete

// DIRECTOR
Route::post('director', [DirectorController::class, 'store']); //create
Route::get('director', [DirectorController::class, 'index']);
Route::get('director/create', [DirectorController::class, 'create']);
Route::get('director/{id}/edit', [DirectorController::class, 'edit']);
Route::patch('director/{id}', [DirectorController::class, 'update']); //update
Route::get('director/{id}/delete', [DirectorController::class, 'destroy']); //delete

// MANAGER
Route::post('manager', [ManagerController::class, 'store']); //create
Route::get('manager', [ManagerController::class, 'index']);
Route::get('manager/create', [ManagerController::class, 'create']);
Route::get('manager/{id}/edit', [ManagerController::class, 'edit']);
Route::patch('manager/{id}', [ManagerController::class, 'update']); //update
Route::get('manager/{id}/delete', [ManagerController::class, 'destroy']); //delete

// SUPERVISOR
Route::post('supervisor', [SupervisorController::class, 'store']); //create
Route::get('supervisor', [SupervisorController::class, 'index']);
Route::get('supervisor/create', [SupervisorController::class, 'create']);
Route::get('supervisor/{id}/edit', [SupervisorController::class, 'edit']);
Route::patch('supervisor/{id}', [SupervisorController::class, 'update']); //update
Route::get('supervisor/{id}/delete', [SupervisorController::class, 'destroy']); //delete

// EMPLOYEE
Route::post('employee', [EmployeeController::class, 'store']); //create
Route::get('employee', [EmployeeController::class, 'index']);
Route::get('employee/create', [EmployeeController::class, 'create']);
Route::get('employee/{id}/edit', [EmployeeController::class, 'edit']);
Route::patch('employee/{id}', [EmployeeController::class, 'update']); //update
Route::get('employee/{id}/delete', [EmployeeController::class, 'destroy']); //delete
