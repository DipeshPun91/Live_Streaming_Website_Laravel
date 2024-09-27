<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\ExtraController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('guest.welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/sports', [ProfileController::class, 'SportCategory'])->name('sports');
Route::get('/sports/schedule/{id}', [ProfileController::class, 'SportSchedule'])->name('sports.schedule');
Route::get('/teams', [ProfileController::class, 'Team'])->name('teams');
Route::get('/teams/players/{id}', [ProfileController::class, 'TeamPlayer'])->name('teams.players');
Route::get('/teams/players/info/{id}', [ProfileController::class, 'TeamPlayerInfo'])->name('teams.players.info');
Route::get('/results', [ProfileController::class, 'Result'])->name('results');
Route::get('/results/info/{id}', [ProfileController::class, 'ResultInfo'])->name('results.info');
Route::get('/news/detail/{id}', [ProfileController::class, 'NewsDetail'])->name('news.detail');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'role:admin'])->group(function(){
    Route::get('/admin/dashboard', [AdminController::class, 'AdminDashboard'])->name('admin.dashboard');
    Route::get('/admin/logout', [AdminController::class, 'AdminLogout'])->name('admin.logout');
    Route::get('/admin/profile', [AdminController::class, 'AdminProfile'])->name('admin.profile');
    Route::post('/admin/profile/store', [AdminController::class, 'AdminProfileStore'])->name('admin.profile.store');
    Route::get('/admin/change/password', [AdminController::class, 'AdminChangePassword'])->name('admin.change.password');
    Route::post('/admin/update/password', [AdminController::class, 'AdminUpdatePassword'])->name('admin.update.password');
});

Route::middleware(['auth', 'role:admin'])->group(function(){
    Route::get('/all/country', [ExtraController::class, 'AllCountry'])->name('all.country');
    Route::get('/add/country', [ExtraController::class, 'AddCountry'])->name('add.country');
    Route::post('/create/country', [ExtraController::class, 'CreateCountry'])->name('create.country');
    Route::get('/edit/country/{id}', [ExtraController::class, 'EditCountry'])->name('edit.country');
    Route::post('/update/country', [ExtraController::class, 'UpdateCountry'])->name('update.country');
    Route::get('/delete/country/{id}', [ExtraController::class, 'DeleteCountry'])->name('delete.country');
});

Route::middleware(['auth', 'role:admin'])->group(function(){
    Route::get('/all/news', [ContentController::class, 'AllNews'])->name('all.news');
    Route::get('/add/news', [ContentController::class, 'AddNews'])->name('add.news');
    Route::post('/create/news', [ContentController::class, 'CreateNews'])->name('create.news');
    Route::get('/edit/news/{id}', [ContentController::class, 'EditNews'])->name('edit.news');
    Route::post('/update/news', [ContentController::class, 'UpdateNews'])->name('update.news');
    Route::get('/delete/news/{id}', [ContentController::class, 'DeleteNews'])->name('delete.news');
});

Route::middleware(['auth', 'role:admin'])->group(function(){
    Route::get('/all/game', [ExtraController::class, 'AllGame'])->name('all.game');
    Route::get('/add/game', [ExtraController::class, 'AddGame'])->name('add.game');
    Route::post('/create/game', [ExtraController::class, 'CreateGame'])->name('create.game');
    Route::get('/edit/game/{id}', [ExtraController::class, 'EditGame'])->name('edit.game');
    Route::post('/update/game', [ExtraController::class, 'UpdateGame'])->name('update.game');
    Route::get('/delete/game/{id}', [ExtraController::class, 'DeleteGame'])->name('delete.game');
});

Route::middleware(['auth', 'role:admin'])->group(function(){
    Route::get('/all/video', [ContentController::class, 'AllVideo'])->name('all.video');
    Route::get('/add/video', [ContentController::class, 'AddVideo'])->name('add.video');
    Route::post('/create/video', [ContentController::class, 'CreateVideo'])->name('create.video');
    Route::get('/edit/video/{id}', [ContentController::class, 'EditVideo'])->name('edit.video');
    Route::post('/update/video', [ContentController::class, 'UpdateVideo'])->name('update.video');
    Route::get('/delete/video/{id}', [ContentController::class, 'DeleteVideo'])->name('delete.video');
});

