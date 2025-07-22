
@extends('site.layouts.basicos')
@section('title',$titulo ?? 'Contato')
@section('conteudo')
    <body>
    
        <div class="conteudo-pagina">
            <div class="titulo-pagina">
                <h1>Entre em contato conosco</h1>
            </div>

            <div class="informacao-pagina">
                <div class="contato-principal">

                    {{-- o include do form_contato.blade.php é utilizado para incluir o formulario de contato na pagina --}}
                    {{-- o include é utilizado para incluir o formulario de contato na pagina --}}
                    @component('site.layouts._components.form_contato',['classe'=> 'borda-preta'])
                        {{--Inclui no form as informaçoes a baixo  com varivael {{ $slot }} --}}
                    <p>A nossa equipe analisará a mensagem</p>
                    <p>e retornará o mais breve possível.</p>
                    @endcomponent
                </div>
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
@endsection