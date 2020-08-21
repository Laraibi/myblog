@extends('layouts.app')
@section('content')

<div class="container">

    <h2>Ajouter Projet</h2>

    <form action="/projets" method="post">
        @csrf
        <input class="form-control" type="text" name="name" placeholder="Nom"></br>
        <div class="form-group">
            <label for="pilote">Pilote :</label>
            <select class="form-control" name="pilote" id="pilote">
                @foreach ($pilotes as $pilote)
                <option value="{{$pilote->id}}">{{$pilote->Nom ." ". $pilote->Prenom}}</option>
                @endforeach
            </select>
        </div>
        <input type="submit" class="btn btn-success" value="Ajouter">

    </form>


</div>
@endsection