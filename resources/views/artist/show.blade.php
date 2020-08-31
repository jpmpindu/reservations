@extends('layouts.opp')

@section('title', 'Fiche d\'un artiste')

@section('content')
    <h1>{{ $artist->firstname }} {{ $artist->lastname }}</h1>
@endsection