Route::middleware(['auth', 'role:admin'])->group(function(){
    Route::get('/all/image', [ContentController::class, 'AllImage'])->name('all.image');
    Route::get('/add/image', [ContentController::class, 'AddImage'])->name('add.image');
    Route::post('/create/image', [ContentController::class, 'CreateImage'])->name('create.image');
    Route::get('/edit/image/{id}', [ContentController::class, 'EditImage'])->name('edit.image');
    Route::post('/update/image', [ContentController::class, 'UpdateImage'])->name('update.image');
    Route::get('/delete/image/{id}', [ContentController::class, 'DeleteImage'])->name('delete.image');
});

Route::middleware(['auth', 'role:admin'])->group(function(){
    Route::get('/all/player', [ContentController::class, 'AllPlayer'])->name('all.player');
    Route::get('/add/player', [ContentController::class, 'AddPlayer'])->name('add.player');
    Route::post('/create/player', [ContentController::class, 'CreatePlayer'])->name('create.player');
    Route::get('/edit/player/{id}', [ContentController::class, 'EditPlayer'])->name('edit.player');
    Route::post('/update/player', [ContentController::class, 'UpdatePlayer'])->name('update.player');
    Route::get('/delete/player/{id}', [ContentController::class, 'DeletePlayer'])->name('delete.player');
});

Route::middleware(['auth', 'role:admin'])->group(function(){
    Route::get('/all/schedule', [ContentController::class, 'AllSchedule'])->name('all.schedule');
    Route::get('/add/schedule', [ContentController::class, 'AddSchedule'])->name('add.schedule');
    Route::post('/create/schedule', [ContentController::class, 'CreateSchedule'])->name('create.schedule');
    Route::get('/edit/schedule/{id}', [ContentController::class, 'EditSchedule'])->name('edit.schedule');
    Route::post('/update/schedule', [ContentController::class, 'UpdateSchedule'])->name('update.schedule');
    Route::get('/delete/schedule/{id}', [ContentController::class, 'DeleteSchedule'])->name('delete.schedule');
});

Route::middleware(['auth', 'role:admin'])->group(function(){
    Route::get('/all/result', [ContentController::class, 'AllResult'])->name('all.result');
    Route::get('/add/result', [ContentController::class, 'AddResult'])->name('add.result');
    Route::post('/create/result', [ContentController::class, 'CreateResult'])->name('create.result');
    Route::get('/edit/result/{id}', [ContentController::class, 'EditResult'])->name('edit.result');
    Route::post('/update/result', [ContentController::class, 'UpdateResult'])->name('update.result');
    Route::get('/delete/result/{id}', [ContentController::class, 'DeleteResult'])->name('delete.result');
});

Route::middleware(['auth'])->group(function(){
    Route::get('/user/dashboard', [UserController::class, 'UserDashboard'])->name('user.dashboard');
    Route::get('/user/logout', [UserController::class, 'UserLogout'])->name('user.logout');
    Route::get('/user/profile', [UserController::class, 'UserProfile'])->name('user.profile');
    Route::post('/user/profile/store', [UserController::class, 'UserProfileStore'])->name('user.profile.store');
    Route::get('/user/change/password', [UserController::class, 'UserChangePassword'])->name('user.change.password');
    Route::post('/user/update/password', [UserController::class, 'UserUpdatePassword'])->name('user.update.password');
});

Route::middleware(['auth'])->group(function(){
    Route::get('/live/video', [UserController::class, 'LiveVideo'])->name('live.video');
    Route::get('/highlight/video', [UserController::class, 'HighlightVideo'])->name('highlight.video');
    Route::get('/all/picture', [UserController::class, 'AllPicture'])->name('all.picture');
    Route::get('/all/videos', [UserController::class, 'AllVideo'])->name('all.videos');
});

require __DIR__.'/auth.php';
