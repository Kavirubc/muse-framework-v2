<?php

use Kaviru\MuseCore\Route;
use App\Controllers\AdminController;
use App\Controllers\ChildController;
use App\Controllers\PublicController;


/*  ----------------------------------

    Enter the application routes here.

    ----------------------------------  */

# xamp based


// Route::name('muse', 'index');
// Route::get('muse/', PublicController::class, 'index');

// Route::name('muse/test-database/create', 'test.database.create');
// Route::get('muse/test-database/create', PublicController::class, 'testDatabaseCreate');

// Route::name('muse/test-database/index', 'test.database.index');
// Route::get('muse/test-database/index', PublicController::class, 'testDatabaseIndex');

// Route::name('muse/admin/login', 'admin.login');
// Route::get('muse/admin/login', AdminController::class, 'loginGet');
// Route::post('muse/admin/login', AdminController::class, 'loginPost');

// Route::name('muse/admin/signup', 'admin.signup');
// Route::get('muse/admin/signup', AdminController::class, 'signupGet');
// Route::post('muse/admin/signup', AdminController::class, 'signupPost');


// ----------------------gayashan------------------------//

Route::name('muse/child-home', 'childHome');
Route::get('muse/child-home', ChildController::class, 'childHome');

Route::name('muse/child-creative', 'childCreative');
Route::get('muse/child-creative', ChildController::class, 'childCreative');

Route::name('muse/child-book-release', 'childRelease');
Route::get('muse/child-book-release', ChildController::class, 'childRelease');

Route::name('muse/child-award', 'childAward');
Route::get('muse/child-award', ChildController::class, 'childAward');

Route::name('muse/child-author-award', 'childAuthorAward');
Route::get('muse/child-author-award', ChildController::class, 'childAuthorAward');

Route::name('muse/child-autobiography', 'childAuto');
Route::get('muse/child-autobiography', ChildController::class, 'childAuto');

Route::name('muse/child-top-book', 'childTopBooks');
Route::get('muse/child-top-books', ChildController::class, 'childTopBooks');

Route::name('muse/child-autobiography-details', 'childAutoInside');
Route::get('muse/child-autobiography-details', ChildController::class, 'childAutoInside');

Route::name('muse/child-creative-writing', 'childCreChapters');
Route::get('muse/child-creative-writing', ChildController::class, 'childCreChapters');

Route::name('muse/child-creative-poem-writing', 'childCrePeom');
Route::get('muse/child-creative-poem-writing', ChildController::class, 'childCrePoem');

Route::name('muse/child-creative-song-writing', 'childCreSong');
Route::get('muse/child-creative-song-writing', ChildController::class, 'childCreSong');
