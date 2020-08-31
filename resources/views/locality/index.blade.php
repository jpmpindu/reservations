@extends('layouts.app')

@section('title', 'Liste des locality')

@section('content')
    <h1>Liste des {{ $resource }}</h1>

      <table class="table table-striped">
            <h1>Liste des {{ $resource }}</h1>
            <thead>
            <tr>
                <th>locality</th>
                <th>postal code</th>
            </tr>
            </thead>
            <tbody id="locality">
            @foreach($localities as $locality)
                <tr>
                    <td>{{ $locality->locality}}</td>
                    <td>{{ $locality->postal_code}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
@endsection
