<h1>🎵 ~ TiFySpo ~ 🎵</h1>
<p>Musicas de qualidade prontinhas para você!</p>

<h2>Sua Playlist</h2>

@foreach ($musicas as $musica)
    <div style = "border:1px dashed red; padding:2px">
        <span>Título: {{ $musica->titulo }}</span>
        <span>Artista: {{ $musica->artista }}</span>
        <span>Álbum: {{ $musica->album }}</span>
        <span>Gênero: {{ $musica->genero }}</span>
        <span>Ano de Lançamento: {{ $musica->ano }}</span>
        <br>
        <a href = "{{ route('musica.editar', $musica->id) }}">Editar</a>
        <a href = "{{ route('musica.apagar', $musica->id) }}">Apagar</a>
    </div>
@endforeach

<a href=" {{ route('musica.criar') }}">Adicionar música!</a>