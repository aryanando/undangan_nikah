<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index($name = NULL) {
        return view('home', ['name' => $name]);
    }
}
