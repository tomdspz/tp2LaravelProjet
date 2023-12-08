<?php

namespace App\Http\Controllers;

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
        $albums = DB::select("select * from albums");
        return view("albums", ["albums" => $albums]);
    }

    function search() {
        return view("search");
    }

    function account() {
        return view("account");
    }

    function ajoutImg() {
        
        return view("account");
    }

    function login() {
        return view("login");
    }
}
