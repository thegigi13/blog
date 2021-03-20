
@extends('base')

@section('title', config('app.name').' | about-us')

@section('content')

		<img src="/images/chien.jpg" alt="a dog">

        <p>Built with &hearts; by Me.</p>
        
        <p><a href="{{ route('home') }}">Revenir à la page d'accueil</a></p>

@endsection