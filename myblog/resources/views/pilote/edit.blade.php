@extends('layouts.app')
@section('content')

    <div class="container">

        <h2>Modifier Pilote</h2>

        <form action="/pilotes/{{$pilote->id}}" method="post">
        <input type="hidden" name="_method" value="PUT">
        @csrf
        <input  class="form-control"  type="text" name="Nom" placeholder="Nom" value="{{$pilote->Nom}}" ></br>
        <input  class="form-control"  type="text" name="Prenom" placeholder="Prenom" value="{{$pilote->Prenom}}" ></br>
        <input  class="form-control"  type="text" name="Date_Of_Birth" placeholder="Date de Nassaince" value="{{$pilote->Date_Of_Birth}}"></br>
        <input type="submit" class="btn btn-warning" value="Modifier">
        
        </form>


    </div>
    @endsection
