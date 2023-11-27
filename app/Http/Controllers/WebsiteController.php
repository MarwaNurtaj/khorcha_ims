<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    //
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        echo "Hello Marwa!";
    }
}
