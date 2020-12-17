<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SportbookController extends Controller
{
    public function index(){
        return view('pages.sportbooks');
    }
}
