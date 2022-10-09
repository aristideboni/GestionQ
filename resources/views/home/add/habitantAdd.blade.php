@extends('base')

@section('content')

    <div class="card">
        <div class="card-header">
            <strong>Ajout habitant</strong>
        </div>
        <div class="card-body card-block">

            @if (session()->has('success'))
                <div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
                    <span class="badge badge-pill badge-success">Success</span>
                    Ajout effectué avec succès!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif

            @if ($errors->any())
                <div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
                    <span class="badge badge-pill badge-danger">Error</span>
                    Echec de l'ajout.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif

            <form action="{{ route('app_habitant_create') }}" method="post" class="form-horizontal ">

                @csrf

                <div class="form-group">
                    <label for="nf-text" class="form-control-label"></label>
                        <select name="quartier_id" class="form-control">
                            <option value="">Selectionne le quartier</option>
                            @foreach ($quartiers as $quartier)
                                <option value="{{ $quartier->id }}">{{ $quartier->LibQuartier }}</option>
                            @endforeach
                        </select>

                    <label for="nf-text" class="form-control-label"></label>
                    <select name="logement_id" class="form-control">
                        <option value="">Selectionne la rue</option>
                        @foreach ($logements as $logement)
                            <option value="{{ $logement->id }}">{{ $logement->rue }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <div class="input-group">
                        <input type="text" id="nom" name="nom" placeholder="Nom.. " class="form-control">
                        <div class="input-group-addon">
                            <i class="fa fa-user"></i>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="input-group">
                        <input type="text" id="prenom" name="prenom" placeholder="Prénom(s).. " class="form-control">
                        <div class="input-group-addon">
                            <i class="fa fa-user"></i>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="input-group">
                        <input type="date" id="DatNaiss" name="DatNaiss" placeholder="Date de naissance" class="form-control">
                        <div class="input-group-addon">
                            <i class="fa fa-user"></i>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="input-group">
                        <input type="tel" id="tel" name="tel" placeholder="Téléphone.. " class="form-control">
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
