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

        if ($page == "test") {
            return view('template.test');
        }
        if ($page == "pay_page") {
            return view('template.pay_page');
        }
        if ($page == "listall_page") {
            return view('template.listall_page');
        }
        if ($page == "ratepay_page") {
            return view('template.ratepay_page');
        }
        if ($page == "risk_page") {
            return view('template.risk_page');
        }
        if ($page == "turnover_page") {
            return view('template.turnover_page');
        }
        if ($page == "main_page") {
            return view('template.main_page');
        }
   


    }
}
