@extends('layouts.app')
@section('content')

<div class="container">

    <h2>Liste des Pilotes</h2>

    <ul>
        @foreach($pilotes as $pilote)

        <li><a href="{{Route('pilotes.edit',$pilote->id)}}">{{$pilote->Nom ." ". $pilote->Prenom}}</a>
            <a href="{{Route('PiloteDelete',$pilote->id)}}"><button type="button" class="close float-none" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
            </a></button></li>

        @endforeach
    </ul>

    <button class="btn btn-info"><a href="{{Route('pilotes.create')}}">Ajouter</a></button>



</div>
@endsection