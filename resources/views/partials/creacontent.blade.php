<section>
<h1> Crée vos propre Pokemons !</h1>
    <div class="container d-flex justify-content-center gap-2">
        
        <form class="d-flex gap-2" action="{{ route('pokemons.store') }}" method="POST">
        @csrf
        <div>
            <label for="nom">Nom</label>
            <input type="text" name="nom" id="nom">
        </div>
        <div>
            <label for="type">Element</label>
            <select name="type" id="type">
                <option value="feu">Feu</option>
                <option value="air">Air</option>
                <option value="eau">Eau</option>
                <option value="electrique">Electrique</option>
            </select>

        </div>
        <div>
            <label for="niveau">Niveau</label>
            <input type="number" name="niveau" id="niveau">
        </div>
        <button type="submit">Créer mon Pokémon !</button> 
        </form>
</div>
</section>
