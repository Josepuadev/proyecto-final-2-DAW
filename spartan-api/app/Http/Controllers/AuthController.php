<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // Registrar usuarios
    public function register(Request $request) {

        if($request->isMethod('post')) {

            // validamos la petición del usuario antes de mandarlo a la BD.
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
            //Guardamos la pass de la request en hash, texto plano es poco seguro.
            $usuario->password  = Hash::make($request->password);
            $usuario->peso      = $request->peso;
            $usuario->altura    = $request->altura;

            $usuario->save();
            // Con este token cuando se registre el usuario lo guardaremos el localstorage
            // en el cliente con angular, asi cuando se registre tendrá su sesion abierta.
            $token = $usuario->createToken('tokenAutenticacion')->plainTextToken;

            return response()->json([
                'user'  => $usuario,
                'token' => $token,
            ], 201);

        } else {
            return response()->json([
                'message' => 'Método no permitido'
            ], 405);
        }

    }

    // Logear usuarios
    public function login(Request $request) {

        if ($request->isMethod('POST')) {
            
            $request->validate([
                'email'    =>   'required|email',
                'password' =>   'required|string',
            ]);

            // Forma de filtrar por columna email y verificar que la contraseña es correcta
            $usuario = User::where('email', $request->email)->first();
            
            /*
            Fusiono la evaluacion las 2 cosas en el mismo if ya que el Hash requiere que se valide primero
            si el usuario realmente existe, por lo que se pregunta en ambos del if uno después del otro para saber si es true
            */
            if (!$usuario || !Hash::check($request->password, $usuario->password)) {
                return response()->json([
                    'message' => 'Credenciales incorrectas'
                ], 401);
            }

            $token = $usuario->createToken('tokenAutenticacion')->plainTextToken;

            return response()->json([
                'user' => $usuario,
                'token' => $token,
            ], 200);

        } else {
            return response()->json([
                'message' => 'Método no permitido'
            ], 405);
        }
    }

    // Deslogear usuarios
    public function logout(Request $request) {
        // Mandos la peticion con la info del usuario que queremos deslogear
        // en este caso el usaer y borramos su token de acceso
        $request->user()->currentAccessToken()->delete();

        return response()->json([
            'message' => 'Cerrada sesión correctamente',
        ], 200);
    }
}
