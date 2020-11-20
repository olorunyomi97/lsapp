<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Welcome To Laravel Bitches';
        return view('pages.index', compact('title'));
    }

    public function about(){
        $title = 'About Laravel Bitches';
        return view('pages.about', compact('title'));
    }

    public function services(){
        $data = array(
            'title' => 'Services with Laravel Bitches',
            'services' => ['Web Design', 'Bitches', 'More Bitches']

        );
        return view('pages.services')->with($data);
    }
}
