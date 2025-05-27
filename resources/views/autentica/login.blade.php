<h1>Usuários</h1>
<hr>
@if ($errors->any())
    <div style="color:red">
        <h3>Erro :3</h3>
    </div>
    <ul>
        @foreach ($errors->all() as $err)
            <li>{{ $err }}</li>
        @endforeach
    </ul>
@endif
<form action="{{ route('autentica.login') }}" method="post">
    @csrf
    <input type="text" name = "email" placeholder="Email" value = "{{ old('email') }}">
    <input type="password" name = "password" placeholder="Senha">
   
    <input type="submit" value = "Enviar">
</form>