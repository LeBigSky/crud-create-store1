<h1> Crée vos propre Pokemons !/h1>
<div class="container d-flex justify-content-center gap-2">
    
    <form class="d-flex gap-2" action="{{ route('pokemons.store') }}" method="POST">
    @csrf
    <div>
        <label for="nom">Nom</label>
        <input type="text" name="nom" id="nom">
    </div>
    <div>
        <label for="type">Element</label>
        <input type="number" name="type" id="type">
    </div>
    <div>
        <label for="niveau">Nievau</label>
        <input type="number" name="niveau" id="niveau">
    </div>
    <button type="submit">Créer mon Pokémon !</button> 
    </form>
</div>