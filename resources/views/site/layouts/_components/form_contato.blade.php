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
    <input name="name" type="text" placeholder="Nome" class={{ $classe }}>
    <br>
    {{-- recebe classe por array asociativos --}}
    <input name="telefone" type="text" placeholder="Telefone" class={{ $classe }}>
    <br>
    <input name="email" type="text" placeholder="E-mail" class={{ $classe }}>
    <br>
    <select name="motivo_contato" class={{ $classe }}>
        <option value="">Qual o motivo do contato?</option>
        <option value="1">Dúvida</option>
        <option value="2">Elogio</option>
        <option value="3">Reclamação</option>
    </select>
    <br>

    <textarea name="mensagem" class={{ $classe }}>Preencha aqui a sua mensagem</textarea>
    <br>
    <button type="submit" class={{ $classe }}>ENVIAR</button>
</form>
{{-- o include do form_contato.blade.php é utilizado para incluir o formulario de contato na pagina --}}
{{-- o include é utilizado para incluir o formulario de contato na pagina --}}
{{-- @include('site.layouts._components.form_contato') --}}