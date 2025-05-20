<h1>OLÁ 🪶🪶🪶</h1>
<p>Wind Archer Cookie.</p>
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
<form method="post" action = "{{ route('keep.editarGravar') }}">
    @method('PUT')
    @csrf
    <input type="text" placeholder="titulo" name = "titulo" value = "{{ $nota->titulo }}">
    <textarea name="texto" placeholder="Nota" cols="30" rows="10" >{{ $nota->texto }}</textarea>
    <input type="hidden" name = "id" value = "{{ $nota->id }}">
    <input type="submit" value="AAAAAAAAA">
</form>