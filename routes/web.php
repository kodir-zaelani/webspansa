<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\Frontend\FrontendController::class, 'index'])->name('root');
Route::post('/dropzones', [App\Http\Controllers\Frontend\FrontendController::class, 'storeimage'])->name('dropzone.store');
Route::get('/kontak', [App\Http\Controllers\Frontend\FrontendController::class, 'contact'])->name('kontak');
Route::get('/tentang', [App\Http\Controllers\Frontend\FrontendController::class, 'about'])->name('tentang');
Route::get('/video/details/{slug}', [App\Http\Controllers\Frontend\FrontendController::class, 'video_detail'])->name('video.detail');

Route::post('gallery/upload', [App\Http\Controllers\Backend\GalleryController::class, 'upload']);

Route::get('sambutan/semua-sambutan', [App\Http\Controllers\Frontend\GreetingController::class, 'all_greetings'])->name('greeting.all');
Route::get('sambutan/detail/{slug}', [App\Http\Controllers\Frontend\GreetingController::class, 'greeting_detail'])->name('greeting.detail');

Route::get('berita/semua-berita', [App\Http\Controllers\Frontend\PostController::class, 'all_news'])->name('news.all');
Route::get('berita/details/{slug}', [App\Http\Controllers\Frontend\PostController::class, 'news_detail'])->name('news.detail');
Route::get('berita/kategori/{slug}', [App\Http\Controllers\Frontend\PostController::class, 'news_category'])->name('news.category');
Route::get('berita/tag/{slug}',  [App\Http\Controllers\Frontend\PostController::class, 'news_tag'])->name('news.tag');
Route::get('berita/penulis/{id}',  [App\Http\Controllers\Frontend\PostController::class, 'news_author'])->name('news.author');
Route::get('berita/pencarian',  [App\Http\Controllers\Frontend\PostController::class, 'news_search'])->name('news.search');

