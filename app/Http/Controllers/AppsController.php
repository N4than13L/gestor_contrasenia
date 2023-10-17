<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\App;
use Illuminate\Support\Facades\Auth;

class AppsController extends Controller
{
    public function index()
    {
        $app = App::all();

        return view('home', [
            'app' => $app
        ]);
    }

    public function apps()
    {
        return view('apps.apps');
    }

    public function save(Request $request)
    {
        $apps = new App();

        $user = Auth::user();
        $id = $user->id;

        $name = $request->input('name');
        $password = $request->input('password');
        $type = $request->input('type');

        $apps->name = $name;
        $apps->password = $password;
        $apps->type = $type;
        $apps->users_id = $id;

        var_dump($apps);
        die();
    }
}
