<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class blogPage extends Controller
{
    //
    public function AnimeData (string $id){
        $data = DB::table('anime_news')->where('id',$id)->first();
        // dd($data);
        return view('blogPage',compact('data'));
    }
    public function MangaData (string $id){
        $manga_data = DB::table('manga_news')->where('id',$id)->first();
        // dd($data);
        return view('manga_Blog_page',compact('manga_data'));
    }
}
