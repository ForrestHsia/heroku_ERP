<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    function pb()
    {
        $versa = $_GET['versee'];
        $level = $versa * 33.74225;
        return view('home',
        [
            'ver' => $versa,
            'level' => $level
        ]);
    }
}
