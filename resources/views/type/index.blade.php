@extends('layouts.app')

@section('title', 'Liste des types d’artistes')

@section('content')
    <table>
        <thead>
            <tr>
                <th>Nom</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($types as $type)
                <tr>
                    <td>
                        {{ $type->type }}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
