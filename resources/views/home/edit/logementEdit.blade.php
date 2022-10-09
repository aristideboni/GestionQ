@extends('base')

@section('content')

    <div class="card">
        <div class="card-header">
            <strong>Modification du logement</strong>
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

            <form action="/quartier/edit/{{ $logement->id }}" method="POST"> 
                @method('PUT')
                @csrf

                <input type="hidden" name="_method" value="put">
                <div class="input-group">
                    <div class="input-group">
                        <select type="text" class="form-control" name="quartier_id">
                        <option value=""></option>
                            @foreach ($quartiers as $q)
                                <option value="{{ $q->id }}" <?php  echo($logement->quartier_id==$q->id ? "selected": ""); ?> >
                                    {{ $q->LibQuartier }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    
                </div> 
                <br>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon">Reference : </div>
                        <input type="text" name="reference" value="{{ $logement->reference }}" class="form-control">
                        <div class="input-group-addon">
                            <i class="fa fa-user"></i>
                        </div>
                    </div>
                </div>
                <br>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon">Rue : </div>
                        <input type="text" name="rue" value="{{ $logement->rue }}" class="form-control">
                        <div class="input-group-addon">
                            <i class="fa fa-user"></i>
                        </div>
                    </div>
                </div>
                <br>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon">Superficie : </div>
                        <input type="text" name="superficie" value="{{ $logement->superficie }}" class="form-control">
                        <div class="input-group-addon">
                            <i class="fa fa-user"></i>
                        </div>
                    </div>
                </div>
                <br>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon">Loyer : </div>
                        <input type="text" name="loyer" value="{{ $logement->loyer }}" class="form-control">
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
