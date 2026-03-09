<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\Frontend\FrontendController::class, 'index'])->name('root');
Route::prefix('page')->group(function () {
    Route::get('/detail/{slug}', [App\Http\Controllers\Frontend\FrontendController::class, 'pagedetail'])->name('page.detail');
    // Route::get('/category/{slug}', App\Http\Livewire\Template\Frontend\Terasgreen\Page\Pagecategorylist::class)->name('page.category');
});
Route::middleware(['auth', 'verified', 'web'])->group(function () {
    Route::get('/backend/menu', [App\Http\Controllers\Backend\MenuController::class, 'index'])->name('backend.menu.index');

    // Dashboard
    Route::get('backend/home', [App\Http\Controllers\Backend\BackendController::class, 'index'])->name('backend.dashboard');

    // Socialmedia
    Route::get('backend/socialmedia', [App\Http\Controllers\Backend\SocialmediaController::class, 'index'])->name('backend.socialmedia.index');

    // Setting Web
    Route::get('backend/settings', [App\Http\Controllers\Backend\SettingController::class, 'setting'])->name('backend.settings');
    Route::post('backend/settings/create', [App\Http\Controllers\Backend\SettingController::class, 'createsetting'])->name('backend.settings.create');
    Route::post('backend/settings/store', [App\Http\Controllers\Backend\SettingController::class, 'storesetting'])->name('backend.settings.store');
    Route::get('backend/settings/{setting}/edit', [App\Http\Controllers\Backend\SettingController::class, 'editsetting'])->name('backend.settings.edit');
    Route::put('backend/settings/{setting}/update', [App\Http\Controllers\Backend\SettingController::class, 'updatesetting'])->name('backend.settings.update');

    // Pagecategory
    Route::get('backend/pagecategories', [App\Http\Controllers\Backend\PageCategoryController::class, 'index'])->name('backend.pagecategories.index');
    Route::get('backend/pagecategories/create', [App\Http\Controllers\Backend\PageCategoryController::class, 'create'])->name('backend.pagecategories.create');
    Route::post('backend/pagecategories/store', [App\Http\Controllers\Backend\PageCategoryController::class, 'store'])->name('backend.pagecategories.store');
    Route::get('backend/pagecategories/{pagecategory}/edit', [App\Http\Controllers\Backend\PageCategoryController::class, 'edit'])->name('backend.pagecategories.edit');
    Route::post('backend/pagecategories/{pagecategory}/update', [App\Http\Controllers\Backend\PageCategoryController::class, 'update'])->name('backend.pagecategories.update');

    // Page
    Route::get('backend/pages', [App\Http\Controllers\Backend\PageController::class, 'index'])->name('backend.pages.index');
    Route::get('backend/pages/create', [App\Http\Controllers\Backend\PageController::class, 'create'])->name('backend.pages.create');
    Route::post('backend/pages/store', [App\Http\Controllers\Backend\PageController::class, 'store'])->name('backend.pages.store');
    Route::get('backend/pages/{page}/edit', [App\Http\Controllers\Backend\PageController::class, 'edit'])->name('backend.pages.edit');
    Route::post('backend/pages/{page}/update', [App\Http\Controllers\Backend\PageController::class, 'update'])->name('backend.pages.update');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // User
    Route::get('backend/users/index', [App\Http\Controllers\Backend\UserController::class, 'index'])->name('backend.users.index');
    Route::get('backend/users/create', [App\Http\Controllers\Backend\UserController::class, 'create'])->name('backend.users.create');
    Route::post('backend/users/store', [App\Http\Controllers\Backend\UserController::class, 'store'])->name('backend.users.store');
    Route::get('backend/users/{user}/edit', [App\Http\Controllers\Backend\UserController::class, 'edit'])->name('backend.users.edit');
    Route::put('backend/users/{user}/update', [App\Http\Controllers\Backend\UserController::class, 'update'])->name('backend.users.update');
    Route::get('backend/admin/profile', [App\Http\Controllers\Backend\UserController::class, 'userprofile'])->name('backend.userprofile');

    // Permission
    Route::get('backend/permissions/index', [App\Http\Controllers\Backend\PermissionController::class, 'index'])->name('backend.permissions.index');

    // Role
    Route::get('backend/roles/index', [App\Http\Controllers\Backend\RoleController::class, 'index'])->name('backend.roles.index');
    Route::get('backend/roles/create', [App\Http\Controllers\Backend\RoleController::class, 'create'])->name('backend.roles.create');
    Route::post('backend/roles/store', [App\Http\Controllers\Backend\RoleController::class, 'store'])->name('backend.roles.store');
    Route::get('backend/roles/{role}/edit', [App\Http\Controllers\Backend\RoleController::class, 'edit'])->name('backend.roles.edit');
    Route::put('backend/roles/{role}/update', [App\Http\Controllers\Backend\RoleController::class, 'update'])->name('backend.roles.update');


});

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});

require __DIR__.'/auth.php';
