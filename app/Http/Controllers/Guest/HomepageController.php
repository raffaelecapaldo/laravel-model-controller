<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;


class HomepageController extends Controller
{
    public function index() {
        $ids = Movie::pluck('id');
        $randomindex = rand(0, count($ids) - 1);
        $movie = Movie::find($ids[$randomindex]);
        return view('home', compact('movie'));
    }
}

