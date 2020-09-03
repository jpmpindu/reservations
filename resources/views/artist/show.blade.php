@extends('layouts.app')

@section('title', 'Fiche d\'un artiste')

@section('content')
    <table>
        <thead>
            <tr>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Type</th> 
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $artist->firstname }}</td>
                <td>{{ $artist->lastname }}</td>
                @foreach ($artist->types as $type )
                <td>{{ $type->type }}</td>
            @endforeach
            </tr>
        </tbody>
    </table>
@endsection

