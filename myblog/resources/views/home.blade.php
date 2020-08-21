@extends('layouts.app')
@section('content')

<div class="container">
<div class="row">
<div class="card col-4">
    <div class="card-body">
        Projets : {{$counts['projects']}}
    </div>
</div>
<div class="card col-4">
    <div class="card-body">
        Pilotes : {{$counts['pilotes']}}
    </div>
</div>
<div class="card col-4">
    <div class="card-body">
         Planificateurs : 
    </div>
</div>

</div>



</div>
@endsection