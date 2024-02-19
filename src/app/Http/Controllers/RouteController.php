<?php

namespace Kody\Common\App\Http\Controllers;

use App\Http\Controllers\Controller;

class RouteController extends Controller
{

    public function index()
    {
        return view('common::route');
    }
}
