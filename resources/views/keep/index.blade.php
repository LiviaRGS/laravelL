<h1>OLÁ 🪶🪶🪶</h1>
<p>Fire Spirit Cookie.</p>
<hr>
    <form action="{{ route('keep.gravar') }}" method = "post">
        @csrf
        <textarea name="texto" placeholder="Nota" cols="30" rows="10"></textarea>
        <input type="submit" value="AAAAAAAAA">
    </form>
<hr>
@foreach ($notas as $nota)
    <div style = "border:1px dashed red; padding:2px">
        {{ $nota->texto }}
    </div>
    
@endforeach
