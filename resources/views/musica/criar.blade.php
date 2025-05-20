<h1>🎵 ~ TiFySpo ~ 🎵</h1>
<p>Musicas de qualidade prontinhas para você!</p>

<h2>Criar Música</h2>

<form action="{{ Route('musica.gravar') }}" method="post">
    @csrf
    <input type="text" placeholder="Título" name = "titulo">
    <input type="text" placeholder="Artista"name = "artista">
    <input type="text" placeholder="Álbum" name = "album">
    <input type="text" placeholder="Gênero" name = "genero">
    <label for="ano">Ano:</label>
    <input type="number" name="ano" id="ano">
    <input type="submit" value = "Criar Música">
</form>