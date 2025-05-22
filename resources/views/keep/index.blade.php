<h1>OLÁ 🪶🪶🪶</h1>
<p>Fire Spirit Cookie.</p>
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
<a href="{{ route('keep.lixeira') }}">Lixeira</a>
<hr>
    <form action="{{ route('keep.gravar') }}" method = "post">
        @csrf
        <input type="text" placeholder="titulo" name = "titulo" value = "{{ old('titulo') }}">
        <textarea name="texto" placeholder="Nota" cols="30" rows="10" value = "{{ old('texto') }}"></textarea>
        <input type="submit" value="AAAAAAAAA">
    </form>
<hr>
@foreach ($notas as $nota)
    <div style = "border:1px dashed red; padding:2px">
        {{ $nota->titulo }}
        {{ $nota->texto }}
        <br>
        <a href = "{{ route('keep.editar', $nota->id) }}">Editar</a>
        <form action="{{ route('keep.apagar', $nota->id) }}" method = "POST">
            @csrf
            @METHOD('DELETE')
            <input type = "submit" value = "deletar"/>
            
        </form>
    </div>
    
@endforeach
