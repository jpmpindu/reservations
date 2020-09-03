@extends('layouts.app')

@section('title', 'Liste des artistes')

@section('content')
    <table>
        <thead>
            <tr>
                <th>Firstname</th>
                <th>Lastname</th>
            </tr>
        </thead>
        <tbody>
        @foreach($artists as $artist)
            <tr>
                <td>
                    <a href="{{route('artist.show', $artist->id)  }}">{{ $artist->firstname }}</a>
                </td>
                <td>
                    <a href="{{route('artist.show', $artist->id)  }}">{{ $artist->lastname }}</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
