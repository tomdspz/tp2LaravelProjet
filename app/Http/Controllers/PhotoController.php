<?php

namespace App\Http\Controllers;

use App\Models\Photos;
use App\Models\Tags;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tags = Tags::all();
        // dd($tags);
        // return view("films.ajoutFilm", ["personnes" => $personnes, "genres" => $genres]);
        return view("photo.ajoutPhoto", ["tags" => $tags]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // -> pour ajouter avec un url
        $request->validate([
            "titre"=> "required",
            "url"=>"required",
        ]);
        $tags = $request->input('tags');
        $albumcourant = $_GET['album'];
        $p = new Photos();
        $p->titre = $request->input("titre");
        $p->url = $request->input("url");
        $p->album_id = $albumcourant;
        $p->id = count(Photos::all()) + 1;
        $p->tags()->attach($tags);
        $p->save();
        return redirect("/album/$albumcourant");


        // -> pour ajouter avec un input de fichier 
        // -> Ici, j'arrive avec le code suivant, si je décommente la ligne 15 et commente les lignes 12 et 13 dans ajoutPhoto.blade.php, à insérer la photo dans la bdd mais une fois que je veux l'afficher sur le site, j'ai un carré bleu avec un point d'interrogation, pourtant, le chemin est correct, ce qui fait que je suis repassé au code ci-dessus avec l'ajout par url.

        // $request->validate([
        //     "titre"=> "required",
        //     "image" => "required | file | mimes:jpg,png",
        // ]);
        // $image = "https://www.benefsnet.com/images/cms/film.gif";
        // if($request->file("image")->isValid() ){
        //     $f = $request->file("image")->hashName();
        //     $request->file("image")->storeAs("public/upload", $f);
        //     $image = "storage/upload/$f";
        // }
        // $tags = $request->input('tags');
        // $albumcourant = $_GET['album'];
        // $p = new Photos();
        // $p->titre = $request->input("titre");
        // $p->url = $image;
        // $p->album_id = $albumcourant;
        // $p->id = count(Photos::all()) + 1;
        // $p->tags()->attach($tags);
        // $p->save();
        // return redirect("/account");
    }

    /**
     * Display the specified resource.
     */
    public function show(Photos $photo)
    {
        // 
    }

    public function destroy($id)
    {
        $photo = Photos::find($id);
        if (!$photo) {
            return redirect()->back();
        }
        Storage::delete($photo->url);
        $photo->delete();
        return redirect()->back();
    }

}
