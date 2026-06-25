<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisteredUserController extends Controller
{
    public function create() {
        return view("auth/register");
    }

    public function store(Request $request) {
        dd(request()->all());

        $request->validate([
            "name" => ["required", "string", "max:255"],
            "email" => ["required", "email", "string", "unique"],
            "password" => ["required", "password", "min:5"]
        ]);

        $user = User::create([
            "name" => $request->name,
            "email" => $request->email,
            "password" => Hash::make($request->password)
        ]);

        Auth::login($user);

        return redirect("posts/index");
    }
}

// User::create([
//     "name" => request("name"),
//     "email" => request("email"),
//     "password" => request("password")
// ]);
