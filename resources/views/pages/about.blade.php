
@extends('layouts/app', ['title' => 'about-us'])

@section('content')

		<img src="{{ asset('images/dog.png') }}" alt="a dog" class="my-12 rounded-full shadow-md h-32">

        <h2 class="mb-5 text-gray-700">
        	Built with <span class="text-pink-500">&hearts;</span> by Me.
        </h2>
        
        <p>
        	<a href="{{ route('home') }}" class="text-indigo-500 hover:text-indigo-600 underline">Revenir à la page d'accueil</a>
        </p>

@endsection