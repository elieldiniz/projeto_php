<?php

namespace App\Http\Middleware;

use Closure;

class AutenticacaoMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next,$metodo_autenticacao, $perfil )
    {
        echo "Método de autenticação: $metodo_autenticacao <br> $perfil ";

        if($metodo_autenticacao === 'padrao'){
            echo "Método de autenticação padrão <br   $perfil" ;
        }

        if($metodo_autenticacao === 'ldap'){
            echo "Método de autenticação LDAP <br>  $perfil";
        }
 
        return Response("Acesso permitido apenas para usuários autenticados.");
    }
}
