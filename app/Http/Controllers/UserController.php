<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Auth;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return vieW('user.index');
    }

    public function update(Request $request)
    {
        $user = User::where('id', Auth::user()->id)->first();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->alamat = $request->alamat;
        $user->nohp = $request->nohp;
        $user->update();

        return redirect(route('home'));
    }
}
