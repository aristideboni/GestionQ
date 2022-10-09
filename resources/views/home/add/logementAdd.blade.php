@extends('base')

@section('content')

    <div class="card">
        <div class="card-header">
            <strong>Ajout de logement</strong>
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

            <form action="{{ route('app_logement_create') }}" method="post" class="form-horizontal ">
                @csrf

                <div class="form-group">
                    <label for="nf-text" class="form-control-label"></label>
                    <select name="quartier_id" class="form-control">
                        <option value="">Selectionne un quartier</option>
                        @foreach ($quartiers as $quartier)
                            <option value="{{ $quartier->id }}">{{ $quartier->LibQuartier }}</option>
                        @endforeach
                    </select>

                </div>

                <div class="form-group">
                    <div class="input-group">
                        <input type="text" id="reference" name="reference" placeholder="Adresse géographique.. " class="form-control">
                        <div class="input-group-addon">
                            <i class="fa fa-user"></i>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="input-group">
                        <input type="text" id="rue" name="rue" placeholder="Rue.. " class="form-control">
                        <div class="input-group-addon">
                            <i class="fa fa-user"></i>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="input-group">
                        <input type="text" id="superficie" name="superficie" placeholder="Superficie (en m2).. " class="form-control">
                        <div class="input-group-addon">
                            <i class="fa fa-user"></i>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="input-group">
                        <input type="text" id="loyer" name="loyer" placeholder="Montant du loyer.. " class="form-control">
                        <div class="input-group-addon">
                            <i class="fa fa-user"></i>
                        </div>
                    </div>
                </div>

                <div class="form-actions form-group">
                    <button type="submit" class="btn btn-primary btn-sm">
                        <i class="fa fa-dot-circle-o"></i> Submit
                    </button>
                    <a href="{{ route('app_logement_list') }}" class="btn btn-danger btn-sm">
                        <i class="fa fa-ban"></i> Retour
                    </a>
                </div>
            </form>

        </div>

    </div>

@endsection
