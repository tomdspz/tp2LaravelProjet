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
}
