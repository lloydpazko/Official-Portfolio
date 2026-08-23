<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AdminMessageController;
use App\Http\Controllers\AdminProjectController;
use App\Http\Controllers\AdminAccountController;
use App\Models\Project;

// Route::get('/', function () {
//     return view('welcome');
    
// });

// Home
// Route::view('/', 'home')->name('home');

// Route::get('/', function () {
//     $featuredProjects = Project::where('is_featured', true)
//         ->latest()
//         ->take(3)
//         ->get();

//     return view('home', compact('featuredProjects'));
// })->name('home');

Route::get('/', function () {
    $projects = Project::latest()->get();

    return view('home', compact('projects'));
})->name('home');

// Projects
Route::get('/projects', function () {
    $projects = Project::latest()->get();

    return view('projects', compact('projects'));
})->name('projects');

Route::get('/projects/{project:slug}', function (Project $project) {
    return view('project-details', compact('project'));
})->name('projects.show');

// Contact
Route::view('/contact', 'contact')->name('contact');

Route::post('/contact', [ContactController::class, 'store'])
    ->name('contact.store');

// Admin Authentication

Route::get('/admin/login', [AdminAuthController::class, 'showLogin'])
    ->name('admin.login');

Route::post('/admin/login', [AdminAuthController::class, 'login'])
    ->name('admin.login.submit');

// Logout

Route::post('/admin/logout', [AdminAuthController::class, 'logout'])
    ->name('admin.logout');

// ======================================================
// ADMIN PASSWORD RESET
// ======================================================

// Show Forgot Password
Route::get('/admin/forgot-password', [AdminAuthController::class, 'showForgotPassword'])
    ->name('admin.password.request');

// Send Reset Link
Route::post('/admin/forgot-password', [AdminAuthController::class, 'sendResetLink'])
    ->name('admin.password.email');

// Show Reset Password Form
Route::get('/admin/reset-password/{token}', [AdminAuthController::class, 'showResetPassword'])
    ->name('admin.password.reset');

// Update Password
Route::post('/admin/reset-password', [AdminAuthController::class, 'resetPassword'])
    ->name('admin.password.update');

    // Admin Dashboard
Route::get('/admin/dashboard', [AdminDashboardController::class, 'index'])
    ->middleware('auth')
    ->name('admin.dashboard');

    Route::get('/admin/messages', [AdminMessageController::class, 'index'])
    ->middleware('auth')
    ->name('admin.messages');

    Route::get('/admin/messages/{message}', [AdminMessageController::class, 'show'])
    ->middleware('auth')
    ->name('admin.messages.show');

    Route::delete('/admin/messages/{message}', [AdminMessageController::class, 'destroy'])
    ->middleware('auth')
    ->name('admin.messages.destroy');

    Route::middleware('auth')->prefix('admin')->group(function () {

    // Projects
    Route::get('/projects', [AdminProjectController::class, 'index'])
        ->name('admin.projects');

    Route::get('/projects/create', [AdminProjectController::class, 'create'])
        ->name('admin.projects.create');

    Route::post('/projects', [AdminProjectController::class, 'store'])
        ->name('admin.projects.store');

    Route::get('/projects/{project}/edit', [AdminProjectController::class, 'edit'])
        ->name('admin.projects.edit');

    Route::put('/projects/{project}', [AdminProjectController::class, 'update'])
        ->name('admin.projects.update');

    Route::delete('/projects/{project}', [AdminProjectController::class, 'destroy'])
        ->name('admin.projects.destroy');
// account
    Route::get('/account', [AdminAccountController::class, 'edit'])
        ->name('admin.account');

    Route::put('/account/profile', [AdminAccountController::class, 'updateProfile'])
        ->name('admin.account.profile');

    Route::put('/account/password', [AdminAccountController::class, 'updatePassword'])
        ->name('admin.account.password');

});