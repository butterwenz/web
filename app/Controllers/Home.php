<?php

namespace App\Controllers;
use App\Models\NewsModel;
class Home extends BaseController
{
    public function index()
    {
        return view('index');
    }
    public function register()
    {
        return view('register');
    }
    public function login()
    {
        return view('login');
    }
    public function addsong()
    {
        return view('addsong');
    }
    public function Listen_song()
    {
        return view('Listen_song');
    }
}
