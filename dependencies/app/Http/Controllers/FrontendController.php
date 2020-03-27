<?php

namespace App\Http\Controllers;

use App;

class FrontendController extends Controller
{

    public function __construct()
    {

    }

    public function index($page = "")
    {

        if ($page == "") {
            return view('template.home');
        }

        if ($page == "register") {
            return view('template.register');
        }

    }
}
