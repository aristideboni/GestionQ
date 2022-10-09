@extends('base')

@section('content')

    <div class="card">
        <div class="card-header">
            <strong>Modification de l'habitant</strong>
        </div>
        <div class="card-body card-block">

            @if (session()->has('success'))
                <div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
                    <span class="badge badge-pill badge-success">Success</span>
                    Modification effectué avec succès!.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif

            @if ($errors->any())
                <div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
                    <span class="badge badge-pill badge-danger">Error</span>
                    @foreach ($errors->all() as $error)
                        Echec de la modification!
                    @endforeach

                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif

            <form action="/habitant/edit/{{ $habitant->id }}" method="POST"> 
                @method('PUT')
                @csrf

                <input type="hidden" name="_method" value="put">
                <div class="input-group">
                    <div class="input-group">
                        <select type="text" class="form-control" name="quartier_id">
                        <option value=""></option>
                            @foreach ($quartiers as $quartier)
                                <option value="{{ $quartier->id }}" <?php  echo($habitant->quartier_id == $quartier->id ? "selected": ""); ?> >
                                    {{ $quartier->LibQuartier }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    
                </div> 
                <br>
                
                <div class="input-group">
                    <div class="input-group">
                        <select type="text" class="form-control" name="logement_id">
                        <option value=""></option>
                            @foreach ($logements as $logement)
                                <option value="{{ $logement->id }}" <?php  echo($habitant->logements_id == $logement->id ? "selected": ""); ?> >
                                    {{ $logement->rue }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                    
                <br>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon">Nom : </div>
                        <input type="text" name="nom" value="{{ $habitant->nom }}" class="form-control">
                        <div class="input-group-addon">
                            <i class="fa fa-user"></i>
                        </div>
                    </div>
                </div>

                <br>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon">Prenom : </div>
                        <input type="text" name="prenom" value="{{ $habitant->prenom }}" class="form-control">
                        <div class="input-group-addon">
                            <i class="fa fa-user"></i>
                        </div>
                    </div>
                </div>
                <br>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon">Date de Naissance : </div>
                        <input type="text" name="DatNaiss" value="{{ $habitant->DatNaiss }}" class="form-control">
                        <div class="input-group-addon">
                            <i class="fa fa-user"></i>
                        </div>
                    </div>
                </div>
                <br>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon">Telephone : </div>
                        <input type="text" name="tel" value="{{ $habitant->tel }}" class="form-control">
                        <div class="input-group-addon">
                            <i class="fa fa-user"></i>
                        </div>
                    </div>
                </div>
                
                <div class="form-actions form-group">
                    <button type="submit" class="btn btn-primary btn-sm">
                        <i class="fa fa-dot-circle-o"></i> Submit
                    </button>
                    <a href="{{ route('app_habitant_list') }}" class="btn btn-danger btn-sm">
                        <i class="fa fa-ban"></i> Retour
                    </a>
                </div>
            </form>

        </div>

    </div>

@endsection
