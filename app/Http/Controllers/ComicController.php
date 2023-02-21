<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic as Comic;

class ComicController extends Controller
{
    public function getComic(){
        $fumetti = Comic::all();
        $nav_menu = config('db.nav');
        $icons  =config('db.social_icons');
        return view('home', compact('fumetti', 'nav_menu', 'icons'));
    }
}
