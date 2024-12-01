<?php

use Kaviru\MuseCore\Route;
use App\Controllers\AdminController;
use App\Controllers\ChildController;
use App\Controllers\PublicController;
use App\Controllers\ParentController;
use App\Controllers\CommunityAmbassadorController;

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


// ----------------------Gayashan------------------------//

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

Route::name('muse/child-top-books', 'childTopBooks');
Route::get('muse/child-top-books', ChildController::class, 'childTopBooks');

Route::name('muse/child-autobiography-details', 'childAutoInside');
Route::get('muse/child-autobiography-details', ChildController::class, 'childAutoInside');

Route::name('muse/child-creative-writing', 'childCreChapters');
Route::get('muse/child-creative-writing', ChildController::class, 'childCreChapters');

Route::name('muse/child-creative-poem-writing', 'childCrePeom');
Route::get('muse/child-creative-poem-writing', ChildController::class, 'childCrePoem');

Route::name('muse/child-creative-song-writing', 'childCreSong');
Route::get('muse/child-creative-song-writing', ChildController::class, 'childCreSong');



// ------------------------ Amasha --------------------------//

Route::name('muse/community-ambassador/communities', 'communityAmbassador.communities');
Route::get('muse/community-ambassador/communities', CommunityAmbassadorController::class, 'communityGet');

Route::name('muse/community-ambassador/events', 'communityAmbassador.events');
Route::get('muse/community-ambassador/events', CommunityAmbassadorController::class, 'eventsGet');

Route::name('muse/community-ambassador/createCommunityEvent', 'communityAmbassador.createCommunityEvent'); 
Route::get('muse/community-ambassador/createCommunityEvent', CommunityAmbassadorController::class, 'createCommunityEventGet');

Route::name('muse/community-ambassador/eventDetails', 'communityAmbassador.eventDetails'); 
Route::get('muse/community-ambassador/eventDetails', CommunityAmbassadorController::class, 'eventDetailsGet');

Route::name('muse/community-ambassador/writingGroups', 'communityAmbassador.writingGroups');
Route::get('muse/community-ambassador/writingGroups', CommunityAmbassadorController::class, 'writingGroupGet'); 

Route::name('muse/community-ambassador/writingGroupPosts', 'communityAmbassador.writingGroupPosts');
Route::get('muse/community-ambassador/writingGroupPosts', CommunityAmbassadorController::class, 'writingGroupPostsGet');


// ---------------------------------- Madara ------------------------------- //

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

