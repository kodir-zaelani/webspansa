<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\Frontend\FrontendController::class, 'index'])->name('root');
Route::get('/kontak', [App\Http\Controllers\Frontend\FrontendController::class, 'contact'])->name('contact');
Route::get('/video/details/{slug}', [App\Http\Controllers\Frontend\VideoController::class, 'video_detail'])->name('video.detail');

Route::get('berita/semua-berita', [App\Http\Controllers\Frontend\PostController::class, 'all_news'])->name('all.news');
Route::get('berita/details/{slug}', [App\Http\Controllers\Frontend\PostController::class, 'news_detail'])->name('news.detail');
Route::get('berita/kategori/{slug}', [App\Http\Controllers\Frontend\PostController::class, 'news_category'])->name('post.category');
Route::get('berita/tag/{slug}',  [App\Http\Controllers\Frontend\PostController::class, 'news_tag'])->name('post.tag');
Route::get('berita/penulis/{id}',  [App\Http\Controllers\Frontend\PostController::class, 'news_author'])->name('post.author');
Route::get('berita/pencarian',  [App\Http\Controllers\Frontend\PostController::class, 'news_search'])->name('post.search');

Route::prefix('halaman')->group(function () {
    Route::get('/detail/{slug}', [App\Http\Controllers\Frontend\FrontendController::class, 'pagedetail'])->name('page.detail');
    // Route::get('/kategory/{slug}', App\Http\Livewire\Template\Frontend\Terasgreen\Page\Pagecategorylist::class)->name('page.category');
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

    // PostCategory
    Route::get('backend/postcategories', [App\Http\Controllers\Backend\PostcategoryController::class, 'index'])->name('backend.postscategories.index');
    Route::get('backend/postcategories/create', [App\Http\Controllers\Backend\PostcategoryController::class, 'create'])->name('backend.postscategories.create');
    Route::post('backend/postcategories/store', [App\Http\Controllers\Backend\PostcategoryController::class, 'store'])->name('backend.postscategories.store');
    Route::get('backend/postcategories/{postcategory}/edit', [App\Http\Controllers\Backend\PostcategoryController::class, 'edit'])->name('backend.postscategories.edit');
    Route::post('backend/postcategories/{postcategory}/update', [App\Http\Controllers\Backend\PostcategoryController::class, 'update'])->name('backend.postscategories.update');

    // Tag
    Route::get('backend/tags', [App\Http\Controllers\Backend\TagController::class, 'index'])->name('backend.tags.index');

    // Post
    Route::get('backend/posts', [App\Http\Controllers\Backend\PostController::class, 'index'])->name('backend.posts.index');
    Route::get('backend/posts/create', [App\Http\Controllers\Backend\PostController::class, 'create'])->name('backend.posts.create');
    Route::post('backend/posts/store', [App\Http\Controllers\Backend\PostController::class, 'store'])->name('backend.posts.store');
    Route::get('backend/posts/{post}/edit', [App\Http\Controllers\Backend\PostController::class, 'edit'])->name('backend.posts.edit');
    Route::put('backend/posts/{post}/update', [App\Http\Controllers\Backend\PostController::class, 'update'])->name('backend.posts.update');

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

    // Slider
    Route::get('backend/sliders', [App\Http\Controllers\Backend\SliderController::class, 'index'])->name('backend.sliders.index');
    Route::get('backend/sliders/create', [App\Http\Controllers\Backend\SliderController::class, 'create'])->name('backend.sliders.create');
    Route::post('backend/sliders/store', [App\Http\Controllers\Backend\SliderController::class, 'store'])->name('backend.sliders.store');
    Route::get('backend/sliders/{slider}/edit', [App\Http\Controllers\Backend\SliderController::class, 'edit'])->name('backend.sliders.edit');
    Route::put('backend/sliders/{slider}/update', [App\Http\Controllers\Backend\SliderController::class, 'update'])->name('backend.sliders.update');

    // Video
    Route::get('backend/video', [App\Http\Controllers\Backend\VideoController::class, 'index'])->name('backend.video.index');
    Route::get('backend/video/create', [App\Http\Controllers\Backend\VideoController::class, 'create'])->name('backend.video.create');
    Route::post('backend/video/store', [App\Http\Controllers\Backend\VideoController::class, 'store'])->name('backend.video.store');
    Route::get('backend/video/{video}/edit', [App\Http\Controllers\Backend\VideoController::class, 'edit'])->name('backend.video.edit');
    Route::put('backend/video/{video}/update', [App\Http\Controllers\Backend\VideoController::class, 'update'])->name('backend.video.update');

    // Agenda
    Route::get('backend/agenda', [App\Http\Controllers\Backend\AgendaController::class, 'index'])->name('backend.agendas.index');
    Route::get('backend/agendas/create', [App\Http\Controllers\Backend\AgendaController::class, 'create'])->name('backend.agendas.create');
    Route::post('backend/agendas/store', [App\Http\Controllers\Backend\AgendaController::class, 'store'])->name('backend.agendas.store');
    Route::get('backend/agendas/{agenda}/edit', [App\Http\Controllers\Backend\AgendaController::class, 'edit'])->name('backend.agendas.edit');
    Route::put('backend/agendas/{agenda}/update', [App\Http\Controllers\Backend\AgendaController::class, 'update'])->name('backend.agendas.update');

    // Album
    Route::get('backend/albums', [App\Http\Controllers\Backend\AlbumController::class, 'index'])->name('backend.albums.index');
    Route::get('backend/albums/create', [App\Http\Controllers\Backend\AlbumController::class, 'create'])->name('backend.albums.create');
    Route::post('backend/albums/store', [App\Http\Controllers\Backend\AlbumController::class, 'store'])->name('backend.albums.store');
    Route::get('backend/albums/{album}/edit', [App\Http\Controllers\Backend\AlbumController::class, 'edit'])->name('backend.albums.edit');
    Route::put('backend/albums/{album}/update', [App\Http\Controllers\Backend\AlbumController::class, 'update'])->name('backend.albums.update');
    Route::post('backend/albums/storefoto', [App\Http\Controllers\Backend\AlbumController::class, 'storefoto'])->name('backend.albums.storefoto');


});

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});

require __DIR__.'/auth.php';