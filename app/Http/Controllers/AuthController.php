<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function index() {
        return view('admin.auth.login');
    }

    public function redister() {
        return view('admin.auth.register');
    }

    public function AdminRegister(Request $request) {
        $request->validate([
            "fullname"=>"required",
            "email"=>"required",
            "password"=>"required"

        ]);

        $user = new User();
        $user->name = $request->fullname;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        if ($user->save()) {
            redirect(route('login'));
        }
        return redirect(route('register'));

    }

    public function login(Request $request) {
        $request->validate([
            "email"=>"required",
            "password"=>"required"
        ]);

        $credentials = $request->only("email","password");
        if(Auth::attempt($credentials)) {
            return redirect()->intended(route('admin-index'));
        }
    }
}
