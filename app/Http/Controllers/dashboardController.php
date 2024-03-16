<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class dashboardController extends Controller
{
    //
    public function adminDashboard() {
        $anime_count = DB::table('anime_news')->count();
        $manga_count = DB::table('manga_news')->count();
        $total_post_count = $anime_count + $manga_count;
        // dd($count);
        return view("admin_dashboard",['total_post_count'=>$total_post_count,'anime_count'=>$anime_count,'manga_count'=>$manga_count]);
     }
}
