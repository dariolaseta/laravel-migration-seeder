@extends('layouts.app')

@section('title', 'Hello World')

@section('main-content')
    @foreach($trains as $train)
    <div class="card">

        <h1>{{"Agency: " . $train["agency"]}}</h1>
        <h2>{{"Departure station: " . $train["departure_station"]}}</h2>

        <p>{{"Arrival station: " . $train["arrival_station"]}}</p>
        <p>{{"Departure time: " . $train["arrival_time"]}}</p>
        <p>{{"Number of carriages: " . $train["number_of_carriages"]}}</p>
        <p>{{"Is in time: " . $train["in_time"]}}</p>
        <p>{{"Is deleted: " . $train["deleted"]}}</p>

    </div>
    @endforeach
@endsection