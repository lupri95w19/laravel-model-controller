@extends('layouts.app')

@section('content')
<h1>Dati da "config/data.php": {{ $store['home'] }}</h1> {{-- Prima solamente home dava errore perché appunto adesso home è contenuto nell'array associativo store --}}
<p>This is my paragraph content.</p>
<button class="btn btn-primary">Cliccami</button>

@foreach ($movie as $singoloMovie)
    <p>Ciao questo è il non bonus, ripetuto tot volte quanti sono i film</p> 
    {{-- Qui si deve usare -> perché accedo ad un attributo dell'array associativo, mentre => si usa quando definisco indice con un nome giusto? Da chiedere --}}
@endforeach

<a href="/bonus">Entra nel bonus</a>

@endsection
