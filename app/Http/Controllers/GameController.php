<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GameController extends Controller
{
    public function index(){
        return view('pages.kino');
    }
    public function slot(){
        return view('pages.slot');
    }
    public function lottery(){
        return view('pages.lottery');
    }
}
