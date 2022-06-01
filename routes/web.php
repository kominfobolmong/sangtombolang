<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', [App\Http\Controllers\PageController::class, 'index']);
Route::get('/visi-misi', [App\Http\Controllers\PageController::class, 'visimisi']);
Route::get('/dasar-hukum', [App\Http\Controllers\PageController::class, 'dasarhukum']);
Route::get('/arti-lambang', [App\Http\Controllers\PageController::class, 'artilambang']);
Route::get('/bupati', [App\Http\Controllers\PageController::class, 'bupati']);
Route::get('/wakil-bupati', [App\Http\Controllers\PageController::class, 'wakilBupati']);
Route::get('/sekda', [App\Http\Controllers\PageController::class, 'sekda']);
Route::get('/sejarah', [App\Http\Controllers\PageController::class, 'sejarah']);
Route::get('/event', [App\Http\Controllers\PageController::class, 'event']);
Route::get('/event-detail/{events:id}', [App\Http\Controllers\PageController::class, 'eventDetail']);
Route::get('/berita', [App\Http\Controllers\PageController::class, 'berita']);
route::get('/berita-detail/{berita:id}', [App\Http\Controllers\PageController::class, 'beritaDetail'])->name('berita-detail');
route::get('/berita-cari', [App\Http\Controllers\Pagecontroller::class, 'hascarberita']);
Route::get('/dinas', [App\Http\Controllers\PageController::class, 'dinas']);
Route::get('/kecamatan', [App\Http\Controllers\PageController::class, 'kecamatan']);
Route::get('/badandaerah', [App\Http\Controllers\PageController::class, 'badandaerah']);
Route::get('/desa', [App\Http\Controllers\PageController::class, 'desa']);
Route::get('/wisata', [App\Http\Controllers\PageController::class, 'wisata']);

Route::get('/cari-kategori/{category:id}', [App\Http\Controllers\PageController::class, 'kategori'])->name('cari-kategori');
Route::get('/cari-tag/{tag:id}', [App\Http\Controllers\PageController::class, 'tag'])->name('cari-tag');

Route::get('/puskesmas', [App\Http\Controllers\PageController::class, 'puskesmas']);
Route::get('/download', [App\Http\Controllers\PageController::class, 'download']);
route::get('/getdownload/{downloads:id}', [App\Http\Controllers\PageController::class, 'getDownload'])->name('getdownload');
route::get('/pengumuman-detail/{pengumuman:id}', [App\Http\Controllers\PageController::class, 'pengumumanDetail'])->name('pengumuman-detail');
route::get('/pengumuman-cari', [App\Http\Controllers\Pagecontroller::class, 'hascarpengumuman']);
route::get('/event-detail/{event:id}', [App\Http\Controllers\PageController::class, 'eventDetail'])->name('event-detail');

Auth::routes(['register' => false]);

Route::prefix('admin')->group(function () {

    Route::group(['middleware' => 'auth'], function () {

        //dashboard
        Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('admin.dashboard.index');

        //permissions
        Route::resource('/permission', App\Http\Controllers\Admin\PermissionController::class, ['except' => ['show', 'create', 'edit', 'update', 'delete'], 'as' => 'admin']);

        //roles
        Route::resource('/role', App\Http\Controllers\Admin\RoleController::class, ['except' => ['show'], 'as' => 'admin']);

        //users
        Route::resource('/user', App\Http\Controllers\Admin\UserController::class, ['except' => ['show'], 'as' => 'admin']);

        //tags
        Route::resource('/tag', App\Http\Controllers\Admin\TagController::class, ['except' => 'show', 'as' => 'admin']);

        //categories
        Route::resource('/category', App\Http\Controllers\Admin\CategoryController::class, ['except' => 'show', 'as' => 'admin']);

        //news
        Route::resource('/news', App\Http\Controllers\Admin\NewsController::class, ['except' => 'show', 'as' => 'admin']);

        //download
        Route::resource('/file', App\Http\Controllers\Admin\FileController::class, ['except' => 'show', 'as' => 'admin']);

        //banners
        Route::resource('/banner', App\Http\Controllers\Admin\BannerController::class, ['except' => 'show', 'as' => 'admin']);

        //services
        Route::resource('/service', App\Http\Controllers\Admin\ServiceController::class, ['except' => 'show', 'as' => 'admin']);

        //event
        Route::resource('/event', App\Http\Controllers\Admin\EventController::class, ['except' => 'show', 'as' => 'admin']);

        //photo
        Route::resource('/photo', App\Http\Controllers\Admin\PhotoController::class, ['except' => ['show', 'create', 'edit', 'update'], 'as' => 'admin']);

        //video
        Route::resource('/video', App\Http\Controllers\Admin\VideoController::class, ['except' => 'show', 'as' => 'admin']);

        //slider
        Route::resource('/slider', App\Http\Controllers\Admin\SliderController::class, ['except' => ['show', 'create', 'edit', 'update'], 'as' => 'admin']);

        //profile
        Route::resource('/profile', App\Http\Controllers\Admin\ProfileController::class, ['except' => ['show'], 'as' => 'admin']);

        //potensi
        Route::resource('/potensi', App\Http\Controllers\Admin\PotensiController::class, ['except' => ['show'], 'as' => 'admin']);

        Route::resource('/contact', App\Http\Controllers\Admin\ContactController::class, ['except' => ['show'], 'as' => 'admin']);

        Route::resource('/link', App\Http\Controllers\Admin\LinkController::class, ['except' => ['show'], 'as' => 'admin']);
    });
});
