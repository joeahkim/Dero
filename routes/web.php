<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\RoleMiddleware;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\SuperAdmin\CarController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\PageController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/pages/homes', [PageController::class, 'homes'])->name('homes');
Route::get('/pages/cars', [PageController::class, 'cars'])->name('cars');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Super admin routes
// Super-admin routes
Route::middleware(['auth', 'role:super-admin'])->group(function () {
    Route::get('/super-admin/dashboard', function () {
        return view('auth.super-admin.dashboard');  // Replace with your actual super-admin dashboard view
    })->name('super-admin.dashboard');
});

// Admin routes
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('auth.admin.dashboard');  // Replace with your actual admin dashboard view
    })->name('admin.dashboard');
});



Route::get('/admin/login', [AuthenticatedSessionController::class, 'create'])->name('admin.login');
Route::post('/admin/login', [AuthenticatedSessionController::class, 'store'])->name('admin.login.submit');
Route::post('/admin/logout', [AuthenticatedSessionController::class, 'destroy'])->name('admin.logout');
Route::middleware('auth')->get('/admin/dashboard', [BookingController::class, 'create'])->name('admin.dashboard');
Route::middleware('auth')->post('/bookings', [BookingController::class, 'store'])->name('bookings.store');
Route::middleware('auth')->patch('/bookings/{booking}/return', [BookingController::class, 'markReturned'])->name('bookings.markReturned');
Route::middleware('auth')->get('/clients/create', [ClientController::class, 'create'])->name('clients.create');
Route::middleware('auth')->post('/clients', [ClientController::class, 'store'])->name('clients.store');
Route::middleware('auth')->get('/bookings/pending-returns', [BookingController::class, 'pendingReturns'])->name('bookings.pendingReturns');
Route::middleware('auth')->patch('/bookings/{booking}/mark-returned-with-checkbox', [BookingController::class, 'markReturnedWithCheckbox'])->name('bookings.markReturnedWithCheckbox');



Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');


// Super Admin Routes
Route::middleware(['auth', 'role:super-admin'])->prefix('super-admin')->name('super-admin.')->group(function () {
    Route::get('/cars/create', [CarController::class, 'create'])->name('cars.create');
    Route::post('/cars', [CarController::class, 'store'])->name('cars.store');
    Route::get('/cars', [CarController::class, 'index'])->name('cars.index');
    Route::get('/cars/pending-returns', [CarController::class, 'pendingReturns'])->name('cars.pending-returns');
    Route::patch('/bookings/{booking}/mark-returned', [BookingController::class, 'markReturned'])->name('bookings.markReturned');
    Route::get('/admins/create', [AdminController::class, 'create'])->name('admins.create');
    Route::post('/admins', [AdminController::class, 'store'])->name('admins.store');
    Route::get('/clients', [ClientController::class, 'allclients'])->name('clients.allclients');
    Route::get('/cars/all', [CarController::class, 'forAllCars'])->name('cars.all-cars');
    Route::post('/logout', [App\Http\Controllers\Auth\AuthenticatedSessionController::class, 'destroy'])->name('logout');
});

// General routes
Route::get('/sales-data', [SalesController::class, 'getSalesData']);
Route::get('/client-data', [ClientController::class, 'getFilteredClients'])->name('client.data');
Route::get('/bookings-data', [BookingController::class, 'getBookings']);
Route::get('/available-cars', [CarController::class, 'available'])->name('cars.available');


require __DIR__ . '/auth.php';
