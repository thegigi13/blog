
@extends('layouts/app')

@section('content')

		<img src="{{ asset('images/quebec.png') }}" alt="Drapeau du Quebec" class="mt-12 rounded shadow-md h-32">

        <h1 class="mt-5 text-3xl sm:text-5xl font-semibold text-indigo-600">Hello from Quebec!</h1>

        <p class="text-lg text-gray-800" class="text-indigo-500 hover:text-indigo-600 underline">It's currently {{ date('h:i A') }}.</p>

@endsection