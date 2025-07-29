<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('site.login',['titulo' => 'Login']);
    }

    public function autenticar(Request $request)
    {
        echo "Usuário: {$request->get('usuario')}<br>";
      
    }
    
    // Add other methods related to login functionality here
}
