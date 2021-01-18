<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Response;

class ArtisanController extends Controller
{
    // Run migration --force in production
    public function migrate()
    {
        try {
            echo "init migrate force";
            echo "\n";
            Artisan::call('migrate --force');
            echo "migrate force done";
        } catch (Exception $e) {
            Response::make($e->getMessage(), 500);
        }
    }
}
