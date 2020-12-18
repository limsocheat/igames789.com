<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {

        $sliders    = [
            [
                'image_url'     => asset('images/slider/1.jpg'),
            ],
            [
                'image_url'     => asset('images/slider/2.jpg'),
            ],
            [
                'image_url'     => asset('images/slider/3.jpg'),
            ],
            [
                'image_url'     => asset('images/slider/4.jpg'),
            ],
            [
                'image_url'     => asset('images/slider/5.jpg'),
            ],
            [
                'image_url'     => asset('images/slider/6.jpg'),
            ],
        ];

        $data  = [
            'sliders'   => $sliders,
        ];

        return view('pages.index')->with($data);
    }

    public function loyalty()
    {
        return view('pages.loyalty');
    }

    public function promotions()
    {
        return view('pages.promotions');
    }

    public function terms_conditions()
    {
        return view('pages.terms_conditions');
    }

    public function privacy_policy()
    {
        return view('pages.privacy_policy');
    }

    public function responsible_gambling()
    {
        return view('pages.responsible_gambling');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function contact()
    {
        return view('pages.contact');
    }
}
