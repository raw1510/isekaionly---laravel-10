<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class allMangaNewsController extends Controller
{
    //
    public function allMangaNews(){
        $data = DB::table('manga_news')->orderByDesc('created_at')->paginate(10);
        // dd($data);
        return view('components.all_manga_newsComponent',compact('data'));
    }
}
