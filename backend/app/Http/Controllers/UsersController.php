<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    public function login(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('jelszo');

        $request->validate([
            'email' => 'required|email',
            'jelszo' => 'required',
        ]);
        $user = User::where('email', $email)->first();
        if (!$user || !Hash::check($password, $password ? $user->jelszo : '')) {
            return response([
                'message' => 'Invalid email or password'
            ], 404);
        }

        //régi token törlése és új létrehozása
        $user->tokens()->delete();
        $user->token = $user->createToken('acces')->plainTextToken;
        //abilities can be set https://laravel.com/docs/11.x/sanctum#token-abilities
        //$token = $user->createToken('token-name', ['server:update']);
        return response([
            'user' => $user,
        ]);
    }
}
