<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function index() {

        $pageTitle = env('APP_NAME')." - Home";

        return view('index', compact('pageTitle'));
    }

    public function team() {

        $pageTitle = "Our Players - ".env('APP_NAME');

        return view('team', compact('pageTitle'));
    }

    public function fixtures() {

        $pageTitle = "Fixtures - ".env('APP_NAME');

        return view('fixtures', compact('pageTitle'));
    }

    public function standings() {

        $pageTitle = "Standings - ".env('APP_NAME');

        return view('tables', compact('pageTitle'));
    }

    public function shop() {

        $pageTitle= "Our Shop - ".env('APP_NAME');

        return view('shop', compact('pageTitle'));
    }

    public function news() {

        $pageTitle = "Our News - ".env('APP_NAME');

        return view('blog', compact('pageTitle'));
    }

    public function about() {

        $pageTitle = "Club Info - ".env('APP_NAME');

        return view('about', compact('pageTitle'));
    }

    public function contact() {

        $pageTitle = "Contact Us - ".env('APP_NAME');

        return view('contact', compact('pageTitle'));
    }
}
