<h1>POKEMON</h1>
<div class="container">
    <h1 class="border bg-primary py-2">HOME</h1>
    @foreach ($pokemons as $pokemon)
    <div class="card">
        <h1>{{ $pokemon['nom'] }}</h1>
        <h1>{{ $pokemon['type'] }}</h1>
        <h1>{{ $pokemon['niveau'] }}</h1>
    </div>
    @endforeach
</div>