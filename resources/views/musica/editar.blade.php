<h1>🎵 ~ TiFySpo ~ 🎵</h1>
<p>Musicas de qualidade prontinhas para você!</p>

<h2>Editar Música</h2>

<form action="{{ Route('musica.editarGravar') }}" method="post">
    @csrf
    @method('PUT')
    <input type="text" placeholder="Título" name = "titulo" value = "{{ $musica->titulo }}">
    <input type="text" placeholder="Artista"name = "artista" value = "{{ $musica->artista }}">
    <input type="text" placeholder="Álbum" name = "album" value = "{{ $musica->album }}">
    <input type="text" placeholder="Gênero" name = "genero" value = "{{ $musica->genero }}">
    <label for="ano">Ano:</label>
    <input type="number" name="ano" id="ano" value = "{{ $musica->ano }}">
    <input type="hidden" name = "id" value = "{{ $musica->id }}">
    <input type="submit" value = "Editar Música">
</form>