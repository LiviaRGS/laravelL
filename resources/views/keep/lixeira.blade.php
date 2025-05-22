<h1>OLÁ 🪶🪶🪶</h1>
<p>Affogato Cookie. Ew.</p>
<a href="{{ route('keep') }}">Voltar</a>
@if(session('sucesso'))
<div style = "color:pink">
    {{ session('sucesso' )}}    
</div>
@endif
@foreach ($notas as $nota)
    <div style = "border:1px dashed red; padding:2px">
        {{ $nota->titulo }}
        {{ $nota->texto }}
        <a href = "{{ route('keep.restaurar', $nota->id) }}">Restaurar</a>
    </div>
    
@endforeach