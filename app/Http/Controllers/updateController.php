<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class updateController extends Controller
{
    //
    public function updateDataAdmin(String $id){
        $data = DB::table('anime_news')->where('id',$id)->first();
        // dd($data);

        return view('updateAdminForm',compact('data'));


    }
}
