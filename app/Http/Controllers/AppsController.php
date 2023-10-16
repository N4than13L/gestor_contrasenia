<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\App;

class AppsController extends Controller
{
    public function index()
    {
        $app = App::all();

        return view('home', [
            'app' => $app
        ]);
    }
}
