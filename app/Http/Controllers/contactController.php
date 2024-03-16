<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Contracts\Service\Attribute\Required;

class contactController extends Controller
{
    //
    public function contactUsView(){
        return view('isekaionly_contact_us');
    }
    public function contactUsAddData(Request $req){
        $req->validate([
            'name'=>'required',
            'email'=>'required|email',
            'message'=>'required|max:450'
        ]);
        $data = DB::table('contacts')->insert([
            'name'=>$req->name,
            'email'=>$req->email,
            'message'=>$req->message,
            'created_at'=>now(),
            'updated_at'=>now()
        ]);
        return redirect()->route('contactUsView');
    }
}
