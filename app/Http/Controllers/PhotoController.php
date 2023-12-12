<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Http\Request;

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
        return view("photo.ajoutPhoto");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "titre"=> "required",
            "url"=>"required",
        ]);
        $p = new Photo();
        $p->titre = $request->input("titre");
        $p->url = $request->input("url");
        $p->save();
        return redirect("/account");
    }

    /**
     * Display the specified resource.
     */
    public function show(Photo $photo)
    {
        //
    }
}
