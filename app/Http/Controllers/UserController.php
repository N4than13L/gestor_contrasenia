<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
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

    public function settings()
    {
        $user = Auth::user();

        return view('settings.setings', [
            'user' => $user
        ]);
    }

    public function update(Request $request, $id)
    {
        $name = $request->input('name');
        $surname = $request->input('surname');
        $email = $request->input('email');

        DB::table('users')
            ->where('id', $id)
            ->update([
                'name' => $name,
                'surname' => $surname,
                'email' => $email
            ]);

        return redirect()->route('settings')->with(['message' => 'Datos actualizados con exito']);
    }
}
