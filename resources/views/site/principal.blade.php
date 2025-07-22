@extends('site.layouts.basicos')

@section('title','Home')
@section('conteudo')

    <div class="conteudo-destaque">
    
        <div class="esquerda">
            <div class="informacoes">
                <h1>Sistema Super Gestão</h1>
                <p>Software para gestão empresarial ideal para sua empresa.</p> {{-- Corrigido fechamento da tag p --}}
                <div class="chamada">
                    <img src="{{ asset('img/check.png') }}">
                    <span class="texto-branco">Gestão completa e descomplicada</span>
                </div>
                <div class="chamada">
                    <img src="{{ asset('img/check.png') }}">
                    <span class="texto-branco">Sua empresa na nuvem</span>
                </div>
            </div>

            <div class="video">
                <img src="{{ asset('img/player_video.jpg') }}" alt="Vídeo de apresentação do sistema Super Gestão">
            </div>
        </div>

        <div class="direita">
            <div class="contato">
                <h1>Contato</h1>
                <p>Caso tenha qualquer dúvida por favor entre em contato com nossa equipe pelo formulário abaixo.</p> {{-- Corrigido fechamento da tag p --}}
                {{--  --}}
                {{-- o include do form_contato.blade.php é utilizado para incluir o formulario de contato na pagina --}}
                {{-- o include é utilizado para incluir o formulario de contato na pagina --}}
                {{-- @include('site.layouts._components.form_contato') --}}
                @component('site.layouts._components.form_contato',['classe'=> 'borda-preta'])


                @endcomponent
            </div>
        </div>
    </div>
@endsection