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
        $albums = Album::all();
        $photos = Photos::all();
        return view("albums", ["albums" => $albums, "photos" => $photos]);
    }

    function album($id){
        $album = Album::findOrFail($id);
        $photos = DB::select('SELECT * FROM photos WHERE album_id=?', [$id]);
        $tags = DB::select("SELECT * FROM tags");
        return view('detailAlbum', ["album" => $album, "photos" => $photos, "tags" => $tags]);
    }

    function tag($id){
        $images = DB::select("SELECT * FROM photos INNER JOIN possede_tag ON photos.id = possede_tag.photo_id WHERE possede_tag.tag_id = ?", [$id]);
        $tags = DB::select("SELECT * FROM tags");
        return view("index", ["images" => $images], ["tags" => $tags]);
    }

    function search() {
        return view("search");
    }

    function account() {
        $user = Auth::user()->id;
        $useralbums = DB::select('SELECT * FROM albums WHERE user_id=?', [$user]);
        $photos = Photos::all();
        return view("account", ["useralbums" => $useralbums, "photos" => $photos]);
    }
}
