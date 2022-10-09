@extends('base')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <!-- DATA TABLE -->
            <h3 class="title-5 m-b-35">Liste des pays</h3>
            @if (session()->has('successDelete'))
            <div class="sufee-alert alert with-close alert-primary alert-dismissible fade show">
                <span class="badge badge-pill badge-primary">Success</span>
                {{ session()->get('successDelete') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif
            <div class="table-data__tool">
                <div class="table-data__tool-left">
                    <div class="rs-select2--light rs-select2--md">
                        <select class="js-select2" name="property">
                            <option selected="selected">All Properties</option>
                            <option value="">Option 1</option>
                            <option value="">Option 2</option>
                        </select>
                        <div class="dropDownSelect2"></div>
                    </div>
                    <div class="rs-select2--light rs-select2--sm">
                        <select class="js-select2" name="time">
                            <option selected="selected">Today</option>
                            <option value="">3 Days</option>
                            <option value="">1 Week</option>
                        </select>
                        <div class="dropDownSelect2"></div>
                    </div>
                    <button class="au-btn-filter">
                        <i class="zmdi zmdi-filter-list"></i>filters</button>
                </div>
                <div class="table-data__tool-right">
                    <a class="au-btn au-btn-icon au-btn--green au-btn--small" href="{{ route('app_pays_add') }}">
                        <i class="zmdi zmdi-plus"></i>Ajouter
                    </a>

                    <div class="rs-select2--dark rs-select2--sm rs-select2--dark2">
                        <select class="js-select2" name="type">
                            <option selected="selected">Export</option>
                            <option value="">Option 1</option>
                            <option value="">Option 2</option>
                        </select>
                        <div class="dropDownSelect2"></div>
                    </div>
                </div>
            </div>
            <div class="table-responsive table-responsive-data2">
                <table class="table table-data2">
                    <thead>
                        <tr>
                            <th>
                                <label class="au-checkbox">
                                    <input type="checkbox">
                                    <span class="au-checkmark"></span>
                                </label>
                            </th>
                            <th>#</th>
                            <th>Nom</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pays as $pays)
                        <tr class="tr-shadow">
                            <td>
                                <label class="au-checkbox">
                                    <input type="checkbox">
                                    <span class="au-checkmark"></span>
                                </label>
                            </td>
                            <td>{{ $loop->index + 1 }}</td>
                            <td>
                                <span class="block-email">{{ $pays->LibPays }}</span>
                            </td>

                            <td>
                                <div class="table-data-feature">

                                    <a href="{{ route('app_pays_edit', ['pays' => $pays->id]) }}" class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                        <i class="zmdi zmdi-edit"></i>
                                    </a>
                                    <button class="item" data-toggle="tooltip" data-placement="top" onclick="if(confirm('Voulez-vous vraiment le supprimer?'))
                                    {document.getElementById('form-{{ $pays->id }}').submit()}" title="Delete">
                                        <i class="zmdi zmdi-delete"></i>
                                    </button>

                                </div>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
            <div>
                
            </div>
            
            <!-- END DATA TABLE -->
        </div>
    </div>

@endsection
