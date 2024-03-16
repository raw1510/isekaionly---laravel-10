<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class isekaionlyController extends Controller
{
    //
    public function isekaionly(){
        $sliderData = DB::table('anime_news')->orderByDesc('created_at')->get()->take(3);
        $MangasliderData = DB::table('manga_news')->orderByDesc('created_at')->get()->take(3);
        $topAnimePostsInHomepage = DB::table('anime_news')->orderByDesc('id')->skip(3)->take(4)->get();
        $topMangaPostsInHomepage = DB::table('manga_news')->orderByDesc('id')->skip(3)->take(4)->get();

        // dd($sliderData);
        return view('components.isekaionlyComponents',["sliderData"=>$sliderData,"topAnimePostsInHomepage"=>$topAnimePostsInHomepage,"topMangaPostsInHomepage"=>$topMangaPostsInHomepage,'MangasliderData'=>$MangasliderData]);
    }
    // public function topAnimePostsInHomepage(){
        // // Equivalent Laravel query
        // // dd($topAnimePostsInHomepage);    

        // return view('components.isekaionlyComponents',compact('topAnimePostsInHomepage'));
        // // Use $result as needed (e.g., pass it to a view)
        // }
}
