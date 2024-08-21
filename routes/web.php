<?php

// routes/web.php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RtiMannualController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MurcynotificationController;
use App\Http\Controllers\OfficerController;
use App\Http\Controllers\CityInformationController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Admin\NotificationController;
use App\Http\Controllers\Admin\OrderController;

// Public routes
Route::get('/', function () {
    return view('home');
})->name('home');


Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth'])
    ->name('dashboard');


require __DIR__ . '/auth.php';

Route::get('/aboutUs', function () {
    return view('aboutUs');
})->name('aboutUs');


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/rtimannuals', [RtiMannualController::class, 'view'])->name('rtimannuals.view');
Route::get('/gallery', [ImageController::class, 'view'])->name('gallery.view');
Route::get('/orders', [OrderController::class, 'view'])->name('orders.view');
Route::get('/lang/{locale}', [App\Http\Controllers\LanguageController::class, 'switchLang'])->name('lang.switch');


// Authentication routes
Route::get('login', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [App\Http\Controllers\Auth\LoginController::class, 'login']);
Route::post('logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

Route::get('register', [App\Http\Controllers\Auth\RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [App\Http\Controllers\Auth\RegisterController::class, 'register']);





// Routes for authenticated users
Route::middleware('auth')->group(function () {
    Route::get('/admin/rtimannuals', [RtiMannualController::class, 'index'])->name('rtimannuals.index');
    Route::get('/admin/rtimannuals/create', [RtiMannualController::class, 'create'])->name('rtimannuals.create');
    Route::post('/admin/rtimannuals', [RtiMannualController::class, 'store'])->name('rtimannuals.store');
    Route::get('/admin/rtimannuals/{id}/edit', [RtiMannualController::class, 'edit'])->name('rtimannuals.edit');
    Route::put('/admin/rtimannuals/{id}', [RtiMannualController::class, 'update'])->name('rtimannuals.update');
    Route::delete('/admin/rtimannuals/{id}', [RtiMannualController::class, 'destroy'])->name('rtimannuals.destroy');

    Route::get('/admin/gallery', [ImageController::class, 'index'])->name('gallery.index');
    Route::post('/admin/gallery', [ImageController::class, 'store'])->name('gallery.store');


    Route::get('/admin/index', [MurcynotificationController::class, 'index'])->name('murcy.index');
    Route::get('/admin/create', [MurcynotificationController::class, 'create'])->name('murcy.create');
    Route::post('/admin/store', [MurcynotificationController::class, 'store'])->name('murcy.store');
    Route::get('/admin/show/{murcynotification}', [MurcynotificationController::class, 'show'])->name('murcy.show');
    Route::get('/admin/edit/{murcynotification}', [MurcynotificationController::class, 'edit'])->name('murcy.edit');
    Route::put('/admin/update/{murcynotification}', [MurcynotificationController::class, 'update'])->name('murcy.update');
    Route::delete('/admin/destroy/{murcynotification}', [MurcynotificationController::class, 'destroy'])->name('murcy.destroy');


    Route::get('/admin/officers', [OfficerController::class, 'index'])->name('officers.index');
    Route::get('/admin/officers/create', [OfficerController::class, 'create'])->name('officers.create');
    Route::post('/admin/officers', [OfficerController::class, 'store'])->name('officers.store');
    Route::get('/admin/officers/{officer}', [OfficerController::class, 'show'])->name('officers.show');
    Route::get('/admin/officers/{officer}/edit', [OfficerController::class, 'edit'])->name('officers.edit');
    Route::put('/admin/officers/{officer}', [OfficerController::class, 'update'])->name('officers.update');
    Route::delete('/admin/officers/{officer}', [OfficerController::class, 'destroy'])->name('officers.destroy');

    Route::get('/admin/CityInformation', [CityInformationController::class, 'index'])->name('cityinformation.index');
    Route::get('/admin/CityInformation/create', [CityInformationController::class, 'create'])->name('cityinformation.create');
    Route::post('/admin/CityInformation', [CityInformationController::class, 'store'])->name('cityinformation.store');
    Route::get('/admin/CityInformation/{CityInformation}', [CityInformationController::class, 'show'])->name('cityinformation.show');
    Route::get('/admin/CityInformation/{CityInformation}/edit', [CityInformationController::class, 'edit'])->name('cityinformation.edit');
    Route::put('/admin/CityInformation/{CityInformation}', [CityInformationController::class, 'update'])->name('cityinformation.update');
    Route::delete('/admin/CityInformation/{CityInformation}', [CityInformationController::class, 'destroy'])->name('cityinformation.destroy');

   Route::prefix('admin')->name('notifications.')->group(function () {
    Route::get('/notifications', [NotificationController::class, 'index'])->name('index');
    Route::get('/notifications/create', [NotificationController::class, 'create'])->name('create');
    Route::post('/notifications', [NotificationController::class, 'store'])->name('store');
    Route::get('/notifications/{notification}', [NotificationController::class, 'show'])->name('show');
    Route::get('/notifications/{notification}/edit', [NotificationController::class, 'edit'])->name('edit');
    Route::put('/notifications/{notification}', [NotificationController::class, 'update'])->name('update');
    Route::delete('/notifications/{notification}', [NotificationController::class, 'destroy'])->name('destroy');
});


  Route::prefix('admin')->name('orders.')->group(function () {
    Route::get('/orders', [OrderController::class, 'index'])->name('index');
     Route::get('/orders/create', [OrderController::class, 'create'])->name('create');
    Route::post('/orders', [OrderController::class, 'store'])->name('store');
    Route::get('/orders/{order}', [OrderController::class, 'show'])->name('show');
    Route::get('/orders/{order}/edit', [OrderController::class, 'edit'])->name('edit');
    Route::put('/orders/{order}', [OrderController::class, 'update'])->name('update');
    Route::delete('/orders/{order}', [OrderController::class, 'destroy'])->name('destroy');
      
  });

});
