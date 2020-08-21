@extends('layouts.app')
@section('content')

<div class="container">

    <h2>Liste des Projets</h2>

    <ul>
        @foreach($projects as $project)

        <li><a href="{{Route('projets.edit',$project->id)}}">{{$project->name}}</a>
            <a href="{{Route('ProjectDelete',$project->id)}}"><button type="button" class="close float-none" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
            </a></button> Pilote : {{$project->pilote->Nom}}</li>

        @endforeach
    </ul>

    <button class="btn btn-info"><a href="{{Route('projets.create')}}">Ajouter</a></button>



</div>
@endsection