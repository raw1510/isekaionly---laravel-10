<?php

use App\Http\Controllers\allAnimeNewsController;
use App\Http\Controllers\allMangaNewsController;
use App\Http\Controllers\topAnimePostsHomepageController;
use App\Http\Controllers\Anime_new;
use App\Http\Controllers\blogPage;
use App\Http\Controllers\contactController;
use App\Http\Controllers\contactUsController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\deleteAdminController;
use App\Http\Controllers\isekaionlyController;
use App\Http\Controllers\updateController;
use App\Http\Controllers\AdminController;
use App\Http\Middleware\AdminMiddleware;

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
//2
// Route::get('/anime_form',[Anime_new::class,'anime_form'])->name('anime_news.homepage');
// Route::get('/manga_form',[Anime_new::class,'manga_form'])->name('manga_news.homepage');


Route::get('/navbar',function(){
    return view('components.navbar');
});

// Route::get('/blog',function(){
//     return view('blogPage');
// });

Route::Post('/anime_news_post',[Anime_new::class,'addDataAnime'])->name('anime_news.post');
Route::Post('/manga_news_post',[Anime_new::class,'addDataManga'])->name('manga_news.post');


Route::get('/AnimeNews/{id}',[blogPage::class,'AnimeData'])->name('blogPage.dataFetch');

Route::get('/MangaNews/{id}',[blogPage::class,'MangaData'])->name('MangablogPage.dataFetch');


Route::get('/',[isekaionlyController::class,'isekaionly'])->name('isekaionly.homepage');


Route::get('/allAnimeNews',[allAnimeNewsController::class,'allAnimeNews'])->name('allAnimeNews.homepage');

Route::get('/allMangaNews',[allMangaNewsController::class,'allMangaNews'])->name('allMangaNews.homepage');

//1
// Route::get('/dashboard',[dashboardController::class,'adminDashboard'])->name('admin.dashboard');

//3
// Route::get('/admin-data-section',function(){
//     return view('admin_data_section');
// })->name('admin.data.fetch');

//4
// Route::get('/admin-anime-data-fetch',[allAnimeNewsController::class,'databaseDataFetchAnime'])->name('admin.databse.animeTableFetch');

//5
// Route::get('/admin-anime-data-delete/{id}',[allAnimeNewsController::class,'databaseDataDeleteAnime'])->name('admin.databse.animeTableDelete');

//6
// Route::get('/admin-manga-data-delete/{id}',[allAnimeNewsController::class,'databaseDataDeleteManga'])->name('admin.databse.mangaTableDelete');
//7
// Route::get('/admin-manga-data-fetch',[allAnimeNewsController::class,'databaseDataFetchManga'])->name('admin.databse.mangaTableFetch');


Route::get('/contact-us',[contactController::class,'contactUsView'])->name('contactUsView');
Route::post('/contact-us-post',[contactController::class,'contactUsAddData'])->name('contactUsAddData');

Route::get('/update-anime-articles/{id}',[updateController::class,'updateDataAdmin'])->name('anime.update.articles');


Route::get('/admin/login', [AdminController::class,'showLoginForm'])->name('admin.login.form');

Route::post('/admin/login', [AdminController::class,'login'])->name('admin.login');




Route::middleware([AdminMiddleware::class])->group(function () {
    //dashboard
    Route::get('/dashboard',[dashboardController::class,'adminDashboard'])->name('admin.dashboard');

    //admin article add form
    Route::get('/anime_form',[Anime_new::class,'anime_form'])->name('anime_news.homepage');

    //manga article add form
    Route::get('/manga_form',[Anime_new::class,'manga_form'])->name('manga_news.homepage');

    //database show 2 section
    Route::get('/admin-data-section',function(){
        return view('admin_data_section');
    })->name('admin.data.fetch');

    //fetching all the data from the database (displaying all the data) anime
    Route::get('/admin-anime-data-fetch',[allAnimeNewsController::class,'databaseDataFetchAnime'])->name('admin.databse.animeTableFetch');
    //delete query anime
    Route::get('/admin-anime-data-delete/{id}',[allAnimeNewsController::class,'databaseDataDeleteAnime'])->name('admin.databse.animeTableDelete');

    //fetching all the data from the database (displaying all the data) manga
    Route::get('/admin-manga-data-delete/{id}',[allAnimeNewsController::class,'databaseDataDeleteManga'])->name('admin.databse.mangaTableDelete');
    //delete query manga
    Route::get('/admin-manga-data-fetch',[allAnimeNewsController::class,'databaseDataFetchManga'])->name('admin.databse.mangaTableFetch');

    //logout
    Route::get('/deleteSession',[AdminController::class,'sessionDelete'])->name('DeleteSession.logout');

});