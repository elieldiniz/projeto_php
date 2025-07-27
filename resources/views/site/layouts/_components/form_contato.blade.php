{{-- envio de parametro pelo formulario --}}
{{-- atraves da action define o router com o nome da action, ou melhor para rota site.contato --}}
{{ $slot }}
{{-- o slot é utilizado para incluir o conteudo do formulario de contato na pagina --}}
<form action="{{ route('site.contato') }}" method="post">
    {{-- @csrf é um método do Laravel que gera um token de segurança para o envio do formulario --}}
    {{-- o csrf é uma proteção contra ataques CSRF (Cross-Site Request Forgery) --}}
    {{-- @csrf método para envio de token e liberação do post --}}
    @csrf
    {{-- o name é o nome do campo que sera enviado para o controller --}}
    <input name="nome" value="{{ old('nome') }}" type="text" placeholder="Nome" class={{ $classe }}>
    @if($errors->has('nome'))

    <span class="text-danger"  style="margin-top: 20px; padding: 5px; border-radius: 5px; background-color: #f8d7da; color: #721c24;
    border: 1px solid #f5c6cb;">{{ $errors->first('nome') }}</span>
    @endif
    <br>
    {{-- recebe classe por array asociativos --}}
    <input name="telefone"value="{{ old('telefone') }}"  type="text" placeholder="Telefone" class={{ $classe }}>
    @if($errors->has('telefone'))

    <span class="text-danger"  style="margin-top: 20px; padding: 5px; border-radius: 5px; background-color: #f8d7da; color: #721c24;
    border: 1px solid #f5c6cb;">{{ $errors->first('telefone') }}</span>
    @endif

    <br>
    <input name="email"  value="{{ old('email') }}" type="text" placeholder="E-mail" class={{ $classe }}>
    @if($errors->has('email'))

    <span class="text-danger"  style="margin-top: 20px; padding: 5px; border-radius: 5px; background-color: #f8d7da; color: #721c24;
    border: 1px solid #f5c6cb;">{{ $errors->first('email') }}</span>
    @endif
    <br>

    <select name="motivo_contatos_id" class={{ $classe }}>
        <option value="">Qual o motivo do contato?</option>

        @foreach($motivo_contato as $key => $motivo_contato)}
            <option value="{{ $motivo_contato->id }}" {{ old('motivo_contatos_id') == $motivo_contato->id ? 'selected' : '' }}>
                {{ $motivo_contato->motivo_contato }}
            </option>
        @endforeach
     
    </select>
        @if($errors->has('motivo_contatos_id'))

    <span class="text-danger"  style="margin-top: 20px; padding: 5px; border-radius: 5px; background-color: #f8d7da; color: #721c24;
        border: 1px solid #f5c6cb;">{{ $errors->first('motivo_contatos_id') }}</span>
    @endif
    <br>

    <br>
     <textarea name="mensagem" class="{{ $classe }}">{{ (old('mensagem') != '') ? old('mensagem') : 'Preencha aqui a sua mensagem' }}</textarea>
    @if($errors->has('mensagem'))

    <span class="text-danger"  style="margin-top: 20px; padding: 5px; border-radius: 5px; background-color: #f8d7da; color: #721c24;
        border: 1px solid #f5c6cb;">{{ $errors->first('mensagem') }}</span>
    @endif
    <br>

    <button type="submit" class={{ $classe }}>ENVIAR</button>
</form>


{{-- o include do form_contato.blade.php é utilizado para incluir o formulario de contato na pagina --}}
{{-- o include é utilizado para incluir o formulario de contato na pagina --}}
{{-- @include('site.layouts._components.form_contato') --}}