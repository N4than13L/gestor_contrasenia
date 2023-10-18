<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AppsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

        $app = App::orderBy('id', 'desc')->paginate(5);

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

        $apps->save();

        return redirect()->route('home')->with(['message' => 'Aplicación agregada con exito']);
    }

    public function delete($id)
    {
        $user = Auth::user();
        $apps = App::find($id);

        if ($user->id == $apps->users_id) {
            $apps->delete();
        }

        return redirect()->route('home')->with(['message' => 'Aplicación eliminada con exito']);
    }


    public function edit($id)
    {
        $app = App::find($id);

        return view('apps.edit', [
            'app' => $app
        ]);
    }


    public function update(Request $request, $id)
    {
        $user = Auth::user();
        $id_user = $user->id;

        $apps = new App();

        $name = $request->input('name');
        $password = $request->input('password');
        $type = $request->input('type');
        $apps->users_id = $id_user;

        DB::table('apps')
            ->where('id', $id)
            ->update([
                'name' => $name,
                'password' => $password,
                'type' => $type,
                'users_id' => $id_user
            ]);

        return redirect()->route('home')->with(['message' => 'Aplicación actualizados con exito']);
    }


    public function password($id)
    {
        $app = App::find($id);

        return view('apps.password', [
            'app' => $app
        ]);
    }
}
