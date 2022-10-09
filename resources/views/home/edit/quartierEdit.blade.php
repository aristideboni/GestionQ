@extends('base')

@section('content')

    <div class="card">
        <div class="card-header">
            <strong>Modification du quartier</strong>
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

            <form action="/quartier/edit/{{ $quartier->id }}" method="POST"> 
                @method('PUT')
                @csrf

                <input type="hidden" name="_method" value="put">
                <div class="input-group">
                    <div class="input-group">
                        <select type="text" class="form-control" name="pays_id">
                        <option value=""></option>
                            @foreach ($villes as $v)
                                <option value="{{ $v->id }}" <?php  echo($quartier->ville_id==$v->id ? "selected": ""); ?> >
                                    {{ $v->LibVille }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    
                </div> 
                <br>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon">Quartier : </div>
                        <input type="text" name="LibQuartier" value="{{ $quartier->LibQuartier }}" class="form-control">
                        <div class="input-group-addon">
                            <i class="fa fa-user"></i>
                        </div>
                    </div>
                </div>
                
                <div class="form-actions form-group">
                    <button type="submit" class="btn btn-primary btn-sm">
                        <i class="fa fa-dot-circle-o"></i> Submit
                    </button>
                    <a href="{{ route('app_quartier_list') }}" class="btn btn-danger btn-sm">
                        <i class="fa fa-ban"></i> Retour
                    </a>
                </div>
            </form>

        </div>

    </div>

@endsection
