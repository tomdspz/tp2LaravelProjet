<?php

namespace App\Http\Controllers;

use App\Models\Album;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Laravel\Fortify\Fortify;
use Illuminate\Support\Facades\Auth;


class AlbumController extends Controller
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
        $album = Album::all();
        return view("album.ajoutAlbum", ["album" => $album]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "titre"=> "required",
        ]);
        $datecreation = DB::select("SELECT DATE(NOW()) AS currentdate");
        $user = Auth::user()->id;
        $a = new Album();
        $a->titre = $request->input("titre");
        $a->creation = $datecreation[0]->currentdate;
        $a->user_id = $user;
        $a->save();
        return redirect("/albums");
    }

    /**
     * Display the specified resource.
     */
    public function show(Album $album)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Album $album)
    {
        //
    }
}
