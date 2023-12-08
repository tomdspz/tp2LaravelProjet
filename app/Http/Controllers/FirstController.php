<?php

namespace App\Http\Controllers;
use App\Models\Album;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FirstController extends Controller
{
    function index() {
        $bdd = DB::select("select * from users");
        $images = DB::select("select * from photos");
        return view("index", ["bdd" => $bdd, "images" => $images]);
    }

    function albums() {
        // $albums = DB::select("select * from albums");
        // return view("albums", ["albums" => $albums]);
        $albums = Album::all();
        return view("albums", ["albums" => $albums]);
    }

    function album($id){
        $album = Album::findOrFail($id);
        $photos = DB::select('SELECT * FROM photos WHERE album_id=?', [$id]);
        return view('detailAlbum', ["album" => $album], ["photos" => $photos]);
    }

    function search() {
        return view("search");
    }

    function account() {
        return view("account");
    }

    function ajoutimg(Request $request) {
        // $request ->validate([
        //     "titre"=> "required",
        //     "url"=> "required",
        // ]);
        $titre = $request->input("titre");
        dd($request->input("titre"));
        dd($request->input("url"));
        // $titre = $_POST['titre'];
        // $url = $_POST['url'];
        // echo($titre);
        // echo($url);
        // $bdd = DB::select("select * from users");
        // $images = DB::select("select * from photos");
        // return view("index", ["bdd" => $bdd, "images" => $images]);
        return view("account");
    }

    function login() {
        return view("login");
    }
}
