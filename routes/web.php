<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AnnouncementController;

Route::get('/', [PageController::class, 'index'])->name('index');
Route::get('/announcements', [AnnouncementController::class, 'index'])->name('announcements.index');
Route::get('/get-all-announcements-type', [AnnouncementController::class, 'getAllAnnouncementTypes'])->name(
    'announcements.get_all_announcement_types'
);
Route::get('/get-all-announcements-categories', [AnnouncementController::class, 'getAllAnnouncementCategories'])->name(
    'announcements.get_all_announcement_categories'
);



