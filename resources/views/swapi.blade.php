<h1>Personagens da SWAPI</h1>

<ul>
    @foreach ($data['results'] as $character)
        <li>{{ $character['name'] }}</li>
    @endforeach
</ul>