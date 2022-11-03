<div class="container d-flex justify-content-center py-5">
    <h2>VOTRE POKEDEX COMPTE ACTUELLEMENT LES POKEMONS SUIVANTS</h2>
</div>


<div class="container d-flex gap-5 justify-content-center">


@foreach ($pokemons as $pokemon)
@if ($pokemon->type == "feu")
<div class="card" style="width: 18rem;">
    <img src="{{ asset('img/pokeshadow.png') }}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">{{ $pokemon['nom'] }}</h5>
      <p class="card-text">{{ $pokemon['nom'] }} est un pokemon de type {{ $pokemon['type'] }} </p>
      <p href="#" class="btn btn-danger">Niveau actuel de {{ $pokemon['nom'] }} : {{ $pokemon['niveau'] }}</p>
    </div>
  </div>
@elseif ($pokemon->type == "eau")
<div class="card" style="width: 18rem;">
    <img src="{{ asset('img/pokewater.png') }}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">{{ $pokemon['nom'] }}</h5>
      <p class="card-text">{{ $pokemon['nom'] }} est un pokemon de type {{ $pokemon['type'] }} </p>
      <p href="#" class="btn btn-primary">Niveau actuel de {{ $pokemon['nom'] }} : {{ $pokemon['niveau'] }}</p>
    </div>
  </div>
@elseif ($pokemon->type == "air")
<div class="card" style="width: 18rem;">
    <img src="{{ asset('img/pokeair.png') }}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">{{ $pokemon['nom'] }}</h5>
      <p class="card-text">{{ $pokemon['nom'] }} est un pokemon de type  {{ $pokemon['type'] }} </p>
      <p href="#" class="btn btn-secondary">Niveau actuel de {{ $pokemon['nom'] }} : {{ $pokemon['niveau'] }}</p>
    </div>
  </div>
@elseif ($pokemon->type == "electrique")
<div class="card" style="width: 18rem;">
    <img src="{{ asset('img/pokelec.png') }}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">{{ $pokemon['nom'] }}</h5>
      <p class="card-text">{{ $pokemon['nom'] }} pokemon de type {{ $pokemon['type'] }} </p>
      <p href="#" class="btn btn-warning">Niveau actuel de {{ $pokemon['nom'] }} : {{ $pokemon['niveau'] }}</p>
    </div>
  </div>
@endif
@endforeach
</div>