Route::get('blog/detail/{slug}',  [App\Http\Controllers\Frontend\BlogController::class, 'detail'])->name('blog.detail');
Route::get('blog/semua-blog',  [App\Http\Controllers\Frontend\BlogController::class, 'index'])->name('blog.all');
Route::get('blog/kategori/{slug}',  [App\Http\Controllers\Frontend\BlogController::class, 'blog_category'])->name('blog.category');
Route::get('blog/tag/{slug}',  [App\Http\Controllers\Frontend\BlogController::class, 'blog_tag'])->name('blog.tag');
Route::get('blog/penulis/{id}',  [App\Http\Controllers\Frontend\BlogController::class, 'blog_author'])->name('blog.author');
Route::get('blog/pencarian',  [App\Http\Controllers\Frontend\BlogController::class, 'blog_search'])->name('blog.search');

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

    // Album
    Route::get('backend/albums', [App\Http\Controllers\Backend\AlbumController::class, 'index'])->name('backend.albums.index');
    Route::get('backend/albums/create', [App\Http\Controllers\Backend\AlbumController::class, 'create'])->name('backend.albums.create');
    Route::post('backend/albums/store', [App\Http\Controllers\Backend\AlbumController::class, 'store'])->name('backend.albums.store');
    Route::get('backend/albums/{album}/edit', [App\Http\Controllers\Backend\AlbumController::class, 'edit'])->name('backend.albums.edit');
    Route::put('backend/albums/{album}/update', [App\Http\Controllers\Backend\AlbumController::class, 'update'])->name('backend.albums.update');
    Route::post('backend/albums/storefoto', [App\Http\Controllers\Backend\AlbumController::class, 'storefoto'])->name('backend.albums.storefoto');

    // Announcement
    Route::get('backend/announcement', [App\Http\Controllers\Backend\AnnouncementController::class, 'index'])->name('backend.announcement.index');
    Route::get('backend/announcement/create', [App\Http\Controllers\Backend\AnnouncementController::class, 'create'])->name('backend.announcement.create');
    Route::post('backend/announcement/store', [App\Http\Controllers\Backend\AnnouncementController::class, 'store'])->name('backend.announcement.store');
    Route::get('backend/announcement/{announcement}/edit', [App\Http\Controllers\Backend\AnnouncementController::class, 'edit'])->name('backend.announcement.edit');
    Route::put('backend/announcement/{announcement}/update', [App\Http\Controllers\Backend\AnnouncementController::class, 'update'])->name('backend.announcement.update');

    // PostCategory
    Route::get('backend/blogcategories', [App\Http\Controllers\Backend\BlogcategoryController::class, 'index'])->name('backend.blogcategories.index');
    Route::get('backend/blogcategories/create', [App\Http\Controllers\Backend\BlogcategoryController::class, 'create'])->name('backend.blogcategories.create');
    Route::post('backend/blogcategories/store', [App\Http\Controllers\Backend\BlogcategoryController::class, 'store'])->name('backend.blogcategories.store');
    Route::get('backend/blogcategories/{blogcategory}/edit', [App\Http\Controllers\Backend\BlogcategoryController::class, 'edit'])->name('backend.blogcategories.edit');
    Route::post('backend/blogcategories/{blogcategory}/update', [App\Http\Controllers\Backend\BlogcategoryController::class, 'update'])->name('backend.blogcategories.update');

    // Blog
    Route::get('backend/blog', [App\Http\Controllers\Backend\BlogController::class, 'index'])->name('backend.blog.index');
    Route::get('backend/blog/create', [App\Http\Controllers\Backend\BlogController::class, 'create'])->name('backend.blog.create');
    Route::post('backend/blog/store', [App\Http\Controllers\Backend\BlogController::class, 'store'])->name('backend.blog.store');
    Route::get('backend/blog/{blog}/edit', [App\Http\Controllers\Backend\BlogController::class, 'edit'])->name('backend.blog.edit');
    Route::put('backend/blog/{blog}/update', [App\Http\Controllers\Backend\BlogController::class, 'update'])->name('backend.blog.update');

    // Greetings
    Route::get('backend/sambutan', [App\Http\Controllers\Backend\GreetingController::class, 'index'])->name('backend.greetings.index');
    Route::get('backend/sambutan/create', [App\Http\Controllers\Backend\GreetingController::class, 'create'])->name('backend.greetings.create');
    Route::post('backend/sambutan/store', [App\Http\Controllers\Backend\GreetingController::class, 'store'])->name('backend.greetings.store');
    Route::get('backend/sambutan/{greeting}/edit', [App\Http\Controllers\Backend\GreetingController::class, 'edit'])->name('backend.greetings.edit');
    Route::put('backend/sambutan/{greeting}/update', [App\Http\Controllers\Backend\GreetingController::class, 'update'])->name('backend.greetings.update');

    // Editorial
    Route::get('backend/editorials', [App\Http\Controllers\Backend\EditorialController::class, 'index'])->name('backend.editorials.index');
    Route::get('backend/editorials/create', [App\Http\Controllers\Backend\EditorialController::class, 'create'])->name('backend.editorials.create');
    Route::post('backend/editorials/store', [App\Http\Controllers\Backend\EditorialController::class, 'store'])->name('backend.editorials.store');
    Route::get('backend/editorials/{editorial}/edit', [App\Http\Controllers\Backend\EditorialController::class, 'edit'])->name('backend.editorials.edit');
    Route::put('backend/editorials/{editorial}/update', [App\Http\Controllers\Backend\EditorialController::class, 'update'])->name('backend.editorials.update');

    // Editorial
    Route::get('backend/statistic', [App\Http\Controllers\Backend\StatisticController::class, 'index'])->name('backend.statistic.index');
    Route::get('backend/statistic/create', [App\Http\Controllers\Backend\StatisticController::class, 'create'])->name('backend.statistic.create');
    Route::post('backend/statistic/store', [App\Http\Controllers\Backend\StatisticController::class, 'store'])->name('backend.statistic.store');
    Route::get('backend/statistic/{editorial}/edit', [App\Http\Controllers\Backend\StatisticController::class, 'edit'])->name('backend.statistic.edit');
    Route::put('backend/statistic/{editorial}/update', [App\Http\Controllers\Backend\StatisticController::class, 'update'])->name('backend.statistic.update');

    // Performance
    Route::get('backend/prestasi', [App\Http\Controllers\Backend\PerformanceController::class, 'index'])->name('backend.performance.index');
    Route::get('backend/prestasi/create', [App\Http\Controllers\Backend\PerformanceController::class, 'create'])->name('backend.performance.create');
    Route::post('backend/prestasi/store', [App\Http\Controllers\Backend\PerformanceController::class, 'store'])->name('backend.performance.store');
    Route::get('backend/prestasi/{performance}/edit', [App\Http\Controllers\Backend\PerformanceController::class, 'edit'])->name('backend.performance.edit');
    Route::put('backend/prestasi/{performance}/update', [App\Http\Controllers\Backend\PerformanceController::class, 'update'])->name('backend.performance.update');

     // Tahun ajaran Controller
    Route::get('backend/tahunajaran', [App\Http\Controllers\Backend\TahunajaranController::class, 'index'])->name('backend.tahunajaran.index');

    // SemesterController
    Route::get('backend/semester', [App\Http\Controllers\Backend\SemesterController::class, 'index'])->name('backend.semester.index');

    // Jenis PTK
    Route::get('backend/jenisptk', [App\Http\Controllers\Backend\JenisptkController::class, 'index'])->name('backend.jenisptk.index');

    // Jenis jabtan tugas PTK
    Route::get('backend/jabatantugasptk', [App\Http\Controllers\Backend\TugastambahanptkController::class, 'index'])->name('backend.jabatantugasptk.index');


});

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});

require __DIR__.'/auth.php';
