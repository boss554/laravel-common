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
        return view('common::generate');
    }

    public function generate(Request $request)
    {
        // Validate the input
        $request->validate([
            'module_name' => 'required|string',
            'modules' => 'required|array',
        ]);

        $module_name = $request->module_name;
        // Checkboxes from the request
        $module_name = str_replace(' ', '', ucwords(str_replace('_', ' ', $module_name)));

        $modules = $request->modules; //array

        $migrationOutput = null;
        $controllerOutput = null;
        $factoryOutput = null;
        $seederOutput = null;

        // Generate migration if 'migration' checkbox is checked
        if (in_array('model', $modules)) {
            Artisan::call("make:model {$module_name} -m");
            $migrationOutput = Artisan::output();
        }

        // Generate controller if 'controller' checkbox is checked
        if (in_array('controller', $modules)) {
            $folder = $request->folder_name;
            Artisan::call("make:controller {$folder}/{$module_name}Controller");


            // Artisan::call("make:controller {$module_name}Controller");
            $controllerOutput = Artisan::output();
        }

        // Generate factory if 'factory' checkbox is checked
        if (in_array('factory', $modules)) {
            Artisan::call("make:factory {$module_name}Factory");
            $factoryOutput = Artisan::output();
        }

        // Generate seeder if 'seeder' checkbox is checked
        if (in_array('seeder', $modules)) {
            Artisan::call("make:seeder {$module_name}Seeder");
            $seederOutput = Artisan::output();
        }

        return response()->json([
            'message' => 'Modules created successfully!',
            'migration_output' => $migrationOutput,
            'controller_output' => $controllerOutput,
            'factory_output' => $factoryOutput,
            'seeder_output' => $seederOutput,
        ]);
    }
}
