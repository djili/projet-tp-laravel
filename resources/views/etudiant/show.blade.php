@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{trans('commun.details')}}</div>

                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <th>
                                    {{trans('etudiant.nom')}}
                                </th>
                                <th>
                                    {{trans('etudiant.prenom')}}
                                </th>
                            </tr>
                                <tr>
                                    <th>
                                        {{$etudiant->nom}}
                                    </th>
                                    <th>
                                        {{$etudiant->prenom}}
                                    </th>
                                </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
