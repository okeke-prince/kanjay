<?php

use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\LocationController;
use App\Http\Controllers\Admin\NewsletterController;
use App\Http\Controllers\Admin\ReviewController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\pageImagesController;
use App\Http\Livewire\AboutPage;
use App\Http\Livewire\ContactPage;
use App\Http\Livewire\HomePage;
use App\Http\Livewire\LocationDetails;
use App\Http\Livewire\PrivacyPolicy;
use App\Http\Livewire\ServiceDetails;
use App\Http\Livewire\ServicePage;
use App\Http\Livewire\Teams;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

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

Route::get('/', HomePage::class)->name('home');
Route::get('/about-us', AboutPage::class)->name('about');
Route::get('/contact-us', ContactPage::class)->name('contact');
Route::get('/services', ServicePage::class)->name('service');
Route::get('/services/{slug}', ServicePage::class)->name('service-id');
Route::get('/location/{id}', LocationDetails::class)->name('location');
Route::get('/teams', Teams::class)->name('teams');
Route::get('/privacy-policy', PrivacyPolicy::class)->name('privacy-policy');

// SUBSCRIBE TO NEWSLETTER
Route::post('/subscribe', [NewsletterController::class, 'subscribe'])->name('subscribe');

Route::middleware(['guest'])->group(function () {
    // The "login" route is accessible only to guests
    Route::get('/login', [DashboardController::class, 'login'])->name('login');
    Route::post('/login/auth', [AuthController::class, 'login'])->name('authLogin');
});

Route::middleware(['auth'])->group(function () {
    // DASHBOARDS ROUTES
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::get('/dashboard/profile', [DashboardController::class, 'ProfilePage']);
    Route::get('/dashboard/password/{id}', [DashboardController::class, 'updatePassword'])->name('update.password');

    // SIDEBAR ROUTES
    Route::get('/dashboard/newsletter', [DashboardController::class, 'newsletter'])->name('newsletter');
    Route::post('/sendnewsletter', [NewsletterController::class, 'sendNewsletter'])->name('sendNewsletter');
    Route::delete('/remove-subscriber/{id}', [NewsletterController::class, 'removeSubscriber'])->name('remove-subscriber');

    // LOGOUT
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    // FAQ
    Route::resource('/dashboard/faqs', FaqController::class)->names('faqs');

    // REVIEWS
    Route::resource('/dashboard/reviews', ReviewController::class)->names('reviews');

    // LOCAIIONS
    Route::resource('/dashboard/locations', LocationController::class)->names('locations');

    // SERVICES
    Route::resource('/dashboard/services', ServiceController::class)->names('services');

    // ADMIN USER
    Route::get('/dashboard/admins', [AuthController::class, 'index'])->name('admin.index')->middleware('checkUserStatus');
    Route::post('/register', [AuthController::class, 'register'])->name('register')->middleware('checkUserStatus');
    Route::delete('/users/{id}', [AuthController::class, 'deleteUser'])->name('delete.user')->middleware('checkUserStatus');
    Route::post('/dashboard/password', [AuthController::class, 'changePassword'])->name('password.user');
    Route::post('/dashboard/admin/password/{id}', [AuthController::class, 'changeAdminPassword'])->name('password.admin');
});

// IMAGES IMAGE
Route::get('/dashboard/images', [pageImagesController::class, 'index'])->name('images.index');
Route::post('/dashboard/images', [pageImagesController::class, 'store'])->name('images.store');
Route::get('/dashboard/images/{id}/edit', [pageImagesController::class, 'edit'])->name('images.edit');
Route::put('/dashboard/images/{id}', [pageImagesController::class, 'update'])->name('images.update');
Route::delete('/dashboard/images/{id}', [pageImagesController::class, 'destroy'])->name('images.destroy');

Route::get('/clear-cache', function () {
    Artisan::call('cache:clear');
    Artisan::call('route:clear');
    Artisan::call('config:clear');
    return "Cache cleared successfully";
});
