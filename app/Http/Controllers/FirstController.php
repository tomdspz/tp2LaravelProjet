<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FirstController extends Controller
{
    function index() {
        return view("index");
    }

    function albums() {
        return view("albums");
    }

    function search() {
        return view("search");
    }

    function account() {
        return view("account");
    }

    function login() {
        return view("login");
    }
}
