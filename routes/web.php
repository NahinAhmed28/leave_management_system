<?php

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EmployeeDashboardController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\LeaveRequestController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;




// Authentication routes
Auth::routes();


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();



// Home route
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



//Route::middleware(['auth', 'employee'])->group(function () {
    // Route for employee dashboard
    Route::get('/employee/dashboard', [EmployeeDashboardController::class, 'index'])->name('employee.dashboard');

    // Resource routes for LeaveRequestController
    Route::resource('leave-requests', LeaveRequestController::class)->except(['index', 'store']);

    // Route for storing leave requests
    Route::post('/leave-requests', [LeaveRequestController::class, 'store'])
        ->name('leave_requests.store');

    // Route for listing leave requests
    Route::get('/leave-requests', [LeaveRequestController::class, 'index'])
        ->name('leave_requests.index');
//});

//Route::middleware(['auth', 'admin'])->group(function () {
    // Resource routes for RoleController
    Route::resource('roles', RoleController::class);

    // Resource routes for UserController
    Route::resource('users', UserController::class);

    // Route for admin dashboard
    Route::get('/admin/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
//});





Route::get('/clear', function() {

    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear');
    Artisan::call('route:clear');

    return "Cleared!";

});