<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\App;


use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * The trusted proxies for this application.
     *
     * @var array|string
     */
    protected $array_img_firebase;

    public function show(){
        return view('home');
    }

    public function changeLang($locale){
        App::setLocale($locale);
        return view('home');
    }
}
