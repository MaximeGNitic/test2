<?php

namespace App\Http\Controllers;

use App\Models\Taches;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('api');
    }
    
    public function login(Request $request){
        if(!auth()->attempt([
            'user_email' => $request->input('email'),
            'password' => $request->input('password')
        ])){
            return 'invalide';
        }

        $user = auth()->user();

        //Erreur ici, mais fonctionne
        $token = $user->createToken('token')->plainTextToken;

        $cookie = cookie('jwt', $token, 60 * 24);

        return response([
            'message' => 'succes',
            'user' => auth()->user(),
            'token' => $token
        ],)->withCookie($token);
    }

    public function register(Request $request){
        $user = User::create([
            'role_id' => $request->input('role'),
            'user_nom' => $request->input('nom'),
            'user_email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'user_fiche' => $request->input('fiche')
        ]);

        $token = auth()->login($user);

        return response([
            'status' => 'succes',
            'user' => $user,
            'token' => $token
        ]);
    }

    public function user(){
        return response([
            //'user' => auth()->user()
            Taches::where('id', '=', 1)->get()
        ]);
    }
}
