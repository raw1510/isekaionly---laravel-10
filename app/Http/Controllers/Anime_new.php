<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\File;


class Anime_new extends Controller
{
    //
    public function anime_form(){
        return view('admin_anime_form');
    }

    public function manga_form(){
        return view('admin_manga_form');
    }



    public function addDataAnime(Request $req){

        //generating the file 
        $fileName = str_replace(' ', '', $req->title) . '.txt';
        $filePath = public_path('articles') . '/' . $fileName;
        $filePathToBeStoredIndataBase = "articles/".$fileName;

        // Save the article content to the file
        File::put($filePath, $req->content);

        //images names
        $bannageImageName=time().'.'.$req->banner_image->extension();
        $thumbnailImageName=time().'.'.$req->thumbnail->extension();

        $req->banner_image->move(public_path('banner_images'),$bannageImageName);
        $req->thumbnail->move(public_path('thumbnail'),$thumbnailImageName);

        
        $req->validate([
            'title'=>'required',
            'content'=>'required',
        ]);
        $data = DB::table('anime_news')->insert([
            'title'=>$req->title,
            'Date'=>$req->date,
            'content'=>$filePathToBeStoredIndataBase,
            //uploading image
            'image_url'=>$bannageImageName,
            'thumbnail_url'=>$thumbnailImageName,
            'created_at'=>now(),
            'updated_at'=>now(),

        ]);
        return Redirect()->route('anime_news.homepage');
    }




    public function addDataManga(Request $req){

        //generating the file 
        $fileName = str_replace(' ', '', $req->title) . '.txt';
        $filePath = public_path('articles/manga') . '/'.$fileName;
        $filePathToBeStoredIndataBase = "articles/manga/".$fileName;

        // Save the article content to the file
        File::put($filePath, $req->content);

        //images names
        $bannageImageName=time().'.'.$req->banner_image->extension();
        $thumbnailImageName=time().'.'.$req->thumbnail->extension();

        $req->banner_image->move(public_path('banner_images/manga_banner_images'),$bannageImageName);
        $req->thumbnail->move(public_path('thumbnail/manga_thumbnail'),$thumbnailImageName);

        $data = DB::table('manga_news')->insert([
            'Manga_title'=>$req->title,
            'Date'=>$req->date,
            'content'=>$filePathToBeStoredIndataBase,
            //uploading image
            'image_url'=>$bannageImageName,
            'thumbnail_url'=>$thumbnailImageName,
            'created_at'=>now(),
            'updated_at'=>now(),

        ]);
        
        return Redirect()->route('manga_news.homepage');
    }
}
