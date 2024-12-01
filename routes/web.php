<?php

use Kaviru\MuseCore\Route;
use App\Controllers\AdminController;
use App\Controllers\PublicController;
use App\Controllers\ParentController;


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

Route::name('muse/home', 'home');
Route::get('muse/home', ParentController::class, 'home');

Route::name('muse/aboutus', 'aboutus');
Route::get('muse/aboutus', ParentController::class, 'aboutus');

Route::name('muse/whymuse', 'whymuse');
Route::get('muse/whymuse', ParentController::class, 'whymuse');

Route::name('muse/contactus', 'contactus');
Route::get('muse/contactus', ParentController::class, 'contactus');

Route::name('muse/login', 'login');
Route::get('muse/login', ParentController::class, 'loginGet');

Route::name('muse/signup', 'signup');
Route::get('muse/signup', ParentController::class, 'signupGet');

