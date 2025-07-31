<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class LoginController extends Controller
{
    public function index(Request $request)
    {

        $erro ='';

        if($request->get('erro') == 1) {
            $erro = 'Usuário e/ou senha não existem';
        }

    {

        return view('site.login',['titulo' => 'Login' ,'erro' => $erro]);
    }
    }

    public function autenticar(Request $request)
    {
       $regras = [
           'email' => 'email',
           'senha' => 'required'
       ];

       $feedback = [
           'email.email' => 'O campo e-mail precisa ser um e-mail válido.',
           'senha.required' => 'O campo senha é obrigatório.'
       ];

       $request->validate($regras, $feedback);

       $email = $request->get('usuario');
       $senha = $request->get('senha');

       $user = new User();

       $usuario = $user->where('email', $email)->where('password', $senha )->get()->first();
       
      if(isset($usuario->nome)) {
           echo "Usuário existe: $usuario->nome <br>";
       } else {
           return redirect()->route('site.login',['erro' => '1']);

       }


    }
    

}
