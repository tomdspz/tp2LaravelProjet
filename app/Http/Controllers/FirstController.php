<?php

namespace App\Http\Controllers;
use App\Models\Album;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use App\Models\Photos;

class FirstController extends Controller
{
    function index(Request $request) {
        $images = DB::select("SELECT * FROM photos");
        $tags = DB::select("SELECT * FROM tags");
        return view("index", ["images" => $images], ["tags" => $tags]);
    }

    function albums() {
        // $albums = DB::select("select * from albums");
        // return view("albums", ["albums" => $albums]);
        $albums = Album::all();
        $photos = Photos::all();
            // // Supposons que vous ayez l'ID de l'album que vous voulez récupérer
            // $albumId = 1;

            // // Récupérez l'album
            // $album = Album::find($albumId);

            // // Appel de la fonction photos pour obtenir les photos associées à cet album
            // $photos = $album->photos;
        // dd($albums);
        // $photosalbum = DB::select('SELECT * FROM photos INNER JOIN albums ON photos.album_id = albums.id WHERE photos.album_id = ?', [$albums->id]);
        // $photosalbum = DB::select('SELECT url FROM photos INNER JOIN albums ON photos.album_id = albums.id WHERE photos.album_id = 1');
        // dd($photosalbum);
        return view("albums", ["albums" => $albums, "photos" => $photos]);
    }

    function album($id){
        $album = Album::findOrFail($id);
        $photos = DB::select('SELECT * FROM photos WHERE album_id=?', [$id]);
        $tags = DB::select("SELECT * FROM tags");
        // dd($tags, $photos);
        return view('detailAlbum', ["album" => $album, "photos" => $photos, "tags" => $tags]);
    }

    function search() {
        return view("search");
    }

    function account() {
        $user = Auth::user()->id;
        $useralbums = DB::select('SELECT * FROM albums WHERE user_id=?', [$user]);
        // dd($useralbums);
        return view("account", ["useralbums" => $useralbums]);
    }

    function ajoutimg(Request $request) {
        // $request ->validate([
        //     "titre"=> "required",
        //     "url"=> "required",
        // ]);
        // $titre = $request->input("titre");
        // dd($request->input("titre"));
        // dd($request->input("url"));
        // $titre = $_POST['titre'];
        // $url = $_POST['url'];
        // echo($titre);
        // echo($url);
        // $bdd = DB::select("select * from users");
        // $images = DB::select("select * from photos");
        // return view("index", ["bdd" => $bdd, "images" => $images]);
        // return view("account");
    }

    // function login() {
    //     return view("login");
    // }
}
