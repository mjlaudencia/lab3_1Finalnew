<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }
    public function about(): string
    {
        return view('about');
    }
    public function brand(): string
    {
        return view('brand');
    }
    public function contact(): string
    {
        return view('contact');
    }
}
