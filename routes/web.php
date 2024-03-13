<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\Dashboard\AnnouncementController as DashboardAnnouncementController;

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

//Route::get('/', function () {
//    return Inertia::render('Welcome', [
//        'canLogin' => Route::has('login'),
//        'canRegister' => Route::has('register'),
//        'laravelVersion' => Application::VERSION,
//        'phpVersion' => PHP_VERSION,
//    ]);
//});

Route::get('/', [PageController::class, 'index'])->name('index');
// admin panel
Route::middleware(['auth:sanctum'])->group(function () {
    Route::prefix('dashboard')->as('dashboard.')->group(function () {
        Route::get('/', [PageController::class, 'dashboard'])->name('index');

        Route::get('/announcements', [DashboardAnnouncementController::class, 'index'])
            ->name('announcements.index');
        Route::get('/announcements/{announcement}', [DashboardAnnouncementController::class, 'show'])
            ->name('announcements.show');
        Route::get('/announcements/{announcement}/edit', [DashboardAnnouncementController::class, 'edit'])
            ->name('announcements.edit');
        Route::patch('/announcements/{announcement}', [DashboardAnnouncementController::class, 'update'])
            ->name('announcements.update');
    });
});


Route::get('/announcements', [AnnouncementController::class, 'index'])->name('announcements.index');
Route::get('/get-all-announcements-type', [AnnouncementController::class, 'getAllAnnouncementTypes'])->name(
    'announcements.get_all_announcement_types'
);
Route::get('/get-all-announcements-categories', [AnnouncementController::class, 'getAllAnnouncementCategories'])->name(
    'announcements.get_all_announcement_categories'
);



