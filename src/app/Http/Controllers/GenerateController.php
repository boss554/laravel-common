<?php

namespace Kody\Common\App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class GenerateController extends Controller
{

    public function index()
    {
        return view('common::route');
    }


    public function generate(Request $request)
    {
        $migration =  "";
        $model =  "";
        $controller =  "";

        $module_name = ucfirst($request->module_name);
        $module_name = ucfirst('hello');
        $command = "make:model $module_name -mcr";

        // Execute the Artisan command
        Artisan::call($command);
        $output = Artisan::output();
        echo nl2br($output);
    }
}
