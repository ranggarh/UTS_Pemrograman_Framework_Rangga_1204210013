<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index()
    {
        $pageTitle = 'Dashboard My Inventory | Rangga Raditya H';

        return view('home', ['pageTitle' => $pageTitle]);
    }

}
