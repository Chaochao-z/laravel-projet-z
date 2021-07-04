@extends('layouts.app')
@section('content')
    
        <head>
        </head>
<div class="row">
        <div class="col-lg-11">
            <h2>Edit appart</h2>
        </div>
        <div class="col-lg-1">
            <a class="btn btn-primary" href="{{ url('appartements') }}"> Back</a>
        </div>
    </div>

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form method="post" action="{{ route('appartements.update',$locataire->idlocataires) }}" >
    @method('PATCH')
    @csrf
    <input type="hidden" class="form-control" id="id"  placeholder="id" name="id" value="{{ $appartement->id }}">
    <input type="hidden" class="form-control" id="user_id"  placeholder="user_id" name="user_id" value="{{ $appartement->user_id }}">
    <div class="form-group">
        <label for="rueappart">Addresse :</label>
        <input type="text" class="form-control" id="type" placeholder="type " name="type " value="{{ $appartement->type  }}">
    </div>
    <div class="form-group">
        <label for="villeappart">Ville:</label>
        <input type="text" class="form-control" id="nb_piece" placeholder="nb_piece " name="nb_piece " value="{{ $appartement->nb_piece  }}">
    </div>
    <div class="form-group">
        <label for="cpappart">Code postal:</label>
        <input type="text" class="form-control" id="prix "  placeholder="prix "name="prix "  value="{{ $appartement->prix  }}">
    </div>
    <div class="form-group">
        <label for="paysappart">Pays :</label>
        <input type="text" class="form-control" id="surface " placeholder="surface  " name="surface " value="{{ $appartement->surface  }}">
    </div>

    <div class="form-group">
        <label for="typeappart">Type :</label>
        <input type="text" class="form-control" id="description "  placeholder="description " name="description " value="{{ $appartement->description  }}">
    </div>
    <div class="form-group">
        <label for="etgappart">Etage :</label>
        <input type="text" class="form-control" id="status"  placeholder="status" name="status "value="{{ $appartement->status  }}">
    </div>
    <div class="form-group">
        <label for="ascenseurappart">Ascenseur :</label>
        <input type="text"  class="form-control" id="date_location "   placeholder="date_location " name="date_location "value="{{ $appartement->date_location  }}">
    </div>
    <div class="form-group">

    <button type="submit" class="btn btn-info">Submit</button>
    </div>
<br>
    <br>
</form>

@endsection
