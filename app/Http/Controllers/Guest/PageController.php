<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;

class PageController extends Controller
{
    public function index(){
        $movies = Movie::all();
        return view('welcome', compact('movies'));
    }

    public function data(){
        $movies = Movie::orderBy('date','DESC')->get();
        return view('welcome', compact('movies'));
    }
}
