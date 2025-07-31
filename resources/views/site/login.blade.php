
@extends('site.layouts.basicos')
@section('title',$titulo ?? 'Contato')
@section('conteudo')
    <body>
    
        <div class="conteudo-pagina">
            <div class="titulo-pagina">
                <h1>Login</h1>
            </div>

            <div class="informacao-pagina">

            <div style="width: 30%; margin-left: auto; margin-right: auto;">

                <form action="{{ route('site.login') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <input name='usuario' value="{{ old('usuario') }}" type="text"  class="borda-preta" required>
                        {{ $errors->has('usuario') ? $errors->first('usuario') : '' }}
                        <input name='senha' value="{{ old('senha') }}" type="password" class="borda-preta" required>
                        {{ $errors->has('senha') ? $errors->first('senha') : '' }}
                        <button type="submit" class="borda-preta">acessar</button>
                    </div> 
                </form>

                {{isset($erro) && $erro == 1 ? 'Usuário e/ou senha não existem' : '' }}
             
            </div>
        </div>

        <div class="rodape">
            <div class="redes-sociais">
                <h2>Redes sociais</h2>
                <img src="img/facebook.png">
                <img src="img/linkedin.png">
                <img src="img/youtube.png">
            </div>
            <div class="area-contato">
                <h2>Contato</h2>
                <span>(11) 3333-4444</span>
                <br>
                <span>supergestao@dominio.com.br</span>
            </div>
            <div class="localizacao">
                <h2>Localização</h2>
                <img src="img/mapa.png">
            </div>
        </div>
    </body>
@endsection

