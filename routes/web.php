<?php

use Kaviru\MuseCore\Route;
use App\Controllers\AdminController;
use App\Controllers\PublicController;


/*  ----------------------------------

    Enter the application routes here.

    ----------------------------------  */

# xamp based


Route::name('muse', 'index');
Route::get('muse/', PublicController::class, 'index');

Route::name('muse/test-database/create', 'test.database.create');
Route::get('muse/test-database/create', PublicController::class, 'testDatabaseCreate');

Route::name('muse/test-database/index', 'test.database.index');
Route::get('muse/test-database/index', PublicController::class, 'testDatabaseIndex');

Route::name('muse/admin/login', 'admin.login');
Route::get('muse/admin/login', AdminController::class, 'loginGet');
Route::post('muse/admin/login', AdminController::class, 'loginPost');

Route::name('muse/admin/signup', 'admin.signup');
Route::get('muse/admin/signup', AdminController::class, 'signupGet');
Route::post('muse/admin/signup', AdminController::class, 'signupPost');


// ----------------------gayashan------------------------//

