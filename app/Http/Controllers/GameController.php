<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GameController extends Controller
{
    public function index()
    {
        return view('pages.kino');
    }
    public function slot()
    {
        return view('pages.slot');
    }
    public function lottery()
    {
        return view('pages.lottery');
    }

    public function baccarat()
    {
        return view('games.baccarat');
    }

    public function baccarat_ins()
    {
        return view('games.baccarat_ins');
    }

    public function dragon_tiger()
    {
        return view('games.dragon_tiger');
    }

    public function roulette()
    {
        return view('games.roulette');
    }

    public function xocdia()
    {
        return view('games.xocdia');
    }

    public function fantan()
    {
        return view('games.fantan');
    }

    public function belangkai()
    {
        return view('games.belangkai');
    }
}
