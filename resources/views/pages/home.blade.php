
@extends('base')

@section('content')

		<img src="{{ asset('images/quebec-1.png') }}" alt="Drapeau du Quebec">

        <h1>Hello from Quebec!</h1>

        <p>It's currently {{ date('h:i A') }}.</p>

@endsection