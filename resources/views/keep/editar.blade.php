<h1>OLÁ 🪶🪶🪶</h1>
<p>Wind Archer Cookie.</p>
<form method="post" action = "{{ route('keep.editarGravar') }}">
    @method('PUT')
    @csrf
    <textarea name="texto" placeholder="Nota" cols="30" rows="10" >{{ $nota->texto }}</textarea>
    <input type="hidden" name = "id" value = "{{ $nota->id }}">
    <input type="submit" value="AAAAAAAAA">
</form>