<?php

use App\Http\Controllers\client\AboutUsController;
use App\Http\Controllers\client\AnnouncementController;
use App\Http\Controllers\client\AudioController;
use App\Http\Controllers\client\ContactController;
use App\Http\Controllers\client\HomeController;
use App\Http\Controllers\client\JournalController;
use App\Http\Controllers\client\PictureController;
use App\Http\Controllers\client\TestimonyController;
use App\Http\Controllers\client\TranslationController;
use App\Http\Controllers\client\VideoController;
use App\Http\Controllers\client\WorshipController;
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
Route::get('/', [HomeController::class, 'index'])->name("client.home");
Route::get('announcement', [AnnouncementController::class, 'index'])->name("client.announcement.index");
Route::get('about-us', [AboutUsController::class, 'index'])->name("client.about-us.index");
Route::get('journal', [JournalController::class, 'index'])->name("client.journal.index");
Route::get('testimony', [TestimonyController::class, 'index'])->name("client.testimony.index");
Route::prefix('translation')->group(function () {
    Route::get('/', [TranslationController::class, 'index'])->name("client.translation.index");
    Route::get('video', [VideoController::class, 'show'])->name("client.translation.video.show");
    Route::get('audio', [AudioController::class, 'show'])->name("client.translation.audio.show");
});
Route::get('contact', [ContactController::class, 'index'])->name("client.contact.index");
Route::get('picture', [PictureController::class, 'index'])->name("client.picture.index");
Route::get('worship', [WorshipController::class, 'index'])->name("client.worship.index");
Route::get('video', [VideoController::class, 'index'])->name("client.video.list");
Route::get('audio', [AudioController::class, 'index'])->name("client.audio.list");

Route::prefix('/admin')->group(function () {
    Route::resource('announcement', AnnouncementController::class);
    Route::resource('about-us', AboutUsController::class);
    Route::resource('journal', JournalController::class);
    Route::resource('testimony', TestimonyController::class);
    Route::resource('translation', TranslationController::class);
    Route::resource('contact', ContactController::class);
    Route::resource('picture', PictureController::class);
    Route::resource('worship', WorshipController::class);
    Route::resource('video', VideoController::class);
    Route::resource('audio', AudioController::class);
});
