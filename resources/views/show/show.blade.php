@extends('layouts.app')

@section('title', 'Fiche d\'un spectacle')

@section('content')
    <article>
        <h1>{{ $show->title }}</h1>
            
//…
        
        <h2>Liste des représentations</h2>
        @if($show->representations->count()>=1)
        <ul>
            @foreach ($show->representations as $representation)
                <li>{{ $representation->when }}</li>              
            @endforeach
        </ul>
        @else
        <p>Aucune représentation</p>
        @endif
        
        <h2>Liste des artistes</h2>
        <ul>
            @foreach ($show->artistTypes as $collaborateur)
                <li>
                    {{ $collaborateur->artist->firstname }}
                    {{ $collaborateur->artist->lastname }}
                    ({{ $collaborateur->type->type }})
                </li>              
            @endforeach
        </ul>
@endsection
