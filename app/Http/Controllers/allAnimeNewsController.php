<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class allAnimeNewsController extends Controller
{
    //
    public function allAnimeNews(){
        $data = DB::table('anime_news')->orderByDesc('created_at')->paginate(10);
        // dd($data);   
        return view('components.all_anime_newsComponent',compact('data'));
    }


    public function databaseDataFetchAnime(){
        $data = DB::table('anime_news')->orderByDesc('created_at')->paginate(4);
        // dd($data);
        return view('admin-anime-datafetch-table',compact('data'));
    }
    public function databaseDataFetchManga(){
        $mangadata = DB::table('manga_news')->orderByDesc('created_at')->paginate(4);
        // dd($data);
        return view('admin-manga-datafetch-table',compact('mangadata'));
    }


    public function databaseDataDeleteAnime(String $id)
    {            
            $animeDataFetch = DB::table('anime_news')->where('id',$id)->first();
            $fileName = str_replace("articles/", "", $animeDataFetch->content);
            // dd($animeDataFetch);

            if (Storage::disk('public_articles')->exists($fileName)) {
                Storage::disk('public_articles')->delete($fileName);
            }
            
            if (Storage::disk('public_banner_images')->exists($animeDataFetch->image_url)) {
                Storage::disk('public_banner_images')->delete($animeDataFetch->image_url);
            } else {
                echo "The image does not exist in this directory."; 
            }

            if (Storage::disk('public_thumbnail')->exists($animeDataFetch->thumbnail_url)) {
                Storage::disk('public_thumbnail')->delete($animeDataFetch->thumbnail_url);
                echo $animeDataFetch->thumbnail_url . ' is deleted from folder';
            } else {
                echo "The image does not exist in this directory."; 
            }

            DB::table('anime_news')->where('id',$id)->delete();
            return redirect()->back();


    }
    public function databaseDataDeleteManga(String $id)
    {            
            $mangaDataFetch = DB::table('manga_news')->where('id',$id)->first();
            $fileName = str_replace("articles/manga/", "", $mangaDataFetch->content);
            // dd($mangaDataFetch);

            if (Storage::disk('public_articles_manga')->exists($fileName)) {
                Storage::disk('public_articles_manga')->delete($fileName);
            }

            if (Storage::disk('public_banner_images_manga')->exists($mangaDataFetch->image_url)) {
                Storage::disk('public_banner_images_manga')->delete($mangaDataFetch->image_url);
            } else {
                echo "The image does not exist in this directory."; 
            }

            if (Storage::disk('public_thumbnail_manga')->exists($mangaDataFetch->thumbnail_url)) {
                Storage::disk('public_thumbnail_manga')->delete($mangaDataFetch->thumbnail_url);
                echo $mangaDataFetch->thumbnail_url . ' is deleted from folder';
            } else {
                echo "The image does not exist in this directory."; 
            }

            DB::table('manga_news')->where('id',$id)->delete();
            return redirect()->back();


    }
}
