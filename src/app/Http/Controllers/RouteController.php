<?php

namespace Kody\Common\app\Http\Controllers;

use App\Http\Controllers\Controller;

class RouteController extends Controller
{

    public function index()
    {
        return view('common::route');
    }
}
