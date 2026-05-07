<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Testing\Fluent\Concerns\Has;

class AuthController extends Controller
{
    public function register(Request $request) {

    if($request->isMethod('post')) {

        $request->validate([
            'name'      => 'required|string|max:100',
            'email'     => 'required|email|unique:users,email',
            'password'  => 'required|string|min:8|confirmed',
            'peso'      => 'nullable|numeric|decimal:2',
            'altura'    => 'nullable|numeric|decimal:2',
        ]);

        $usuario = new User();
        $usuario->name      = $request->name;
        $usuario->email     = $request->email;
        $usuario->password  = Hash::make($request->password);
        $usuario->peso      = $request->peso;
        $usuario->altura    = $request->altura;

        $token = $usuario->createToken('tokenAutenticacion')->plainTextToken;

    }

        

    }
}
