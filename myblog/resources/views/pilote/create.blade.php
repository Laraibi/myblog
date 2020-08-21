@extends('layouts.app')
@section('content')

    <div class="container">

        <h2>Ajouter Pilote</h2>

        <form action="/pilotes" method="post">
            @csrf
            <input class="form-control" type="text" name="Nom" placeholder="Nom"></br>
            <input class="form-control" type="text" name="Prenom" placeholder="Prenom"></br>
            <input class="form-control date" id="datepicker" type="text" name="Date_Of_Birth"
                placeholder="Date de Nassaince"></br>
            <input type="submit" class="btn btn-success" value="Ajouter">

        </form>


    </div>

@endsection

@section('scripts')
<script src="{{ asset('js/SelfScripts/StudentScript.js')}}" type="text/javascript">


</script>
@endsection
