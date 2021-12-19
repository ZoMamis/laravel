<?php

namespace App\Http\Controllers;


class IndexController extends Controller{

    public function register(){
        return view('User.register');
    }
    public function dash(){
        return view('page.listeaudio');
    }
}