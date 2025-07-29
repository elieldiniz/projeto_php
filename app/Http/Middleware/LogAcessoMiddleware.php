<?php

namespace App\Http\Middleware;
use App\LogAcesso;
use Closure;

class LogAcessoMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {   

        $ip = $request->server->get('REMOTE_ADDR'); 
        $rota = $request->getRequestUri();
        
        LogAcesso::create([
            'log' => "Acesso de IP: $ip na rota: $rota"
        ]);

        $response = $next($request);

        $response->setStatusCode(201 ,'O status da resposta e p yexyo da resposta foram modificados');

        return $response; // Return the response to continue the request lifecycle
        //return Response("Acesso registrado com sucesso! <br> IP: $ip <br> Rota: $rota <br> Log: $logs");

    }
}
